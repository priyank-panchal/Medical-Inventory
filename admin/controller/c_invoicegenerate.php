<?php
include'model/model.php';
$obj=new models();
if(isset($_REQUEST['in']) && isset($_REQUEST['c'] )) 
{
	$customer=$_REQUEST['c'];
	$invoice=$_REQUEST['in'];
	$cut=array("c_id"=>$customer);
	$sel=$obj->selectid($v,"customer",$cut);
	$where=array("sales_details.In_id"=>$invoice);
	$where12=array("In_id"=>$invoice);
	$fori=$obj->join3where($v,"sales_details","invoice_details","product","sales_details.In_id=invoice_details.In_id","sales_details.p_id=product.p_id",$where);
	$indetail=$obj->selectid($v,"invoice_details",$where12);

} 
?>