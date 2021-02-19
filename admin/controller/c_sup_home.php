<?php
session_start();
include'model/model.php';
$obj=new models();
if(isset($_SESSION['suplogin']))
{
$sup_id=$_SESSION['suplogin'];	
$aremp=array("sup_id"=>$sup_id);	
$sel=$obj->selectids($v,"purchase_detail",$aremp);
$val=$obj->join2($v,"purchase_return","purchase_detail","purchase_return.pur_id=purchase_detail.pur_id");
}

?>l