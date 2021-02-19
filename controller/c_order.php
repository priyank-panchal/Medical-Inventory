<?php
include 'model/model.php';
$obj=new models();
$where=array("c_id"=>$_SESSION['customer']);
$sel=$obj->selectids($v,"invoice_details",$where);
$where1=array("invoice_details.c_id"=>$_SESSION['customer']);
if(isset($_REQUEST['val']))
{
	$where12=array("sales_details.In_id"=>$_REQUEST['val'],"invoice_details.c_id"=>$_SESSION['customer']);
	//$seljoin=$obj->selectids($v,"sales_details",$where12);
	$salesjoin=$obj->join3($v,"sales_details","product","invoice_details","sales_details.p_id=product.p_id","sales_details.In_id=invoice_details.In_id",$where12);
}

//$salesjoin=$obj->join3($v,"sales_details","product","invoice_details","sales_details.p_id=product.p_id",
//	"sales_details.In_id=invoice_details.In_id",$where1);

?>