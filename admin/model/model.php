<?php
include'connect.php';
$c=new conclass();
$v=$c->connection();


 class models
 {
 	
 	function login($con,$table,$data) 	
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
 			$_SESSION['login']=$f->admin_id;
 		}

 	}
 	 	 	public function sup($con,$table,$data) 	
 	{
 		$qry="select * from $table where 1=1";
 		foreach ($data as $key => $value) 
 		{
 			$qry.=" and $key='$value'";

 		}
 		$run=$con->query($qry)or die(mysqli_error($con));
 		if($f=$run->fetch_object())
 		{
 			$_SESSION['suplogin']=$f->sup_id;
 			
 		}
 	} 	
 	

 	function emplogin($con,$table,$data) 	
 	{
 		$qry="select * from $table where 1=1";
 		foreach ($data as $key => $value) 
 		{
 			$qry.=" and $key='$value'";

 		}
 		//echo $qry;
 		$run=$con->query($qry)or die(mysqli_error($con));
 	
 		if($f=$run->fetch_object())
 		{
 			session_start();
 			$_SESSION['elogin']=$f->e_id;
 			header('location:emp_home.php');
 		}

 	}
 	function insert($con,$table,$data)
 	{	
 		$k=array_keys($data);
 		$key=implode(",", $k);
 		$v=array_values($data);
 		$values=implode("','", $v);
 		$qry="insert into $table($key) values('$values')";
 		$run=$con->query($qry) or die(mysqli_error($con));
 		return $run;
 	}

 	function insertid($con,$table,$data)
 	{	
 		$k=array_keys($data);
 		$key=implode(",", $k);
 		$v=array_values($data);
 		$values=implode("','", $v);
 		$qry="insert into $table($key) values('$values')";
 		$run=$con->query($qry) or die(mysqli_error($con));
 		$run1=mysqli_insert_id($con);
 		return array($run,$run1);
 	}

 	 function select($con,$table)
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


 	 function selectid($con,$table,$where)
 	{
 		$qry="SELECT * from $table where 1=1";
 		foreach ($where as $key => $value) {
 			$qry.=" and $key='$value' ";
 		}
 		$run=$con->query($qry)or die(mysqli_error($con));
 		$row=mysqli_num_rows($run);
 		if($row)
 		{
 		$r=$run->fetch_object();
 		return $r;
 		}
 		else
 		{
 			return 0; 
 		}
 	} 
 	function selectids($con,$table,$where)
 	{
 		$qry="SELECT * from $table where 1=1";
 		foreach ($where as $key => $value) {
 			$qry.=" and $key='$value'";
 		}
 		$run=$con->query($qry)or die(mysqli_error($con));
 		$count=mysqli_num_rows($run);
 		if($count>0)
 		{
 			while($r=$run->fetch_object())
 			{
 				$val[]=$r;
 			}
 			return $val;
 		}
 		else
 		{
 			return 0;
 		}
 		
 	
 	} 
 	function update($con,$table,$data,$where)
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
 	 function delete($con,$table,$where)
 	{
 		$qry="DELETE FROM $table WHERE 1=1";
 		foreach ($where as $key => $value) {
 			$qry.=" and $key='$value'";
 		}
 		$run=$con->query($qry);
 
 		return $run;
 	}

 	function join3($con,$table,$table1,$table2,$on,$on1)
 	{
 		$qry="SELECT $table2.*,$table1.*,$table.* FROM $table INNER JOIN $table1 ON $on INNER JOIN $table2 ON $on1";

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
 	function join3where($con,$table,$table1,$table2,$on,$on1,$where)
 	{
 		$qry="SELECT $table2.*,$table1.*,$table.* FROM $table INNER JOIN $table1 ON $on INNER JOIN $table2 ON $on1 where 1=1 ";
 		
 		foreach($where as $key => $value) {
 			$qry.=" and $key='$value' ";
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

 	function join4where($con,$table,$table1,$table2,$table3,$on,$on1,$on2,$where)
 	{
 		$qry="SELECT $table2.*,$table1.*,$table.* FROM $table INNER JOIN $table1 ON $on INNER JOIN $table2 ON $on1 where 1=1 ";
 		foreach($where as $key => $value) {
 			$qry.=" and $key='$value' ";
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
 	function join2($con,$table,$table1,$on1)
 	{
 		$qry="SELECT $table.*,$table1.* FROM $table INNER JOIN $table1 ON $on1";
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

 	function join2where($con,$table,$table1,$on1,$where)
 	{
 		$qry="SELECT $table.*,$table1.* FROM $table INNER JOIN $table1 ON $on1";
 		foreach ($where as $key => $value) {
 			$qry.=" where $key='$value'";
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
 	function join2whereorder($con,$table,$table1,$on1,$where)
 	{
 		$qry="SELECT $table.*,$table1.* FROM $table INNER JOIN $table1 ON $on1";
 		foreach ($where as $key => $value) {
 			$qry.=" where $key='$value'";
 		}
 		$qry.="ORDER BY expire";
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
 	
 	function leftjoin2($con,$table,$table1,$on)
 	{
 		$qry="SELECT $table.*,$table1.* FROM $table LEFT JOIN $table1 ON $on";
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

 	function leftjoin($con,$table,$table1,$table2,$on,$on1)
 	{
 		$qry="SELECT $table2.*,$table1.*,$table.* FROM $table LEFT JOIN $table1 ON $on LEFT JOIN $table2 ON $on1";

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
 }
?>