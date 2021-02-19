<?php
include'model/model.php';
$obj=new models();
$msg="";
$n=true;
$em=$ps="";
$email=$password="";
if(isset($_REQUEST['sub']))
{
	if(empty($_REQUEST['email']))
{
		$n=false;
		$em="field is empty";
	}
	else
	{
		$email=$_REQUEST['email'];		
	}

	if(empty($_REQUEST['password']))
	{
		$n=false;
		$ps="field is empty";
	}
	else
	{
		$password=$_REQUEST['password'];			
	}

if($n==true)
{
	$data= array("email_id" =>$email,"password"=>$password);
	$val=$obj->sup($v,"supplier",$data);
if(!$val)
{
$msg="Email and password does not match";
}
}
}
?>