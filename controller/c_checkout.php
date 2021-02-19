<?php
include 'model/model.php';
$obj=new models();
$seid=session_id();
$citys=$obj->select($v,"city");
$areas=$obj->select($v,"area");


if(isset($_SESSION['customer']))
{
$selarry=array("c_id"=>$_SESSION['customer']);
$arrid=$obj->selectid($v,"customer",$selarry);
}
$wh1=array("cart_temp.session_id"=>$seid);
$fwhere1=$obj->join2($v,"cart_temp","product","cart_temp.p_id=product.p_id",$wh1);

$wh2=array("session_id"=>$seid);
$cout2=$obj->join3($v,"checkout","area","city","checkout.area_id=area.area_id","checkout.city_id=city.city_id",$wh2);
$n=true;
$err1=$err2=$err3=$err4=$err5=$err6="";
$val1=$val2=$val3=$val4=$val5=$val7="";
$dte=date("Y-m-d");
if(isset($_REQUEST['sub1']))
{
	if(empty($_REQUEST['fname']))
	{
		$n=false;
		$err1="Field is Empty";
	}
	else
	{
		$val1=trim($_REQUEST['fname']);
		if(!preg_match("/^[A-z ]+$/", $val1))
		{
			$n=false;
			$err1="Enter the vaild data";
		}
	}
		if(empty($_REQUEST['phone']))
	{
		$n=false;
		$err6="Field is Empty";
	}
	else
	{
		$val7=$_REQUEST['phone'];
		if(!preg_match("/^[0-9]{10}+$/", $val7))
		{
			$n=false;
			$err6="Enter the vaild data";
		}
	}
	if(empty($_REQUEST['email']))
	{
		$n=false;
		$err2="Field is Empty";
	}
	else
	{
		$val2=$_REQUEST['email'];
		if(!filter_var($val2,FILTER_VALIDATE_EMAIL))
		{
			$n=false;
			$err2="Enter Vaild data";
		}
	}
if(empty($_REQUEST['a1']))
{
	$n=false;
	$err3="Field is Empty";
}
else
{
	$val3=$_REQUEST['a1'];
	
}
if(empty($_REQUEST['city']))
{
	$n=false;
	$err4="Field is Empty";
}
else
{
	$val4=$_REQUEST['city'];
}
if(empty($_REQUEST['address']))
{
	$n=false;
	$err5="Field is Empty";
}
else
{

	$val5=trim($_REQUEST["address"]);
}
if($n==true)
{	
	$whereid=array("session_id"=>$seid);
	$selbyid=$obj->selectid($v,"checkout",$whereid);
	if($selbyid)
	{
		$updateval=array("name"=>$val1,"address"=>$val5,"city_id"=>$val4,"area_id"=>$val3,"contact_no"=>$val7);
		$updteval=$obj->update($v,"checkout",$updateval,$whereid);
		if($updteval==true)
		?>
		<script type="text/javascript">
			window.location="user_checkout2.php";
		</script>
		<?php
	}
	else
	{
		$insertval=array("session_id"=>$seid,"name"=>$val1,"address"=>$val5,"city_id"=>$val4,"area_id"=>$val3,"email_id"=>$val2,"contact_no"=>$val7);
	$run=$obj->insert($v,"checkout",$insertval);
	if($run==true)
	{
		?>
		<script type="text/javascript">
			window.location="user_checkout2.php";
		</script>
		<?php 
	}
	}
	//$id=$obj->insertid($v,"invoice",$insertval);
	//darray("in_id"=>$id)
//	$invoiceins=array("c_id"=>$_SESSION['login'],"shipping_charges"=>$cart,"tax"=>10,"grand_total"=>$grandto
	//tal,"date_In"=>$dte,"discount"=>10);
	}
}
if(isset($_REQUEST['subcheckout2']))
{
	
	if(!empty($fwhere1))
	{

		foreach ($fwhere1 as $dtentry)
		 {
		 	$cntval=0;
		 	$sum=0;
			$selctqty=$dtentry->p_qty;
			$productqty=$dtentry->qty;
			$whereprod=$dtentry->p_id;
			$proarray=array("p_id"=>$whereprod);
			$whsel=$obj->selectids($v,"expire_date",$proarray);
			if(!empty($whsel))
			{
			foreach ($whsel as $w) {
				$sum+=$w->p_qty;
				}
			}
			if($sum>=$selctqty)
			{
				if($productqty>=$selctqty)
				{
					$newqty=$productqty-$selctqty;
					$updar=array("qty"=>$newqty);	
					$updatqty=$obj->update($v,"product",$updar,$proarray);
					$exprmin=$obj->selectmin($v,"expire_date",$proarray);
					$expireman=$exprmin->p_qty;
					$whereex=$exprmin->expire_id;
					$whereexparr=array("expire_id"=>$whereex);
					if($expireman==0)
					{
						$obj->delete($v,"expire_date",$whereexparr);
						$exprmin=$obj->selectmin($v,"expire_date",$proarray);
						$expireman=$exprmin->p_qty;
						$whereex=$exprmin->expire_id;
						$whereexparr=array("expire_id"=>$whereex);
					}
					if($expireman>=$selctqty)
					{
						$newexpireqty=$expireman-$selctqty;
						$expirarr=array("p_qty"=>$newexpireqty);
						$obj->update($v,"expire_date",$expirarr,$whereexparr);
						$cntval++;
						if($newexpireqty==0)
						{
							$obj->delete($v,"expire_date",$whereexparr);
						}
					}
					else if($expireman<$selctqty)
					{
						while(1)
						{
							$cnt=0;
							$exprnew=$obj->selectmin($v,"expire_date",$proarray);
							$actualqty=$exprnew->p_qty;
							$actualpro=$exprnew->expire_id;
							$aractul=array("expire_id"=>$actualpro);
							if($selctqty<=$actualqty)
							{
									$final=$actualqty-$selctqty;
									$finalar=array("p_qty"=>$final);
									$obj->update($v,"expire_date",$finalar,$aractul);
									$cntval++;
									if($final==0)
									{
										$obj->delete($v,"expire_date",$aractul);
									}
										break;	
						}
						else if($selctqty>$actualqty)
						{
							$selctqty=$selctqty-$actualqty;
							$obj->delete($v,"expire_date",$aractul);
							continue;
						}
						}

					}
				}
				else
				{
					?>
					<script type="text/javascript">
						alert("Out of Stock");
						window.location="user_checkout2.php";
					</script>

					<?php
				}
				
			}
			else
			{
				?>
				<script type="text/javascript">
					alert("out of stock");
					window.location="user_checkout2.php";
				</script>
				<?php 
			}
	
			}
		if($cntval!=0)
		{
			$dtin=date("Y-m-d");
			$insertinvoice=array("c_id"=>$_SESSION['customer'],"total"=>$_SESSION['totalcart'],"tax"=>$_SESSION	['tax'],"shipping_charges"=>$_SESSION['cart'],"grand_total"=>$_SESSION['ordertotal'],"date_In"=>$dtin,"discount"=>$_SESSION['dicount']);	
			$invoicefry=$obj->insertid($v,"invoice_details",$insertinvoice);
	if($invoicefry)
	{	
		if(isset($_SESSION['prescription']))
			{
				$invoiceid=$invoicefry[1];
				$precri=$_SESSION['prescription'];
				$datepre=date('y/m/d');
				$prearr=array("In_id"=>$invoiceid,"image"=>$precri,"date_pr"=>$datepre);
				$obj->insert($v,"prescription",$prearr);
			}		
		foreach ($fwhere1 as $d) 
			{
				$salesdata=array("sd_date"=>$dtin,"p_id"=>$d->p_id,"p_qty"=>$d->p_qty,"in_id"=>
					$invoicefry[1]);
				$salesfry=$obj->insert($v,"sales_details",$salesdata);
		}
		if($salesfry==1 && $invoicefry[0]==1)
		{
			$cart_arra=array("session_id"=>$seid);
			$obj->delete($v,"cart_temp",$cart_arra);
			?>
			<script type="text/javascript">
				alert("Your orders will be delivered in 24 Hours Thank you...!");
				window.location="order.php";
			</script>
			<?php 
		}
	}
	}
}

	else
	{
		?>
		<script type="text/javascript">
			alert("product Not selected");
		</script>
		<?php 
	}
}	
?>
