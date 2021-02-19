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
$err=$err1=$err2=$r="";
if(isset($_REQUEST['sub']))
{
	$n=true;
			
	if(empty($_REQUEST['prdate']))
	{
		$n=false;
		$err1="** Empty Field **";
	}
	else
	{
		$date=$_REQUEST['prdate'];
	}
	
	if(empty($_REQUEST['reason']))
	{
		$n=false;
		$err2="** Empty Field **";
	}
	else
	{
		$r=$_REQUEST['reason'];
	}
	if($n==true)
	{
		
		$data=array('pur_id'=>$_REQUEST['purid'],'date_pur_return'=>$date,'reason'=>$r);
		$value=$obj->insert($v,"purchase_return",$data);
		if($value==true)
		{
			?>
			<script type="text/javascript">
				alert("succesfully data inserted ");
				window.location='m_purchase_return.php';
			</script>
			<?php
		}
	}
}
$pd=$obj->select($v,"purchase_detail");
$mtble=$obj->select($v,"purchase_return");


$uperr=$uperr1=$uperr2=$upr="";		
if(isset($_REQUEST['prid']))
	{
		$upid=$_REQUEST['prid'];
		$where=array('pur_r_id'=>$upid);
		$uprun=$obj->selectid($v,"purchase_return",$where);
		if(isset($_REQUEST['upsub']))
		{
			$upn=1;
			if($_REQUEST['uppname']=="select")
		{
			$upn=false;
			$uperr="** Empty Field **";
		}
		else
		{
			$updrop=$_REQUEST['uppname'];
		}

		
		if(empty($_REQUEST['upprdate']))
		{
			$upn=false;
			$uperr1="** Empty Field **";
		}
	else
	{
		$update=$_REQUEST['upprdate'];
	}
	
	if(empty($_REQUEST['upreason']))
	{
		$upn=false;
		$err2="** Empty Field **";
	}
	else
	{
		$upr=$_REQUEST['upreason'];
	}	
	if($upn==true)
		{
				$updata=array('pur_id'=>$updrop,'date_pur_return'=>$update,'reason'=>$upr);			
					$upd=$obj->update($v,"purchase_return",$updata,$where);
					if($upd==true)
					{
				?>
					<script type="text/javascript">
						alert("Update data succesfully");
						window.location="m_purchase_return.php";
				</script>
				<?php
			}

		}

	}
}
if(isset($_REQUEST['did']))
{
	$delid=$_REQUEST['did'];
	$delwhere=array("pur_r_id"=>$delid);
	$delvalue=$obj->delete($v,"purchase_return",$delwhere);
	if($delvalue)
	{
		?>
		<script type="text/javascript">
			alert("Deleted");
			window.location="../m_purchase_return.php";
		</script>
		<?php
	}
}


?>