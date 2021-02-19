<?php
include 'model/model.php';
$obj=new models();

$mtble=$obj->join2($v,"invoice_details","customer","invoice_details.c_id=customer.c_id");
if(isset($_REQUEST['id'])) 
{
$value=array("delivery.In_id"=>$_REQUEST['id']);
$trak=$obj->join2where($v,"delivery","delivery_status","delivery.d_id=delivery_status.d_id",$value);
}


?>