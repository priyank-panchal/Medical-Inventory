<?php
session_start();
include 'controller/c_checkout.php';

$totalcart=0;
if(!isset($_SESSION['customer']))
{
  ?>
  <script type="text/javascript">
    alert("You must be login then after you will proceed for checkout");
    window.location="login.php";
  </script>

<?php

}

 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include'script.php'; ?>
</head>
<body>
    <?php include'links.php'; ?>
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index.php">Home</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Checkout</strong>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section">
      <div class="container">
        
        <div class="row">
            <div class="col-md-6">
                <div class="row mb-5">
                  <h2 class="h3 mb-3 text-black">Invoice Details</h2>
              <div class="col-md-12">
                <div class="p-3 p-lg-5 border">
                      
                  <table class="table site-block-order-table mb-5" >
                    <tbody>
                    
                    <?php if(empty($cout2))
                    {
                      echo '<tr> 
                        <td>Not found</td>';
                    }  
                    else
                    {
                      foreach ($cout2 as $cout) {
                      ?>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Customer Name</strong></td>
                        <td class="text-black"><?php echo $cout->name; ?></td>
                      </tr>

                      <tr>
                        <td class="text-black font-weight-bold"><strong>Address</strong></td>
                        <td class="text-black" align="justify"><?php echo $cout->address; ?></td>
                      </tr>

                      <tr>
                        <td class="text-black font-weight-bold"><strong>Contact no</strong></td>
                        <td class="text-black"><?php echo $cout->contact_no; ?></td>
                      </tr>
                        <tr>
                        <td class="text-black font-weight-bold"><strong>Email</strong></td>
                        <td class="text-black"><?php echo $cout->email_id; ?></td>
                      </tr>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>City</strong></td>
                        <td class="text-black"><?php echo $cout->city_name; ?></td>
                      </tr>

                        <tr>
                        <td class="text-black font-weight-bold"><strong>Area</strong></td>
                        <td class="text-black"><?php echo $cout->area_name; ?></td>
                      </tr>

                      <tr>
                        <td class="text-black font-weight-bold"><strong>Pincode</strong></td>
                        <td class="text-black"><?php echo $cout->pincode; ?></td>
                      </tr>
       <?php }}?>
                    </tbody>
                </table>
              <div>
                <p style="color: black;font-size: 20px;">If You Want to Change Your Details Goto Back.</p>
                <a href="checkout.php" style="color: black;font-size: 20px;">Back</a>    
              </div>

                </div>
              </div>
            </div>
    
          </div>
      
          <div class="col-md-6">
                <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Your Order</h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Product</th>
                      <th>Total</th>
                    </thead>
                    <tbody>

                      <?php
                      if(empty($fwhere1))
                      {
                        echo '<tr>
                        <td>Checkout is empty</td>
                        </tr>';
                      }
                      else 
                        {
                          foreach ($fwhere1 as $price) {
                        ?>
                        <tr>
                            <td><?php echo $price->p_name;?><strong class="mx-2">x</strong> <?php echo $price->p_qty; ?></td>
                            <td>RS/-<?php echo $_SESSION['total']=$price->p_price * $price->p_qty;?></td>
                      </tr>
                      <?php
                      $totalcart+=$_SESSION['total'];
                      }
                    }?>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
                        <td class="text-black">RS/-<?php echo $_SESSION['totalcart']=$totalcart; ?></td>
                      </tr>

                      <tr>
                        <td class="text-black font-weight-bold"><strong>Shipping Carge</strong></td>
                        <td class="text-black">RS/-<?php
                        if(!$totalcart==0)
                        { 
                        if($totalcart>500)
                        {
                          $_SESSION['cart']=0;
                          echo $_SESSION['cart'];
                        }

                        else
                          {

                          $_SESSION['cart']=49;
                          echo $_SESSION['cart'];
                          }
                        }
                        else
                        {
                          
                          $_SESSION['cart']=0;
                          echo $_SESSION['cart'];
                        }
                          ?>
                          </td>
                      </tr>

                      <tr>
                        <td class="text-black font-weight-bold"><strong>Discount 10%</strong></td>
                        <td class="text-black font-weight-bold"><strong>RS/- <?php echo $_SESSION['dicount']=$_SESSION['totalcart']*10/100 ; ?> </strong></td>
                      </tr>

                      <tr>
                        <td class="text-black font-weight-bold"><strong>Tax</strong></td>
                        <td class="text-black font-weight-bold"><strong>RS/-<?php 
                        echo $_SESSION['tax']=$_SESSION['totalcart']*18/100;
                        ?> </strong></td>
                      </tr>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                        <td class="text-black font-weight-bold"><strong>RS/-<?php 
                        echo $_SESSION['ordertotal']=$_SESSION['totalcart'] + $_SESSION['cart']-
                        $_SESSION['dicount'];
                        ?> </strong></td>
                      </tr>
                    </tbody>
                </table>  
                <form method="post" >
                  <div class="form-group">
                    <button class="btn btn-primary btn-lg btn-block" name="subcheckout2" type="submit">Confirm Order</button> 
                  </div>
                  </form>
    
                </div>
              </div>
            </div>
    
          </div>
        </div>
        </form>
        <!-- </form> -->
      </div>
    </div>
    

   <?php include'advertisement.php';?>


 <?php include 'footer_user.php';?> 
  </div>

 
</body>

</html>