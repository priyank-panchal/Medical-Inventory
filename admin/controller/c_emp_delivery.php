<?php
include 'model/model.php';
$obj=new models();
$err2="";
$err1="";
$n=true;
if(isset($_REQUEST['sub']))
{
	if(empty($_REQUEST['name']))
	{
		$n=false;
		$err2="Employee Name Not Select";
	}
	else
	{
		$name=$_REQUEST['name'];
	}
	if(empty($_REQUEST['dte']))
	{
		$n=false;
		$err1="field is Empty";
	}
	else
	{
		$date=$_REQUEST['dte'];

	}
	if($n==true)
	{
		$invoiceid=$_REQUEST['inid'];
		$insert=array("In_id"=>$invoiceid,"date_delivery"=>$date,"e_id"=>$name);
		$insertval=$obj->insert($v,"delivery",$insert);
		if($insertval)
		{
			echo "<script>alert('record succesfully inserted ');
			window.location='m_invoice.php';</script>";
			
		}

	}

} 
$empname=$obj->select($v,"employee");

?>