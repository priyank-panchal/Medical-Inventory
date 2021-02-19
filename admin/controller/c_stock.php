<?php
include'./model/model.php';
$obj=new models();
$mtble=$obj->select($v,"product");
$uval=$uval1=$expr=$addqty=$rmqty='';
if(isset($_REQUEST['pid']))
{

	$pid=$_REQUEST['pid'];
	$dt=array("p_id"=>$pid);
	$mtt=$obj->selectid($v,"product",$dt);
	if($_REQUEST['action']=="add")
	{
		$n=true;
		if(isset($_REQUEST['usubmit']))
		{
			if(empty($_REQUEST['addqty']))
			{
				$n=false;
				$uval="Field is empty";
			}
			else
			{
				$addqty=$_REQUEST['addqty'];
				if(!preg_match("/^[0-9]+$/", $addqty))
				{
					$n=false;
					$uval="Enter valid Data";
				}
			}
			if(empty($_REQUEST['exprie']))
			{
				$n=false;
				$expr="Filed is empty";
			}
			else
			{
				$expna=$_REQUEST['exprie'];
			}
			if($n==true)
			{
				$oldqty=$mtt->qty;
				$productid=$mtt->p_id;
				$newqty=$oldqty+$addqty;
				$newqtyarr=array("qty"=>$newqty);
				$inwhere=array("p_id"=>$productid,"p_qty"=>$addqty,"expire"=>$expna);
				$upqty=$obj->update($v,"product",$newqtyarr,$dt);
				$selectarr=array("p_id"=>$productid,"expire"=>$expna);
				$selbyexprie=$obj->selectid($v,"expire_date",$selectarr);
				if($selbyexprie==true)
				{
					$qtyoldexpire=$selbyexprie->p_qty;
					$newexpire=$qtyoldexpire+$addqty;
					$dataarr=array("p_qty"=>$newexpire);
					$nonew=$obj->update($v,"expire_date",$dataarr,$selectarr);
				}
				else
				{
				$obj->insert($v,"expire_date",$inwhere);
				}
				if($upqty==true)
				{
					?>
					<script type="text/javascript">
						alert("Add quantity successfully");
						window.location="m_stock.php";
					</script>
					<?php 
				}
			}
		}
	}
	elseif ($_REQUEST['action']=="del") 
	{
		$n1=true;
		if(isset($_REQUEST['usubmit']))
		{
			if(empty($_REQUEST['delqty']))
			{
				$n1=false;
				$uval1="Field is empty";
			}
			else
			{
				$rmqty=$_REQUEST['delqty'];
			}
			if($n1==true)
			{
				$oldqty1=$mtt->qty;
				$datearr=array("p_id"=>$_REQUEST['pid'],"expire"=>$rmqty);
				$selectbydate=$obj->selectids($v,"expire_date",$datearr);
				foreach ($selectbydate as $seldate) {
						$newqty1=$oldqty1-$seldate->p_qty;
				}
					$newqtyarr1=array("qty"=>$newqty1);
					$upqty=$obj->update($v,"product",$newqtyarr1,$dt);
					$delproductqty=$obj->delete($v,"expire_date",$datearr);
					if($upqty==true)
					{	
						?>
						<script type="text/javascript">
								alert("Decrease quantity successfully");
							window.location="m_stock.php";
						</script>
						<?php 
					}	
			}
		}
	}
}
else if(isset($_REQUEST['p']))
{
	$whereid=array("expire_date.p_id"=>$_REQUEST['p']);
	$allexpire=$obj->join2whereorder($v,"expire_date","product","expire_date.p_id=product.p_id",$whereid);

}

?>