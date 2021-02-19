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

		$val1=$val2=$val3=$val4=$val5="";
		$name=$address=$email=$password=$contact="";
		if(isset($_REQUEST['sub']))
		{
			$n=true;
			if(empty($_REQUEST['sname']))
			{
				$n=false;
				$val1="** Empty Field **";
			}
			else
			{
				$name=trim($_REQUEST['sname']);
				if(!preg_match("/^[A-z ]+$/",$name))
				{
					$n=false;
					$val1="*Enter Valid Data*";
				}
			}
			if(empty($_REQUEST['saddress']))
			{
				$n=false;
				$val2="** Empty Field **";
			}
			else
			{
				$address=$_REQUEST['saddress'];
			}



			if(empty($_REQUEST['semail']))
			{
				$n=false;
				$val3="** Empty Field **";
			}
			else
			{
				$email=$_REQUEST['semail'];
				if(!filter_var($email,FILTER_VALIDATE_EMAIL))
				{
					$n=false;
					$val3="Enter proper Email address";

				}
			}

			if(empty($_REQUEST['spassword']))
			{	
				$n=false;
				$val4="field is empty";
			}
			else
		{
			$password=$_REQUEST['spassword'];
			$upper=preg_match('@[A-Z]@',$password);
			$lower=preg_match('@[a-z]@',$password);
			$number=preg_match('@[0-9]@',$password);
			$special=preg_match('@[^\w]@',$password);
			if(!$upper ||!$lower ||!$number ||!$special ||strlen($password)<8)
			{
				$n=false;
		   		$val4='Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
			}
		}

			if(empty($_REQUEST['scontact']))
			{
				$n=false;
				$val5="** Empty Field **";
			}
			else
			{
				$contact=$_REQUEST['scontact'];
				if(!preg_match("/^[0-9]{10}+$/",$contact))
				{
				
						$n=false;
						$val5="** Enter Valid Data and length**";
				
				}
			}

			if($n==true)
			{
			$data=array('sup_name'=>$name,'sup_address'=>$address,'email_id'=>$email,'password'=>$password,'contact_no'=>$contact);
			$value=$obj->insert($v,"supplier",$data);
			if($value==true)
			{
				?>
				<script type="text/javascript">
					alert("succesfully data inserted");
					window.location="m_supplier.php";
				</script>
				<?php
			}
		}
		}
		$mtble=$obj->select($v,"supplier");


		if(isset($_REQUEST['sid']))
			{
				$upval1=$upval2=$upval3=$upval4=$upval5="";
				$upname=$upaddress=$upemail=$uppassword=$upcontact="";
				$upn=true;
				$upid=$_REQUEST['sid'];
				$where=array('sup_id'=>$upid);
				$uprun=$obj->selectid($v,"supplier",$where);
				if(isset($_REQUEST['upsub']))
					{
					if(empty($_REQUEST['upsname']))
					{
						$upn=false;
						$upval1="** Empty Field **";
					}
			else
			{
				$upname=trim($_REQUEST['upsname']);
				if(!preg_match("/^[A-z ]+$/",$upname))
				{
					$upn=false;
					$upval1="*Enter Valid Data*";
				}
			}
			if(empty($_REQUEST['upsaddress']))
			{
				$upn=false;
				$upval2="** Empty Field **";
			}
			else
			{
				$upaddress=$_REQUEST['upsaddress'];
			}



			if(empty($_REQUEST['upsemail']))
			{
				$upn=false;
				$upval3="** Empty Field **";
			}
			else
			{
				$upemail=$_REQUEST['upsemail'];
				if(!filter_var($upemail,FILTER_VALIDATE_EMAIL))
				{
					$upn=false;
					$upval3="Enter proper Email address";

				}
			}

			if(empty($_REQUEST['upspassword']))
			{	
				$upn=false;
				$upval4="field is empty";
			}
			else
		{
			$uppassword=$_REQUEST['upspassword'];
			$upupper=preg_match('@[A-Z]@',$uppassword);
			$uplower=preg_match('@[a-z]@',$uppassword);
			$upnumber=preg_match('@[0-9]@',$uppassword);
			$upspecial=preg_match('@[^\w]@',$uppassword);
			if(!$upupper ||!$uplower ||!$upnumber ||!$upspecial ||strlen($uppassword)<8)
			{
				$upn=false;
		   		$upval4='Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
			}
		}

			if(empty($_REQUEST['upscontact']))
			{
				$upn=false;
				$upval5="** Empty Field **";
			}
			else
			{
				$upcontact=$_REQUEST['upscontact'];
				if(!preg_match("/^[0-9]{10}+$/",$upcontact))
				{
				
						$upn=false;
						$upval5="** Enter Valid Data and length**";
				
				}
			}
			if($upn==true)
			{
				$updata=array('sup_name'=>$upname,'sup_address'=>$upaddress,'email_id'=>$upemail,'password'=>$uppassword,'contact_no'=>$upcontact);
			$value1=$obj->update($v,"supplier",$updata,$where);
			if($value1==true)
			{
				?>
				<script type="text/javascript">
					alert("succesfully data updated");
					window.location="m_supplier.php";
				</script>
				<?php
			}

			}
	}
				
			}
if(isset($_REQUEST['did']))
		{
			$delid=$_REQUEST['did'];
			$delwhere=array("sup_id"=>$delid);
			$delvalue=$obj->delete($v,"supplier",$delwhere);
		
		if($delvalue)
		{
			?>
		<script type="text/javascript">
			alert("Deleted");
			window.location="../m_supplier.php";
		</script>
		<?php
	}
}
?>