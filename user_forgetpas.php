<?php
session_start(); 
include'controller/c_u_forget.php';
if(!isset($_SESSION['customer']))
{
header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include'script_user.php';?>

<body>
  <div class="site-wrap">
    <div class="site-navbar py-2">
      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="index.php" class="js-logo-clone">Family Care Pharmacy</a>
            </div>
          </div>
        <?php include 'links.php'; ?>
          <div class="icons">
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="../cart.html" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
              <span class="number">2</span>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index.php">Home</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Login/Forget Password</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <form method="post">
              <div class="p-3 p-lg-5 border">
            
                <div class="form-group">
                  <div class="col-md-12">
                     <div style="color: red;font-size: 25px;text-align: center;"><?php echo $msg; ?></div>
                    <label class="text-black">Email </label>
                    <input type="email" class="form-control"  name="email" placeholder="" value="<?php echo $mail; ?>">
                  </div>
                  <div style="color: red;"><?php echo $em;?></div>
                </div>
       
                <div class="form-group">
                  <div class="col-lg-5">
                    <input type="submit" name="sub" class="btn btn-primary btn-lg btn-block" value="Click To Forgot Password">
                  </div>
              </div>  
                   </form>
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