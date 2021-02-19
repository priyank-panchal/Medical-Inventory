<?php
include'model/model.php';
$obj=new models();
if(isset($_REQUEST['sid']))
{
$sar=array("p_id"=>$_REQUEST['sid']);
$val1=$obj->selectids($v,"expire_date",$sar);
}
$sel_pro=$obj->select_limit($v,"product");
$limit=$obj->select4($v,"product");
if(isset($_REQUEST['sid']))
{
$id=$_REQUEST['sid'];
$where=array("p_id"=>$id);
$si=$obj->selectid($v,"product",$where);

$bid=$si->brand_id;
$where1=array("brand_id"=>$bid);
$pb=$obj->selectid($v,"brand",$where1);

$cat=$si->subcategory_id;
$where2=array("subcategory_id" =>$cat );
$ct=$obj->selectid($v,"subcategory",$where2);

$catid=$ct->category_id;
$where3=array("category_id" =>$catid );
$ctid=$obj->selectid($v,"category",$where3);
}

if(isset($_REQUEST['fb']))
	{
		if(isset($_SESSION['customer']))
	{
				$fedcu=$_SESSION['customer'];
				$fesid=$_REQUEST['sid'];
				$fed=date('Y-m-d');
				$feddes=$_REQUEST['des'];
				$feedar=array("p_id"=>$fesid,"c_id"=>$fedcu,"feedback_date"=>$fed,"feedback_des"=>$feddes);
				$feedval=$obj->insert($v,"feedback",$feedar);
			if($feedar==true)
		{
			?>
			<script type="text/javascript">
				alert("feedback inserted");
			</script>
		<?php 
		}
	}
	else
	{
		?>
		<script type="text/javascript">
			alert("must be login and then goto feedback");
		</script>
		<?php 
	}
}
if(isset($_REQUEST['sid']))
{
$fstid=$_REQUEST['sid'];
$afeed=array("feedback.p_id"=>$fstid);
$fdback=$obj->join3($v,"feedback","customer","product","feedback.c_id=customer.c_id",
	"feedback.p_id=product.p_id",$afeed);
}
?>