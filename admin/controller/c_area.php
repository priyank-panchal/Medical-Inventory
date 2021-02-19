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
$val=$c="";
$val1=$c1="";
$val2="";
$drop="";
$n=true;
if(isset($_REQUEST['sub']))
{	
	if(empty($_REQUEST['areaname']))
	{	
		$n=false;
		$val="field is empty";
	}
else
{
	$c=$_REQUEST['areaname'];
	
	if(!preg_match("/^[A-z]+$/",$c))
	{
		$n=false;
		$val="Enter Valid data";
	}
}
if(empty($_REQUEST['pincode']))
{
	$n=false;
	$val1="Field is empty";
}
else
{
	$c1=$_REQUEST['pincode'];
	if(!preg_match("/^[0-9]{6}+$/", $c1))
	{
		$n=false;
		$val1="Enter Valid data and length";
	}
}
if($_REQUEST['drop']=="select")
{
	$n=false;
	$val2="field is empty";
}
else
{
	$drop=$_REQUEST['drop'];
}
if($n==true)
{
	$alrdata=array("area_name"=>$c);
	$alrval=$obj->selectid($v,"area",$alrdata);
	if($alrval)
	{
		?>
		<script type="text/javascript">
			alert("Already Exits Data");
		</script>
		<?php
	}
	
	else
	{
	$data=array("area_name"=>$c,"pincode"=>$c1,"city_id"=>$drop);
	$value=$obj->insert($v,"area",$data);
	if($value==1)
	{
		?>
		<script type="text/javascript">
			alert("your data succesfullly inserted");
			window.location='m_area.php';
		</script>
		<?php
	}
}
}
} 
$two=$obj->select($v,"city");
$mtable=$obj->select($v,"area");

$upval=$upc="";
$upval1=$upc1="";
$upval2="";	
$updrop="";
$upn=true;
if(isset($_REQUEST['aid']))
{
	
	$aid=$_REQUEST['aid'];
	$adata=array("area_id"=>$aid);
	$awhere=$obj->selectid($v,"area",$adata);
	if(isset($_REQUEST['upsub']))
{	
	if(empty($_REQUEST['upareaname']))
	{	
		$upn=false;
		$upval="field is empty";
	}
	else
	{
	$upc=trim($_REQUEST['upareaname']);
	
	if(!preg_match("/^[A-z ]+$/",$upc))
	{
		$upn=false;
		$upval="Enter Valid data";
	}
	}
if(empty($_REQUEST['uppincode']))
{
	$upn=false;
	$upval1="Field is empty";
}
else
{
	$upc1=$_REQUEST['uppincode'];
	if(!preg_match("/^[0-9]{5}+$/", $upc1))
	{
		$upn=false;
		$upval1="Enter Valid data and length";
	}
}
if($_REQUEST['updrop']=="select")
{
	$upn=false;
	$upval2="field is empty";
}
else
{
	$updrop=$_REQUEST['updrop'];
}
if($upn==true)
{	
	$uparray=array("area_name"=>$upc,"pincode"=>$upc1,"city_id"=>$updrop);
	$upvalue=$obj->update($v,"area",$uparray,$adata);
	if($upvalue==true)
	{
		?>
		<script type="text/javascript">
			alert("your data succesfullly updated");
			window.location='m_area.php';
		</script>
		<?php
	}

}

}
}
if(isset($_REQUEST['did']))
{
	$delid=$_REQUEST['did'];
	$delwhere=array("area_id"=>$delid);
	$delvalue=$obj->delete($v,"area",$delwhere);
	if($delvalue)
	{
		?>
		<script type="text/javascript">
			alert("Deleted");
			window.location="../m_area.php";
		</script>
		<?php
	}
}
?>
