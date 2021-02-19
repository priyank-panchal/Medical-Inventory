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
$val=$name="";
$val1=$brandname="";
$val2=$price="";
$val3=$subc="";
$val4=$upoad="";
$val5=$date="";
$val6=$des="";
$val7=$year="";
$val8=$size="";
$qval=$qty="";
$p=$pres="";
$n=true;

if(isset($_REQUEST['sub']))
{

	if(empty($_REQUEST['pname']))
	{	
		$n=false;
		$val="field is empty";
	}
	else
	{
		$name=ucfirst($_REQUEST['pname']);
	}
//brand item

if($_REQUEST['bname']=="select")
{
	$n=false;	
	$val1="Field is empty";
}
else
{
	$brandname=$_REQUEST['bname'];
}


//price product
if(empty($_REQUEST['pprice']))
	{	
		$n=false;
		$val2="field is empty";
	}
else
{
	$price=$_REQUEST['pprice'];
	if(!preg_match("/^[0-9]+$/",$price))
	{
		$n=false;
		$val2="Enter Valid data";
	}
}

//subcategory 
if($_REQUEST["scategory"]=="select")
{
	$n=false;
	$val3="filed is empty";
}
else
{
	$subc=$_REQUEST['scategory'];
}

if(empty($_REQUEST['pdate']))
	{	
		$n=false;
		$val5="field is empty";
	}
	else
	{
		$date=$_REQUEST['pdate'];
	}

if(empty($_REQUEST['decrip']))
	{	
		$n=false;
		$val6="field is empty";
	}
	else
	{
	$des=$_REQUEST['decrip'];	
	}
	
if(empty($_REQUEST['year']))
	{	
		$n=false;
		$val7="field is empty";
	}
	else
	{
		$year=$_REQUEST['year'];
		if(!preg_match("/^[0-9]+$/",$year))
		{
			$n=false;
			$val7="Enter Valid data";
		}	
}
if(empty($_REQUEST['size']))
	{	
		$n=false;
		$val8="field is empty";
	}
else
	{
	$size=$_REQUEST['size'];
	}
    if(empty($_FILES['pimage']['name']))
	{
		$n=false;
		$val4=	"image not inserted";
	}
	else
	{	
		
		$imgtype=$_FILES['pimage']['type'];
		$allowed=array('image/jpg','image/jpeg','image/png');
		if(!in_array($imgtype, $allowed))
		{
			$n=false;
			$val4="you can only jpg and png file upload";
		}
		else
		{
			$imgname=rand(0,1000).$_FILES['pimage']['name'];
			$upoad=$_FILES['pimage']['tmp_name'];
			move_uploaded_file($upoad,"./productimg/".$imgname);
		}
	}
	if(empty($_REQUEST['pre']))
	{
		$n=false;
		$p="Field is empty";
	}
	else
	{
		$pres=$_REQUEST['pre'];
	}

	if(empty($_REQUEST['qty']))
	{
		$n=false;
		$qval="Field is empty";

	}
	else
	{
		$qty=$_REQUEST['qty'];
		if(!preg_match("/^[0-9]+$/", $qty))
		{
			$n=false;
			$qval="Enter Proper Data";
		}
	}


if($n==true)
{
	$palrdata=array("p_name"=>$name);
	$palrval=$obj->selectid($v,"product",$palrdata);
	if($palrval)
	{
		?>
		<script type="text/javascript">
			alert("Already Exits Data");
		</script>
		<?php
	}
	
	else
	{	
	$data=array("p_name"=>$name,"brand_id"=>$brandname,"p_price"=>$price,"subcategory_id"=>$subc,"image"=>$imgname,"u_pre"=>$pres,"expiry_date"=>$date,"description"=>$des,"year"=>$year,"size"=>$size,"qty"=>$qty);
	$value=$obj->insertid($v,"product",$data);
	$exprarr=array("p_id"=>$value[1],"p_qty"=>$qty,"expire"=>$date);
	$expirtbl=$obj->insert($v,"expire_date",$exprarr);
	if($expirtbl==1 && $value[0]==1)
	{
		?>
		<script type="text/javascript">
			alert("your data succesfullly inserted");
			window.location='m_product.php';
		</script>
		<?php
	}
}
} 
}
$b=$obj->select($v,"brand");
$sc=$obj->select($v,"subcategory");
$mtable=$obj->select($v,"product");

//update varible
$upval="";
$upval1=$upbrandname="";
$upval2=$upprice="";
$upval3=$upsubc="";
$upval4=$upupoad="";
$upval5=$update="";
$upval6=$updes="";
$upval7=$upyear="";
$upval8=$upsize="";
$upval=$upqty="";
$presc=$prescrip="";
$up=true;

if(isset($_REQUEST['upid']))
{
	$id=$_REQUEST['upid'];
	$where=array("p_id"=>$id);
	$upsel=$obj->selectid($v,"product",$where);
	if(isset($_REQUEST['usubmit']))
	{
		if(empty($_REQUEST['upname']))
		{	
			$up=false;
			$upval="field is empty";
		}
	else
	{
		$upname=ucfirst($_REQUEST['upname']);
		
	}
//brand item

if($_REQUEST['upbname']=="select")
{
	$up=false;	
	$upval1="Field is empty";
}
else
{
	$upbrandname=$_REQUEST['upbname'];
}

//price product
if(empty($_REQUEST['uppprice']))
	{	
		$up=false;
		$upval2="field is empty";
	}
else
{
	$upprice=$_REQUEST['uppprice'];
	if(!preg_match("/^[0-9]+$/",$upprice))
	{
		$up=false;
		$upval2="Enter Valid data";
	}
}

//subcategory 
if($_REQUEST["upscategory"]=="select")
{
	$up=false;
	$upval3="filed is empty";
}
else
{
	$upsubc=$_REQUEST['upscategory'];
}

if(empty($_REQUEST['uppdate']))
	{	
		$up=false;
		$upval5="field is empty";
	}
	else
	{
		$update=$_REQUEST['uppdate'];
	}

if(empty($_REQUEST['updecrip']))
	{	
		$up=false;
		$upval6="field is empty";
	}
	else
	{
	$updes=$_REQUEST['updecrip'];	
	}
	
if(empty($_REQUEST['upyear']))
	{	
		$up=false;
		$upval7="field is empty";
	}
	else
	{
		$upyear=$_REQUEST['upyear'];
		if(!preg_match("/^[0-9]+$/",$upyear))
		{
			$up=false;
			$upval7="Enter Valid data";
		}	
}
if(empty($_REQUEST['upsize']))
	{	
		$up=false;
		$upval8="field is empty";
	}
else
	{

	$upsize=$_REQUEST['upsize'];
	}
	
    if(empty($_FILES['uppimage']['name']))
	{
		$n=false;
		$upval4="image not inserted";
	}
	else
	{	
		
		$upimgtype=$_FILES['uppimage']['type'];
		$upallowed=array('image/jpg','image/jpeg','image/png');
		if(!in_array($upimgtype, $upallowed))
		{
			$up=false;
			$upval4="you can only jpg and png file upload";
		}
		else
		{
			$upimgname=rand(0,1000).$_FILES['uppimage']['name'];
			$upupoad=$_FILES['uppimage']['tmp_name'];
			move_uploaded_file($upupoad,"./productimg/".$upimgname);
		}
	}
	if(empty($_REQUEST['pre']))
	{
		$up=false;
		$presc="Field is empty";
	}
	else
	{
		$prescrip=$_REQUEST['pre'];
	}
	if(empty($_REQUEST['upqty']))
	{
		$up=false;
		$upval="Field is empty";

	}
	else
	{
		$upqty=$_REQUEST['upqty'];
		if(!preg_match("/^[0-9]+$/", $upqty))
		{
			$n=false;
			$upval="Enter Proper Data";
		}
	}


if($up==true)
{	
	$updata=array("p_name"=>$upname,"brand_id"=>$upbrandname,"p_price"=>$upprice,"subcategory_id"=>$upsubc,
		"image"=>$upimgname,"u_pre"=>$prescrip,
		"expiry_date"=>$update,"description"=>$updes,"year"=>$upyear,"size"=>$upsize,"qty"=>$upqty);
	$value1=$obj->update($v,"product",$updata,$where);
		if($value1==1)
	{
		?>
		<script type="text/javascript">
			alert("your data succesfullly updated");
			window.location='m_product.php';
			
		</script>
		<?php
	}
}

}
}
if(isset($_REQUEST['did']))
{
	$delid=$_REQUEST['did'];
	$delwhere=array("p_id"=>$delid);
	$delvalue=$obj->delete($v,"product",$delwhere);
	if($delvalue)
	{
		?>
		<script type="text/javascript">
			alert("Deleted");
			window.location="../m_product.php";
		</script>
		<?php
	}
}
if(isset($_REQUEST['search']))
{
	$txt=$_REQUEST['txt'];
	$dtxt=array("p_name"=>$txt);
	$searchtxt=$obj->search($v,"product",$dtxt);

}
?>