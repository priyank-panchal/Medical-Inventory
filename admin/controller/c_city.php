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
if(isset($_REQUEST['sub']))
{
	$n=true;
if(empty($_REQUEST['cityname']))
{	
	$n=false;
	$val="field is empty";
}
else
{
	$c=$_REQUEST['cityname'];
	if(!preg_match("/^[A-z]+$/",$c))
	{
		$n=false;
		$val="Enter Valid data";
	}
}
if($n==true)
{
	$cityrdata=array("city_name"=>$c);
	$alrval=$obj->selectid($v,"city",$cityrdata);
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
	$cname=$_REQUEST['cityname'];
	$data=array("city_name"=>$cname);
	$value=$obj->insert($v,"city",$data);
	if($value==1)
	{
		?>
		<script type="text/javascript">
			alert("your data succesfullly inserted");
			window.location='m_city.php';
		</script>
		<?php
	}
	
}
}
}

$mtable=$obj->select($v,"city");


$upval=$upc="";
if(isset($_REQUEST['cid']))
{
	$id=$_REQUEST['cid'];
	$seldata=array("city_id"=>$id);
	$selv=$obj->selectid($v,"city",$seldata);


if(isset($_REQUEST['upsub']))
{
	$upn=true;
if(empty($_REQUEST['upcityname']))
{	
	$upn=false;
	$upval="field is empty";
}
else
{
	$upc=$_REQUEST['upcityname'];
	if(!preg_match("/^[A-z]+$/",$upc))
	{
		$upn=false;
		$upval="Enter Valid data";
	}
}
if($upn==true)
{
	$updata=array("city_name"=>$upc);
	$upvalue=$obj->update($v,"city",$updata,$seldata);
	if($upvalue==true)
	{
		?>
		<script type="text/javascript">
			alert("your data succesfullly updated");
			window.location='m_city.php';
		</script>
		<?php
	}
	
}

}
}


if(isset($_REQUEST['did']))
{
	$delid=$_REQUEST['did'];
	$delwhere=array("city_id"=>$delid);
	$delvalue=$obj->delete($v,"city",$delwhere);
	if($delvalue)
	{
		?>
		<script type="text/javascript">
			alert("Deleted");
			window.location="../m_city.php";
		</script>
		<?php
	}
}




?>
