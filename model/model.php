<?php
include'connect.php';
$c=new conclass();
$v=$c->connection();
 class models
 {
 	
 	public function login($con,$table,$data) 	
 	{
 		$qry="select * from $table where 1=1";
 		foreach ($data as $key => $value) 
 		{
 			$qry.=" and $key='$value'";

 		}
 		$run=$con->query($qry)or die(mysqli_error($con));
 	
 		if($f=$run->fetch_object())
 		{
 			session_start();
 			$_SESSION['customer']=$f->c_id;
 			
 		}
 	}
 	public function insert($con,$table,$data)
 	{	
 		$k=array_keys($data);
 		$key=implode(",", $k);
 		$v=array_values($data);
 		$values=implode("','", $v);
 			$qry="insert into $table($key)  values('$values')";
 		$run=$con->query($qry) or die(mysqli_error($con));
 		return $run;
 	}

 	public function insertid($con,$table,$data)
 	{	
 		$k=array_keys($data);
 		$key=implode(",", $k);
 		$v=array_values($data);
	 	$values=implode("','", $v);
 		$qry="insert into $table($key)  values('$values')";
 		$run=$con->query($qry) or die(mysqli_error($con));
 		$run2=mysqli_insert_id($con);
 		return array($run,$run2);
 	}
 	public function selectmin($con,$table,$where)
 	{

 		$qry="SELECT * FROM expire_date WHERE";
 		foreach ($where as $key => $value) {
 			$qry.=" $key='$value' and ";
 		}
 		$qry.="expire=(SELECT MIN(expire) FROM expire_date WHERE 1=1";
 		foreach ($where as $k => $v) {
 			$qry.=" and $k='$v')";
 		}
 		$run=$con->query($qry)or die(mysqli_error($con));
 		$r=$run->fetch_object();
 		return $r;
 	}

 	public function select($con,$table)
 		{
 		$qry="SELECT * from $table";
 		$run=$con->query($qry)or die(mysqli_error($con));
 		$n=mysqli_num_rows($run);
 		if($n)
 		{
 			while($r=$run->fetch_object()) 
 			{
 				$val[]=$r;
 			}
 			return $val;
 		}
 		else
 			return 0;
 		}

 	public function selectids($con,$table,$where)
 	{
 		$qry="SELECT * from $table where 1=1";
 		foreach ($where as $key => $value) {
 			$qry.=" and $key='$value'";
 		}
 		$run=$con->query($qry)or die(mysqli_error($con));
 		$n=mysqli_num_rows($run);
 		if($n)
 		{
 		while($r=$run->fetch_object())
 		{
 			$val[]=$r;
 		}
 		return $val;
 		}
 		else
 			return 0;
 	}
 	public function selectid($con,$table,$where)
 	{
 		$qry="SELECT * from $table where 1=1";
 		foreach ($where as $key => $value) {
 			$qry.=" and $key='$value'";
 		}
 		$run=$con->query($qry)or die(mysqli_error($con));
 		$r=$run->fetch_object();
 		return $r;
 	}

 	public function update($con,$table,$data,$where)
 	{
 		$qry="UPDATE $table SET ";
 		foreach ($data as $k => $v) {
 			$qry.="$k='$v',";
 		}
 		$qry=rtrim($qry,",");
 		$qry.=" where 1=1";
 		foreach ($where as $key => $value) {
 			$qry.=" and $key='$value'";
 		}
 		$fry=$con->query($qry)or die(mysqli_error($con));

 		return $fry;

 	}
 	public function delete($con,$table,$where)
 	{
 		$qry="DELETE FROM $table WHERE 1=1";
 		foreach ($where as $key => $value) {
 			$qry.=" and $key='$value'";
 		}
 		$run=$con->query($qry);
 
 		return $run;
 	}
 	function select_limit($con,$table)
 	{
 		$qry="SELECT * from $table limit 0,3";
 		$run=$con->query($qry)or die(mysqli_error($con));
 		$n=mysqli_num_rows($run);
 		if($n)
 		{
 			while($r=$run->fetch_object()) 
 			{
 				$val[]=$r;
 			}
 			return $val;
 		}
 		else
 			return 0;
 		
 	}

 	function select4($con,$table)
 	{
 		$qry="SELECT * from $table limit 4,8";
 		$run=$con->query($qry)or die(mysqli_error($con));
 		$n=mysqli_num_rows($run);
 		if($n)
 		{
 			while($r=$run->fetch_object()) 
 			{
 				$val[]=$r;
 			}
 			return $val;
 		}
 		else
 			return 0;
 		
 	}
 	function search($con,$table,$data)
 	{
 		$qry="select * from $table where";
 		foreach ($data as $key => $value) {
 			$qry.=" $key like '%$value%'";

 		}
 		$val=$con->query($qry) or die(mysqli_error($con));
 		$n=mysqli_num_rows($val);
 		if($n)
 		{
 		while($fry=$val->fetch_object())
 		{
 			$p[]=$fry;
 		}
 		return $p;
 		}
 		else
 			return 0;

 	}
 	function join3($con,$table,$table1,$table2,$on,$on1,$wh)
 		{
 			 $qry="SELECT $table2.*,$table1.*,$table.* FROM $table INNER JOIN $table1 ON $on INNER JOIN $table2 ON $on1 WHERE 1=1 ";
			foreach($wh as $key=>$value) {
 				$qry.="and $key ='$value' ";
 			}	
 		
 		$run=$con->query($qry)or die(mysqli_error($con));
 		$rows=mysqli_num_rows($run);
 		if($rows>0)
 		{
 			while($v=$run->fetch_object()) 
 				{
 					$val[]=$v;
 				}
 		return $val;
 			
 		}
 		else
 		{
 			return 0;
 		}
 		
 	}
 	function join2($con,$table,$table1,$on,$where)
 	{
 		$qry="SELECT $table.*,$table1.* FROM $table INNER JOIN $table1 ON $on WHERE 1=1";
 		foreach ($where as $key => $value) {
 			$qry.=" and $key='$value'";
 		}
 
 		$run=$con->query($qry)or die (mysqli_error($con));
 		$num=mysqli_num_rows($run);
 		if($num>0)
 		{
 			while($co=$run->fetch_object())
 			{
 				$val[]=$co;
 			}
 			return $val;
 		}
 		else
 			return 0;

 	}


 }


 
?>