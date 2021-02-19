<?php
$v=mysqli_connect("localhost","root","","pms");
if(!empty($_POST['brandid'])) 
{
	$val=$_POST['brandid'];
	$qry="SELECT * FROM product WHERE brand_id='$val'";
	$run1=mysqli_query($v,$qry);
	if(mysqli_num_rows($run1)>0)
	{
		while($new=mysqli_fetch_array($run1))
		{
			?>
			<div class="col-sm-6 col-lg-4 text-center item mb-4" >
               	 <div>
                	  <a href="shop-single.php?sid=<?php echo $new[0];?>">
                  	<img src="admin/productimg/<?php echo $new[5]; ?> " height='200px' width='200px' alt='not found' /></a>
                  	<h3 class="text-dark"><a href="shop-single.php?sid=<?php echo $nw1[0]; ?>">
                  		<?php echo $new[1];?>
                  	 </a></h3>
                <p class="price">Rs/-<?php echo $new[3];?></p>
	                 </div>
	             </div>
			<?php 
		}
	}
}
?>