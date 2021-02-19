<?php
$v=mysqli_connect("localhost","root","","pms");
$qry1="select * from brand";
$run1=mysqli_query($v,$qry1);
if(mysqli_num_rows($run1)>0)
{
	while($nw1=mysqli_fetch_array($run1))
	{
		?>
		<option value="<?php echo $nw1[0]; ?>"> <?php echo $nw1[1]; ?></option>
    <?php   
	}
}
?>