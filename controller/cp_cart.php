<?php
	include 'model/model.php';
	$obj=new models();
	$seid=session_id();	
	$dte=date("y-m-d");
	$val5="";
if(!empty($_REQUEST['aaa']))
{
	switch ($_REQUEST['aaa']) {
		case 'add':
			if(!empty($_REQUEST["quantity"]))
			{
					$pid=$_REQUEST['p_id'];
					$where=array("cart_temp.session_id"=>$seid,"product.p_id"=>$pid);
					$fwhere1=$obj->join2($v,"cart_temp","product","cart_temp.p_id=product.p_id",$where)	;			
			if($fwhere1==true)
				{

					$qty=number_format($_REQUEST['quantity']);
					foreach ($fwhere1 as $fw) {
						$qty1=number_format($fw->p_qty);
						}	
						$f=array("session_id"=>$seid,"p_id"=>$_REQUEST['p_id']);
						$qty3=$qty+$qty1;
						$arqty=array("p_qty"=>$qty3);
						$upqty=$obj->update($v,"cart_temp",$arqty,$f);
					if($upqty)
					{
						?>
						<script type="text/javascript">
							window.location="cart.php";
						</script>
						<?php 
					}
				}
				else
				{
		$data=array("session_id"=>$seid,"p_qty"=>$_REQUEST['quantity'],"p_id"=>$_REQUEST['p_id'],"cart_date"=>$dte);
			$ins=$obj->insert($v,"cart_temp",$data);
			if($ins)
			{
				?>
				<script type="text/javascript">
					window.location="cart.php";
				</script>
				<?php 

				}
				
			}
				}
			break;
	case "delete":
		if(isset($_REQUEST['did']))
	{
		$id1=$_REQUEST['did'];
		$where1=array("p_id"=>$id1);
		$del=$obj->delete($v,"cart_temp",$where1);
		if($del==true)
		{
			?>
			<script type="text/javascript">
				window.location="cart.php";
			</script>
			<?php 
		}
	}
	break;
	case "update":
	{
		if(isset($_REQUEST['Uid']) && isset($_REQUEST['sub']))
 	{

 			$u_id=$_REQUEST['Uid'];
 			$cid=$_REQUEST['drop1'];
  			$whereup=array("p_id"=>$u_id,"session_id"=>$seid);
 			$upqty=array("p_qty"=>$cid);
 			$upwhere=$obj->update($v,"cart_temp",$upqty,$whereup);
 			if($upwhere)
 			{
 				?>
 				<script type="text/javascript">
 					window.location="cart.php";

 				</script>
 				<?php
 			}

 	}
	}	
}
}
$sid=array("cart_temp.session_id"=>$seid);
$cart_view = $obj->join2($v,"cart_temp","product","cart_temp.p_id=product.p_id",$sid);


if(isset($_POST['sub123']))
{

	 if(empty($_FILES['fname']['name']))
	{
		$n=false;
		$val5="image not inserted";
	}
	else
	{	
		$imgtype=$_FILES['fname']['type'];
		$allowed=array('image/jpg','image/jpeg','image/png');
		if(!in_array($imgtype, $allowed))
		{
			$n=false;
			$val5="you can only jpg and png file upload";
		}
		else
		{
			$imgname=rand(0,1000).$_FILES['fname']['name'];
			$upoad=$_FILES['fname']['tmp_name'];
			move_uploaded_file($upoad,"admin/prescriptionimg/".$imgname);
			$_SESSION['prescription']=$imgname;
			header('location:checkout.php');
		}
	}	
}
?>