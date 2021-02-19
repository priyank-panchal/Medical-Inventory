<?php
session_start();
if(!isset($_SESSION['customer']))
{
  header("location:index.php");
}
include 'controller/c_order.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php include'script.php';?> 
   </script>
</head>
<body>
  <?php include 'links.php';?>
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> 
            <strong class="text-black">Orders</strong>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                      <th class="product-thumbnail">Order No:</th>
                      <th class="product-name">Order Date</th>
                      <th class="product-total">Grand total</th>
                      <th class="product-remove">View Products</th>
                      <th class="product-status">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $total=0;
                  $subtotal=0;
                  if(empty($sel))
                  {
                      echo '<tr> 
                      <td colspan="7">No Orders</td>
                      </tr>';
                  }
                  else
                  {
                    foreach ($sel as $item){  
                    ?>
                  <tr>
                      <td class="product-name">
                      <h2 class="h5 text-black"><?php echo $item->In_id; ?></h2>
                     </td>
                      <td><?php echo $item->date_In; ?></td>
                    <td>RS/-<?php echo $item->grand_total; ?></td>
                    <td><a href="details.php?val=<?php echo $item->In_id; ?>" class="h5 text-black" >Deatils</a></td>
                    <td><a href="deliverystatus.php?in=<?php echo $item->In_id; ?>" class="h5 text-black" >Track</a></a>
                    </td>  
                  </tr>
                  <?php 
                  $subtotal+=$total;
    }
  }
    ?>
  </form>
                </tbody>
              </table>
            </div>
          
        </div>
    
        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6">
                <a href="shop.php" ><button class="btn btn-outline-primary btn-md btn-block" >Continue Shopping</button></a>
              </div>
            </div>
           
          </div>
        
        </div>
      </div>
    </div>

    <div class="site-section bg-secondary bg-image" style="background-image: url('images/bg_2.jpg');">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_1.jpg');">
              <div class="banner-1-inner align-self-center">
                <h2>Pharma Products</h2>
                
              </div>
            </a>
          </div>
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_2.jpg');">
              <div class="banner-1-inner ml-auto  align-self-center">
                <h2>Rated by Experts</h2>
               
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <?php include'footer_user.php';?>
  </div>


</body>

</html>