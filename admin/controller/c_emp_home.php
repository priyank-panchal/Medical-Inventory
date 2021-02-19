<?php
include'model/model.php';
$obj=new models();
if(isset($_SESSION['elogin']))
{
$emp_id=$_SESSION['elogin'];
$aremp=array("e_id"=>$emp_id);
$selemp=$obj->selectid($v,"employee",$aremp);
 }

?>