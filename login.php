<?php 
session_start();
include'controller/c_login.php';
if(isset($_SESSION['customer']))
{
  header("location:index.php");
} 
?>
<!DOCTYPE html>
<html lang="en">


<?php include'script_user.php';?>

<body>
        <?php include 'links.php'; ?>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index.php">Home</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Login</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 ">
    
            <form method="post">
    
              <div class="p-3 p-lg-5 border">
            
                <div class="form-group">
                  <div class="col-md-12">
                     <div style="color: red;font-size: 25px;text-align: center;"><?php echo $msg; ?></div>
                    <label class="text-black">Email </label>
                    <input type="email" class="form-control"  name="email" placeholder="" value="<?php echo $email; ?>">
                  </div>
                  <div style="color: red;"><?php echo $em;?></div>
                </div>
                <div class="form-group">
                  <div class="col-md-12">
                    <label  class="text-black">Password</label>
                    <input type="Password" class="form-control" name="password" placeholder="" value="<?php echo $password; ?>">
                  </div>
                   <div style="color: red;"><?php echo $ps;?></div>
                </div>

                <div class="form-group">
                  <div class="col-lg-5">
                    
                    <input type="submit" name="sub" class="btn btn-primary btn-lg btn-block" value="Click To login">
                  </div>
              </div>  
                <div class="form-group">
                  <a href="registration.php" style="float: left;font-size: 20px;" class="text-black">New user??</a>
                  <a href="user_forgetpas.php" style="font-size: 20px;" class="text-black">Forget password??</a>
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