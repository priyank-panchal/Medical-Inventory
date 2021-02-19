<?php 
class conclass
{
	public function connection()
	{
		$r=new mysqli("localhost","root","","pms");
		return $r;
	} 
}
?>