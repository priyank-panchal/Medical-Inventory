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
$er=$err1="";
$err2=$ci="";
if(isset($_REQUEST['sub']))
{
	$n=true;
	if(empty($_REQUEST['scategory']))
	{
		$n=false;
		$er="** Empty Field **";
	}
	else
	{
		$err1=trim($_REQUEST['scategory']);
		if(!preg_match("/^[A-z ]+$/",$err1))
		{
			$n=false;
			$er="** Enter Valid Data **";
		}
	}
	if(empty($_REQUEST['cid']))
	{
		$n=false;
		$err2="** Empty Field **";
	}
	else
	{
	$ci=$_REQUEST['cid'];	
	}

	if($n==true)
	{
		$alrdata=array("subcategory_name"=>$err1);
		$alrval=$obj->selectid($v,"subcategory",$alrdata);
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
		$data=array('subcategory_name'=>$err1,'category_id'=>$ci);
		$value=$obj->insert($v,"subcategory",$data);
		if($value==true)
		{
			?>
			<script type="text/javascript">
				alert("succesfully data inserted ");
				window.location='m_subcategory.php';
			</script>
			<?php
		}
	
}
}
}
$sc=$obj->select($v,"category");
$msc=$obj->join2($v,"subcategory","category","subcategory.category_id=category.category_id");


if(isset($_REQUEST['usub']))
{
	$uper=$uperr1="";
	$uperr2=$upci="";
	$upn=true;
	$suid=$_REQUEST['usub'];
	$upsub=array("subcategory_id"=>$suid);
	$sel=$obj->selectid($v,"subcategory",$upsub);
	if(isset($_REQUEST['upsub']))
	{

	if(empty($_REQUEST['upscategory']))
	{
		$upn=false;
		$uper="** Empty Field **";
	}
	else
	{
		$uperr1=trim($_REQUEST['upscategory']);
		if(!preg_match("/^[A-z ]+$/",$uperr1))
		{
			$upn=false;
			$uper="** Enter Valid Data **";
		}
	}
	if(empty($_REQUEST['upcid']))
	{
			$upn=false;
		$uperr2="** Empty Field **";
	}
	else
	{
	$upci=$_REQUEST['upcid'];	
	}

	if($upn==true)
	{
		$updata=array('subcategory_name'=>$uperr1,'category_id'=>$upci);
		$upvalue=$obj->update($v,"subcategory",$updata,$sel);
		if($upvalue==true)
		{
			?>
			<script type="text/javascript">
				alert("succesfully data Updated");
				window.location="m_subcategory.php";
			</script>
			<?php
		}
	}


	}
}
if(isset($_REQUEST['did']))
{
	$delid=$_REQUEST['did'];
	$delwhere=array("subcategory_id"=>$delid);
	$delvalue=$obj->delete($v,"subcategory",$delwhere);
	if($delvalue)
	{
		?>
		<script type="text/javascript">
			alert("Deleted");
			window.location="../m_subcategory.php";
		</script>
		<?php
	}
}

?>