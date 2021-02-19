<?php
if(isset($_REQUEST['did']))
{
include'../model/model.php';
$obj=new models();
}
else
{
include'model/model.php';
$obj=new models();
}
$val=$name="";
$val1=$address="";
$val2=$email="";
$val3=$password="";
$val4=$phone="";
$n=true;
//employee name validtion
if(isset($_REQUEST['sub']))
{	
	if(empty($_REQUEST['empname']))
	{	
		$n=false;
		$val="field is empty";
	}

else
{
	$name=ucfirst(trim($_REQUEST['empname']));
	if(!preg_match("/^[A-z ]+$/",$name))
	{
		$n=false;
		$val="Enter Valid data";
	}
}

//employee address validtion
if(empty($_REQUEST['address']))
{
	$n=false;
	$val1="Field is empty";
}
else
{
	$address=$_REQUEST['address'];

}



//employee email validtion
if(empty($_REQUEST['empmail']))
	{	
		$n=false;
		$val2="field is empty";
	}
else
{
	$email = $_REQUEST['empmail'];
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$n=false;
		$val2="Enter Valid data";
	}
}

//employee password validtion
	if(empty($_REQUEST['emppassword']))
	{	
		$n=false;
		$val3="field is empty";
	}
else
{
	$password=$_REQUEST['emppassword'];
	$upper=preg_match('@[A-Z]@',$password);
	$lower=preg_match('@[a-z]@',$password);
	$number=preg_match('@[0-9]@',$password);
	$special=preg_match('@[^\w]@',$password);
	if(!$upper ||!$lower ||!$number ||!$special ||strlen($password)<8)
	{
		$n=false;
   $val3='Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
	}
}


		
//contact number validtion 

	if(empty($_REQUEST['empno']))
	{	
		$n=false;
		$val4="field is empty";
	}
else
{
	$phone=$_REQUEST['empno'];
	if(!preg_match("/^[0-9]{10}+$/",$phone))
	{
		
			$n=false;
			$val4="Enter valid data and must be 10 digit";
	
	}
}

if($n==true)
{
	$data=array("e_name"=>$name,"address"=>$address,"email_id"=>$email,"password"=>$password,"contact_no"=>$phone);
	$value=$obj->insert($v,"employee",$data);
	if($value==1)
	{
		?>
		<script type="text/javascript">
			alert("your data succesfullly inserted");
			window.location='m_employee.php';
		</script>
		<?php
	}
}
} 


	
if(isset($_REQUEST['emid']))
{
	$upval=$upname="";
	$upval1=$upaddress="";
	$upval2=$upemail="";
	$upval3=$uppassword="";
	$upval4=$upphone="";
	$upn=true;	
	$id=$_REQUEST['emid'];
	$eid=array("e_id"=>$id);
	$sel=$obj->selectid($v,"employee",$eid);
	if(isset($_REQUEST['upsub']))
	{
		if(empty($_REQUEST['upempname']))
	{	
		$upn=false;
		$upval="field is empty";
	}

else
{
	$upname=ucfirst(trim($_REQUEST['upempname']));
	if(!preg_match("/^[A-z ]+$/",$upname))
	{
		$upn=false;
		$upval="Enter Valid data";
	}
}

//employee address validtion
if(empty($_REQUEST['upaddress']))
{	
	$upn=false;
	$upval1="Field is empty";
}
else
{
	$upaddress=$_REQUEST['upaddress'];

}



//employee email validtion
if(empty($_REQUEST['upempmail']))
	{	
		$upn=false;
		$upval2="field is empty";
	}
else
{
	$upemail = $_REQUEST['upempmail'];
	if(!filter_var($upemail,FILTER_VALIDATE_EMAIL)) {
		$upn=false;
		$upval2="Enter Valid data";
	}
}

//employee password validtion
	if(empty($_REQUEST['upemppassword']))
	{	
		$upn=false;
		$upval3="field is empty";
	}
else
{
	$uppassword=$_REQUEST['upemppassword'];
	$upupper=preg_match('@[A-Z]@',$uppassword);
	$uplower=preg_match('@[a-z]@',$uppassword);
	$upnumber=preg_match('@[0-9]@',$uppassword);
	$upspecial=preg_match('@[^\w]@',$uppassword);
	if(!$upupper ||!$uplower ||!$upnumber ||!$upspecial ||strlen($uppassword)<8)
	{
		$upn=false;
   $upval3='Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
	}
}
//contact number validtion

	if(empty($_REQUEST['upempno']))
	{	
		$upn=false;
		$upval4="field is empty";
	}
else
{
	$upphone=$_REQUEST['upempno'];
	if(!preg_match("/^[0-9]{10}+$/",$upphone))
	{
		
			$upn=false;
			$upval4="Enter valid data and must be 10 digit";
	
	}
}

if($upn==true)
{
	$updat=array("e_name"=>$upname,"address"=>$upaddress,"email_id"=>$upemail,"password"=>$uppassword,"contact_no"=>$upphone);
	$up=$obj->update($v,"employee",$updat,$eid);
	if($up==true)
	{
		?>
		<script type="text/javascript">
			alert("Update data Succesfullly");
			window.location="m_employee.php";
		</script>
		<?php
	}
}

	}
}
if(isset($_REQUEST['did']))
{
	$delid=$_REQUEST['did'];
	$delwhere=array("e_id"=>$delid);
	$delvalue=$obj->delete($v,"employee",$delwhere);
	if($delvalue)
	{
		?>
		<script type="text/javascript">
			alert("Deleted");
			window.location="../m_employee.php";
		</script>
		<?php
	}
}
$m_tble=$obj->select($v,"employee");
?>
