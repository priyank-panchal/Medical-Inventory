<?php
include'model/model.php';
$obj=new models();
$empid=array("delivery.e_id"=>$_SESSION['elogin']);
$mtable=$obj->join3where($v,"delivery","invoice_details","customer","delivery.In_id=invoice_details.In_id","
	invoice_details.c_id=customer.c_id",$empid);
if(isset($_REQUEST['In']))
{
	$in=$_REQUEST['In'];
	$where=array("In_id"=>$in);
	$m_tble=$obj->join2where($v,"sales_details","product","sales_details.p_id=product.p_id",$where);
	$pres=$obj->selectids($v,"prescription",$where);

}
?>