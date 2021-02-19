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
$value=$bname="";
$uval=$uname="";

$un=true;
if(isset($_REQUEST['did']))
{
	$uid=$_REQUEST['did'];
	$adel=array("brand_id"=>$uid);
	$del=$obj->delete($v,"brand",$adel);
	if($del==true)
	{
		?>
		<script type="text/javascript">
		alert("Deleted");
		window.location="../m_brand.php";			
		</script>
		<?php
	}
}
if(isset($_REQUEST['sub']))
{
	$n=1;
	if(empty($_REQUEST['brandname']))
	{
		$n=0;
		$value="field is empty";
	}
	else
	{
		$bname=trim($_REQUEST['brandname']);
	}
	if($n==1)
	{
		$ida=array('brand_name' =>$bname);
		$ialr=$obj->selectid($v,"brand",$ida);
		if($ialr)
		{
			?>
			<script type="text/javascript">
			alert("Already Exist data");
			window.location="brand.php";	
			</script>
<?php
		}
		else
		{
		$data=array('brand_name' =>$bname);
		$val=$obj->insert($v,"brand",$data);
		if($val==true)
		{
			?>
			<script type="text/javascript">
				alert("succesfully data inserted ");
				window.location='m_brand.php';
			</script>
			<?php
		}
		}
	}
}
$mtble=$obj->select($v,"brand");



if(isset($_REQUEST['sid']))
	{
		
		$id=$_REQUEST['sid'];
		$where=array('brand_id'=>$id);
		$selid=$obj->selectid($v,"brand",$where);
		if(isset($_REQUEST['usubmit']))
		{

			if(empty($_REQUEST['nme']))
			{
				$un=false;
				$uval="field is empty";
			}
		
			if($un==true)
				{
					$ubname=trim($_REQUEST['nme']);
					$exi=array('brand_name' =>$ubname);
					$esel=$obj->selectid($v,"brand",$exi);
					if($esel)
					{
						?>
						<script type="text/javascript">
							alert("Already exit");
						</script><?php 
					}
					else
					{

					$dat1=array("brand_name"=>$ubname);
					$upd=$obj->update($v,"brand",$dat1,$where);
					
					if($upd==true)
					{
				?>
					<script type="text/javascript">
						alert("Update Record succesfully");
						window.location="m_brand.php";
				</script>
				<?php
			}

			}

			}

			}

		}

	
?>