<?php
include'model/model.php';
$obj=new models();
if(isset($_SESSION['elogin']))
{
	$where=array("delivery.e_id"=>$_SESSION['elogin']);
	$mtable=$obj->join2where($v,"delivery","delivery_status","delivery.d_id=delivery_status.d_id",
		$where);
} 
?>