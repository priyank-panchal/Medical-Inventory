<?php
include 'model/model.php';
$obj=new models();
if(isset($_REQUEST['inid']))
{
$where=array("invoice_details.In_id"=>$_REQUEST['inid']);
$mtable=$obj->join3where($v,"sales_details","product","invoice_details"
	,"sales_details.p_id=product.p_id","sales_details.In_id=invoice_details.In_id",$where);
$where12=array("In_id"=>$_REQUEST['inid']);
$preimg=$obj->selectid($v,"prescription",$where12);

}
?>