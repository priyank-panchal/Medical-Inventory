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
	$data=array("c_name"=>$name,"area_id"=>$area,"gender"=>$gen,"address"=>$address,"contact_no"=>$cno,"email_id"=>$email);
	$upwhere=array('c_id'=>$_SESSION['login']);
	$value=$obj->update($v,"customer",$data,$upwhere);
	if($value==true)
	{?>
		<script type="text/javascript">
			alert("Succefully update Profile..")
			window.location="index.php";
		</script>
		<?php
	}

}
}
$b=$obj->select($v,"area");
$arwhere=array('c_id'=>$_SESSION['customer']);
$selectall=$obj->selectid($v,"customer",$arwhere);

?>