<?php
include'model/model.php';
$obj=new models();
if(isset($_REQUEST['d_id']))
{
	$n=true;
	$err="";
	if(isset($_REQUEST['sub']))
	{
		if(empty($_REQUEST['address']))
		{
			$n=false;
			$err="Field is Empty";
		}
		else
		{
			$address=$_REQUEST['address'];
		}
		if($n==true)
		{
			$insertvalue = array('d_id' =>$_REQUEST['d_id'] ,'date_ds'=>date("y/m/d"),"status"=>$address);
			$insertfry=$obj->insert($v,"delivery_status",$insertvalue);
			if($insertfry==true)
			{
?>
	<script type="text/javascript">
		alert("status was Inserted");
		window.location='emp_deliveryshow.php';
	</script>
	<?php 
			}
		}
	}
}
?>