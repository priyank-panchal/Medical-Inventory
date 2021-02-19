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
$value=$cname="";
if(isset($_REQUEST['sub']))
{
	$n=1;
	if(empty($_REQUEST['category']))
	{
		$n=0;
		$value="field is empty";
	}
	else
	{
		$cname=ucfirst(trim($_REQUEST['category']));
		if(!preg_match("/^[A-z ]+$/",$cname))
		{
			$n=0;
			$value="Enter valid data";
		}
	}
	if($n==1)
	{
		$data=array('category_name' =>$cname);
		$catchk=$obj->selectid($v,"category",$data);
		if($catchk)
		{
			?>
				<script type="text/javascript">
					alert("Already Exist");
				</script>
				<?php
		}
		else
		{
			$ival=$obj->insert($v,"category",$data);
			if($ival==true)
			{
				?>
				<script type="text/javascript">
					alert("succesfully data inserted ");
					window.location='m_category.php';

				</script>
				<?php
			}
		}
	}
}

$sel=$obj->select($v,"category");
if(isset($_REQUEST['cid']))
{
	$upvalue=$upcname="";
	$upn=true;
	$id=$_REQUEST['cid'];
	$updat=array("category_id"=>$id);
	$usel=$obj->selectid($v,"category",$updat);
	if(isset($_REQUEST['upsub']))
	{
		if(empty($_REQUEST['upcategory']))
	{
		$upn=0;
		$upvalue="field is empty";
	}
	else
	{
		$upcname=ucfirst(trim($_REQUEST['upcategory']));
		if(!preg_match("/^[A-z ]+$/",$upcname))
		{
			$upn=0;
			$upvalue="Enter valid data";
		}
	}
	if($upn==1)
	{
		$aldata=array('category_name' =>$upcname);
		$cat=$obj->selectid($v,"category",$aldata);
		if($cat)
		{
			?>
				<script type="text/javascript">
					alert("Already Exist");
				</script>
				<?php
		}
		else
		{
			$updata=array('category_name' =>$upcname);
			$upval=$obj->update($v,"category",$updata,$updat);
			if($upval==true)
			{
				?>
				<script type="text/javascript">
					alert("succesfully data Updated ");
					window.location="m_category.php";
				</script>
				<?php
			}
		}
	}
	}
}
if(isset($_REQUEST['did']))
{
	$delid=$_REQUEST['did'];
	$delwhere=array("category_id"=>$delid);
	$delvalue=$obj->delete($v,"category",$delwhere);
	if($delvalue)
	{
		?>
		<script type="text/javascript">
			alert("Deleted");
			window.location="../m_category.php";
		</script>
		<?php
	}
}
?>