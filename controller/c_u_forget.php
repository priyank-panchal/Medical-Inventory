<?php
include'model/model.php';
$obj=new models();
$mail=$em="";
$msg="";
$n=true;
if(isset($_REQUEST['sub']))
{
	if(empty($_REQUEST['email']))
	{
		$n=false;
		$em="Field is Empty";

	}
	else
	{
		$mail=$_REQUEST['email'];
		if(!filter_var($mail,FILTER_VALIDATE_EMAIL))
		{
			$n=false;
			$em="Enter proper Email id";
		}		
	}
	if($n==true)
	{
	$data=array("email_id"=>$mail);
	$val=$obj->selectid($v,"customer",$data);
	if(!$val)
	{
		$msg="Email not match ";
	}
}
}

?>