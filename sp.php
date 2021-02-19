<?php
session_start(); 
include 'controller/c_u_shopall.php';?>
<!DOCTYPE html>
<html lang="en">
<?php include'script_user.php';?>
<body>
  <div class="site-wrap">
    
    <?php include 'links.php';?>
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Store</strong></div>
        </div>
      </div>
    </div>
   
    <div class="site-section">
      <div class="container">
        <form>
          <div class="row">
          <div class="col-lg-12" style="margin-bottom: 5%;">
            <h3 class="mb-3 text-uppercase text-black" style="width: 15%; margin-left: 20%; float: left;">Search: </h3>
            <input type="text" name="text" class="form-control" style="width: 30%; float: left;margin-right: 3%"/>
            <input type="Submit" name="search" class="btn btn-primary btn-lg btn-block" style="width: 10%;"/>
          </div> 
          </div>
        </form>
        <div class="row">
          <?php
            if(isset($_REQUEST['search']))
            {
              if(empty($val))
            {
            ?>
              <h3>Product Not Found</h3>
              <?php
            }
            else
            {
              foreach ($val as $value) {
              ?>   
              <div class="col-sm-6 col-lg-4 text-center item mb-4">
                <div>
                  <a href="shop-single.php?sid=<?php echo $value->p_id; ?>">
                  <img src="admin/productimg/<?php echo $value->image; ?>"  height="200px" width="200px"alt="Image" /></a>
                  <h3 cl ass="text-dark"><a href="shop-single.php?sid=<?php echo $value->p_id; ?>">
                  <?php echo $value->p_name; ?></a></h3>
                  <p class="price">Rs/-<?php echo $value->p_price; ?></p>
                </div>
              </div>
              <?php 
              }
            }
            }
            else
            {
              if(empty($sel))
            {
            ?>
              <h3>Product is Empty</h3>
              <?php
            }
            else
            {
              foreach ($sel as $value) {
              ?>   
              <div class="col-sm-6 col-lg-4 text-center item mb-4">
                <div>
                  <a href="shop-single.php?sid=<?php echo $value->p_id; ?>">
                  <img src="admin/productimg/<?php echo $value->image; ?>"  height="200px" width="200px"alt="Image" /></a>
                  <h3 cl ass="text-dark"><a href="shop-single.php?sid=<?php echo $value->p_id; ?>">
                  <?php echo $value->p_name; ?></a></h3>
                  <p class="price">Rs/-<?php echo $value->p_price; ?></p>
                </div>
              </div>
              <?php 
              }
            }  
            }
            
          ?>
        </div>
        <div class="row mt-5">
          <div class="col-md-12 text-center">
            <div class="site-block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
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