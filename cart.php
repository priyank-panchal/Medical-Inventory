<?php
session_start();
include 'controller/cp_cart.php';?>
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
            <strong class="text-black">Cart</strong>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product Name</th>
                    <th class="product-price">Price</th>
                    <th class="product-total">Total</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-remove">Update Quantity</th>
                    <th class="product-remove">Remove</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $total=0;
                  $subtotal=0;
                  if(empty($cart_view))
                  {

                      echo '<tr> 
                      <td colspan="7"><img src="cart_img/c1.png" alt="image not found" height="200px" width="200px" /></td>
                      </tr>';
                  }
                  else
                  { $pre='';
                    foreach ($cart_view as $item){  
                      if($item->u_pre=="yes")
                      {
                        $pre="yes";
                      }
                    ?>
                  <tr>
                    <td class="product-thumbnail">
                      <img src="admin/productimg/<?php echo $item->image; ?>" alt="Image" class="img-fluid" name="pimg" height="100px" width="100px">
                    </td>
                      <td class="product-name">
                      <h2 class="h5 text-black"><?php echo $item->p_name; ?></h2>
                    </td>
                      <td>RS/-<?php echo $item->p_price; ?></td>
                     <td>RS/-

                      <?php
                          $total=$item->p_qty * $item->p_price;
                        echo $total; 
                    ?>

                    <form action="cart.php?aaa=update&Uid=<?php echo $item->p_id;?>" method="post">
                    <td><select name="drop1" class="form-control dropdown-item">                
                                                              <?php
                                                                for($i=1;$i<=$item->qty;$i++)
                                                                {
                                                                ?>
                                                                <option  value="<?php echo $i; ?>"
                                                                  <?php if($item->p_qty==$i)
                                                                   echo "selected"; ?> >
                                                                  <?php echo $i;?>
                                                                </option>
                                                                <?php
                                                                }
                                                              ?>
                                                            </option>
                                                   </td>
                    <td><input type="submit" name="sub" class="btn btn-primary height-auto btn-sm" value="update"/>
                    </td>
                  </form>
                    <td><a href="cart.php?aaa=delete&did=<?php echo $item->p_id; ?>" class="btn btn-primary height-auto btn-sm">X</a>
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
    <form method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-6">
            <?php
            if(!empty($pre))
            {
            if($pre=="yes")
            
            { ?>
              <div class="row mb-5">
              <div class="col-md-12">
              <div class="col-md-6" style="float: left;"><a href="#" class="btn btn-info ">Upload Prescription:</a></div>  
              <div class="col-md-6 mb-3 mb-md-0" style="float: left;">
                
                <input type="file" name="fname"  />
                <p style="color: red" ><?php echo $val5;?> </p>
              </div>
              </div>
            </div>
            <?php
            }
            } ?>
            <div class="row mb-5">
              <div class=""><a href="shop.php" class="btn btn-info ">Continue shopping</a></div> 
            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">
             <?php echo $subtotal;?>
            </strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Shipping Charge</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">
                      <?php 
                      if(!empty($cart_view))
                      {
                         if($subtotal<500)
                        {
                          $sc=49;
                           echo $sc;
                        } 
                        else 
                        {
                          $sc=0;
                          echo $sc;
                      }
                    }
                    else
                    {
                      echo $sc=0;
                    }

                      ?>
                    
                    </strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black"><?php 
                    echo $sc+$subtotal; ?></strong>
                  </div>
                </div>
    
                <div class="row">
                  <div class="col-md-12">
                  <?php
                  if(!empty($cart_view))
                  {
                  if(!empty($pre))
                  {   
                    if($pre=="yes"){ 
                    ?>
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="sub123">Proceed To Checkout</button>
                    <?php 
                  }
                }
                  else
                  {
                    ?>
                    <a href="checkout.php">
                   <button type="button" class="btn btn-primary btn-lg btn-block" name="yyyy">Proceed To Checkout</button></a>
                   <?php 
                  }
}
                  ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </form>

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