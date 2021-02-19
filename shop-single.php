<?php 
session_start();
include 'controller/c_u_products.php';
if(!isset($_REQUEST['sid']))
{
header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Family Care Pharmacy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
        <?php include'links.php '; ?>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <a
              href="shop.php">Store</a> <span class="mx-2 mb-0">/</span> 
              <strong class="text-black"><?php echo $si->p_name; ?></strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-5 mr-auto">
            <div class="border text-center">
              <img src="admin/productimg/<?php echo $si->image;?>" alt="Image" class="img-fluid p-5">
            </div>
          </div>
          <div class="col-md-6">
            <h2 class="text-black"><?php echo $si->p_name;?></h2>
            <p></p>
            

            <p><strong class="text-primary h4">Rs/-<?php echo $si->p_price; ?></strong></p>
            <?php
            if($val1==true)
            { 
            ?>
            <form method="post" action="cart.php?aaa=add&p_id=<?php echo $si->p_id; ?>">
            <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 220px;">
                <input type="number" min="1" max="<?php  echo $si->qty; ?>" name="quantity" required  size="2" value="1" id="input-quantity" class="form-control text-center" />

              </div>
    
            </div>
            <p><button type="submit" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary" name="btn1">Add To Cart</button></p>
              </form>
              <?php
              }
              else
              {
                ?>
                <div class="mb-5">
                <h4>Out of Stock</h4>
              </div>
    
                <?php            
              } 
              ?> 
            <div class="mt-5">
              <ul class="nav nav-pills mb-3 custom-pill" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                    aria-controls="pills-home" aria-selected="true">Ordering Information</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                    aria-controls="pills-profile" aria-selected="false">Specifications</a>
                </li>
            
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <table class="table custom-table">
                    <thead>
                      <th>Product Details</th>
                      <th>Details</th>
                      
                    </thead>
                    <tbody>
                      <tr >
                        <th scope="row">Description</th>
                          <td align="justify"><?php echo $si->description; ?></td>
                      </tr>
                      <tr>
                        <th scope="row">Expiry Date</th>
                        <td><?php echo $si->expiry_date;?></td>
                      </tr>
                      <tr>
                        <th scope="row">Size</th>
                        <td><?php echo $si->size;?></td>
                      </tr>                      
                      <tr>
                        <th scope="row">Mfg Year</th>
                        <td><?php echo $si->year; ?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            
                  <table class="table custom-table">
            
                    <tbody>
                      <tr>
                        <td>Brand</td>
                        <td class="bg-light"><?php echo ucfirst($pb->brand_name);?></td>
                      </tr>
                      <tr>
                        <td>SubCategory</td>
                        <td class="bg-light"><?php echo ucfirst($ct->subcategory_name); ?></td>
                      </tr>
                      <tr>
                        <td>Cateogory</td>
                        <td class="bg-light"><?php echo ucfirst($ctid->category_name);?></td>
                      </tr>
                      
                    </tbody>
                    </table>
                  </div>
                </div>
              </div>
          </div>
        
                  <div class="col-md-6 col-lg-8">
                          <h2 align="center">Feedback</h2>
                          <form method="post">
                       <label class="text-black">Description</label>
                      <textarea class="form-control " name="des" rows="4" style="margin-bottom: 3%"></textarea>
                      
                      <input type="submit" name="fb"  class="form-control btn btn-primary" />
                      </form>
                  </div>

                   <div class="col-md-6 col-lg-8" style="margin-top: 5%;">
                       <table>
              <?php
                  if(empty($fdback))
                {
?>
              <td>No Feedback</td>
              <?php 
                } 
            else
                  {
                    foreach ($fdback as $fvalue) {
                    
                                     ?>
                      <tr>
                         <td class="text-black"><?php echo $fvalue->c_name; ?></td>
                          <td><?php echo $fvalue->feedback_des;?></td>
                    </tr>
                  <?php
                   }
                  } 
                  ?>
                      </table>
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
                <p>
                </p>
              </div>
            </a>
          </div>
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_2.jpg');">
              <div class="banner-1-inner ml-auto  align-self-center">
                <h2>Rated by Experts</h2>
                <p>
                </p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>


    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

            <div class="block-7">
              <h3 class="footer-heading mb-4">About Us</h3>
              <p></p>
            </div>

          </div>
          <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Quick Links</h3>
            <ul class="list-unstyled">
              <li><a href="#">Supplements</a></li>
              <li><a href="#">Vitamins</a></li>
              <li><a href="#">Diet &amp; Nutrition</a></li>
              <li><a href="#">Tea &amp; Coffee</a></li>
            </ul>
          </div>  

          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">203 Fake St. Mountain View, San Francisco, California, USA</li>
                <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
                <li class="email">emailaddress@domain.com</li>
              </ul>
            </div>


          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made
              with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank"
                class="text-primary">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>

        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

</body>

</html>