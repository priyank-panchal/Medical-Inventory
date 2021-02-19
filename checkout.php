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
        <form method="post" >
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">Billing Details</h2>
            <div class="p-3 p-lg-5 border">
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_fname" class="text-black">Name<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_fname" name="fname" value="<?php echo $arrid->c_name; ?>">
                      <div class="error" style="color: red;"><?php echo $err1; ?></div>
                </div>
              </div>
                 
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_companyname" class="text-black">Email id</label>
                  <input type="email" class="form-control" id="c_companyname" name="email" 
                  value="<?php echo $arrid->email_id;?>" readonly>
                   <div class="error" style="color: red;"><?php echo $err2; ?></div>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_contact" class="text-black">Contact No</label>
                  <input type="tel" class="form-control"  name="phone" 
                  value="<?php echo $arrid->contact_no;?>" maxlength="10" >
                   <div class="error" style="color: red;"><?php echo $err6; ?></div>
                </div>
              </div>
                <div class="form-group">
                <label class="text-black">Area<span class="text-danger">*</span></label>
                <select class="form-control" name="a1">
                  <option value="">Select a Area</option>
                  <?php
                    foreach ($areas as $v1) {
                      ?>
                      <option value="<?php echo $v1->area_id;?>" <?php if($v1->area_id==$arrid->area_id) echo "selected"; ?> ><?php echo $v1->area_name; ?></option>  
                  <?php 
                    }
                  ?>
                </select>
                   <div class="error" style="color: red;"><?php echo $err3; ?></div>
              </div>
              <div class="form-group">
                <label for="c_country" class="text-black">City <span class="text-danger">*</span></label>
                <select id="c_country" class="form-control" name="city">
                  <option value="">Select a City</option>
                  <?php
                
                    foreach ($citys as $v2) {
                      ?>
                      <option value="<?php echo $v2->city_id; ?>" <?php if($v2->city_id==$val4) 
                      echo"selected"  ;
                      ?> ><?php echo $v2->city_name; ?></option>
            <?php 
                        }
                  ?>
                  
                </select>
                <div class="error" style="color: red;"><?php echo $err4; ?></div>
              </div>
              
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
                  <textarea class="form-control" id="c_address" name="address">
                    <?php echo $arrid->address;?> 
                </textarea>
                <div class="error" style="color: red;"><?php echo $err5; ?></div>
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
                            <td>RS/-<?php echo $pcout=$price->p_price * $price->p_qty;?></td>
                      </tr>
                      <?php
                      $totalcart+=$pcout;
                      }
                    }?>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
                        <td class="text-black">RS/-<?php echo $totalcart; ?></td>
                      </tr>

                      <tr>
                        <td class="text-black font-weight-bold"><strong>Shipping Carge</strong></td>
                        <td class="text-black">RS/-<?php if($totalcart>500)
                        {
                          $cart=0;
                          echo $cart;
                        } 
                        else
                          {
                            $cart=49; 
                            echo $cart;
                          }?></td>
                      </tr>

                      <tr>
                        <td class="text-black font-weight-bold"><strong>Discount 10%</strong></td>
                        <td class="text-black font-weight-bold"><strong>RS/-<?php echo $dicount=
                        $totalcart*10/100; ?> </strong></td>
                      </tr>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                        <td class="text-black font-weight-bold"><strong>RS/-<?php echo $grandtotal=$totalcart + $cart-$dicount;?> </strong></td>
                      </tr>
                    </tbody>
                </table>  
                  <div class="form-group">
                    <button class="btn btn-primary btn-lg btn-block" name="sub1" type="submit">Place
                      Order</button>
                        <a href="cart.php" style="color: #000">Back</a>
                  </div>
    
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