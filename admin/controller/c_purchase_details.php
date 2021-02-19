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
$err1=$err2=$err3=$err4="";
$sname=$pname=$des=$date="";
if(isset($_REQUEST['sub']))
{
	$n=true;
	if($_REQUEST['sname']=="select")
		{
			$n=false;
			$err1="field is empty";
		}
	
	if(empty($_REQUEST['pname']))
	{
		$n=false;
		$err2="** Empty Field **";
	}
	else
	{
		$pname=trim($_REQUEST['pname']);
		if(!preg_match("/^[A-z ]+$/",$pname))
		{
			$n=false;
			$err2="** Enter Valid Data **";
		}
	}
	if(empty($_REQUEST['decrip']))
	{
		$n=false;
		$err3="** Empty Field **";
	}
	else
	{
		$des=trim($_REQUEST['decrip']);
		if(!preg_match("/^[A-z ]+$/",$des))
		{
			$n=false;
			$err3="** Enter Valid Data **";
		}
	}
	if(empty($_REQUEST['pdate']))
	{
		$n=false;
		$err4="** Empty Field **";
	}
	else
	{
		$date=$_REQUEST['pdate'];
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
		$sname=$_REQUEST['sname'];
		$data1=array('sup_id'=>$sname,'pur_name'=>$pname,'description'=>$des,'date_purchase'=>$date);
		$value=$obj->insert($v,"purchase_detail",$data1);
			if($value==true)
		{
			?>
			<script type="text/javascript">
				alert("succesfully data inserted ");
				window.location='m_purchase_details.php';
			</script>
			<?php
		}
	}
}

$uperr1=$uperr2=$uperr3=$uperr4="";
$upsname=$uppname=$updes=$udate="";

if(isset($_REQUEST['purid']))
{
	$upn=true;
	$pid=$_REQUEST['purid'];
	$seldata=array("pur_id"=>$pid);
	$selv=$obj->selectid($v,"purchase_detail",$seldata);
	if(isset($_REQUEST['upsub']))
	{
		$upn=true;
			if($_REQUEST['upsname']=="select")
				{
				$upn=false;
			$uperr1="field is empty";
			}
			else
			{
			$upsname=$_REQUEST['upsname'];
			}
	
	if(empty($_REQUEST['uppname']))
	{
		$upn=false;
		$uperr2="** Empty Field **";
	}
	else
	{
		$uppname=trim($_REQUEST['uppname']);
		if(!preg_match("/^[A-z ]+$/",$uppname))
		{
			$upn=false;
			$uperr2="** Enter Valid Data **";
		}
	}
	if(empty($_REQUEST['updecrip']))
	{
		$upn=false;
		$uperr3="** Empty Field **";
	}
	else
	{
		$updes=trim($_REQUEST['updecrip']);
		if(!preg_match("/^[A-z ]+$/",$updes))
		{
			$upn=false;
			$uperr3="** Enter Valid Data **";
		}
	}
	if(empty($_REQUEST['uppdate']))
	{
		$upn=false;
		$uperr4="** Empty Field **";
	}
	else
	{
		$update=$_REQUEST['uppdate'];
	}
	if($upn==true)
	{	
	$updata=array('sup_id'=>$upsname,'pur_name'=>$uppname,'description'=>$updes,'date_purchase'=>$update);
		$selvalue=$obj->update($v,"purchase_detail",$updata,$selv);
			if($selvalue==true)
		{
			?>
			<script type="text/javascript">
				alert("succesfully data updated");
				window.location='m_purchase_details.php';
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
		$delwhere=array("pur_id"=>$delid);
		$delvalue=$obj->delete($v,"purchase_detail",$delwhere);
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


$sup=$obj->select($v,"supplier");
$mtble=$obj->select($v,"purchase_detail");
//print_r($mtble);
//exit;

?>