<?php
include'model/model.php';
$obj=new models();
$val=$name="";
$val1=$area="";
$val2=$gen="";
$val3=$address="";
$val4=$email="";
$val5=$password="";
$val6=$cno="";
$n=true;
if(isset($_REQUEST['sub']))
{	
	if(empty($_REQUEST['name']))
	{	
		$n=false;
		$val="field is empty";
	}

else
{
	$name=ucfirst(trim($_REQUEST['name']));
	if(!preg_match("/^[A-z ]+$/",$name))
	{
		$n=false;
		$val="Enter Valid data";
	}
}
//registration area validtion
if($_REQUEST['aname']=="select")
{
	$n=false;
	$val1="Field is empty";
}
else
{
	$area=$_REQUEST['aname'];
}
//registration gender validtion
if(empty($_REQUEST['gen']))
{
	$n=false;
	$val2="Field is empty";
}
else
{
	$gen=$_REQUEST['gen'];
}

//registration address validtion
if(empty($_REQUEST['address']))
{
	$n=false;
	$val3="Field is empty";
}
else
{
	$address=$_REQUEST['address'];
}
//registration email validation
if(empty($_REQUEST['email']))
	{	
		$n=false;
		$val4="field is empty";
	}
else
{
	$email=$_REQUEST['email'];
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$n=false;
		$val4="Enter Valid data";
	}
}

//registration password validtion
	if(empty($_REQUEST['password']))
	{	
		$n=false;
		$val5="field is empty";
	}
else
{
	$password=$_REQUEST['password'];
	$upper=preg_match('@[A-Z]@',$password);
	$lower=preg_match('@[a-z]@',$password);
	$number=preg_match('@[0-9]@',$password);
	$special=preg_match('@[^\w]@',$password);
	if(!$upper ||!$lower ||!$number ||!$special ||strlen($password)<8)
	{
		$n=false;
   $val5='Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
	}
}		
//contact number validtion 
	if(empty($_REQUEST['cno']))
	{	
		$n=false;
		$val6="field is empty";
	}
else
{
	$cno=trim($_REQUEST['cno']);
	if(!preg_match("/^[0-9]{10}+$/",$cno))
	{
		
			$n=false;
			$val6="Enter valid data and must be 10 digit";
	}
}
if($n==true)
{
	$eml=array("email_id"=>$email);
	$vr=$obj->selectid($v,"customer",$eml);
	if($vr)
	{
		?>
	<script type="text/javascript">
		alert("Email Already Exists");

	</script>
	<?php 
	}
	else
	{
	$data=array("c_name"=>$name,"area_id"=>$area,"gender"=>$gen,"address"=>$address,"contact_no"=>$cno,"email_id"=>$email,"password"=>$password);
	$value=$obj->insert($v,"customer",$data);
	if($value==true)
	{
		?>
		<script type="text/javascript">
			alert("Now You are Registered..")
			window.location="index.php";
		</script>
		<?php
	}
}
}
}
$b=$obj->select($v,"area");
?>