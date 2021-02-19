<?php
include'model/model.php';
$obj=new models();
$value=array("In_id"=>$_REQUEST['in']);
$trak=$obj->join2($v,"delivery","delivery_status","delivery.d_id=delivery_status.d_id",$value);
 
?>