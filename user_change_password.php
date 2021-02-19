<?php 
session_start();
include 'controller/c_user_change_password.php';?>
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
  <div class="site-wrap">
   <?php include'links.php'; ?>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index.php">Home</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Change Password</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
    
            <form action="#" method="post">
    
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <form method="post">
                  <div class="col-md-12">
                    
                    <label class="text-black">Old Password: <span class="text-danger">*</span></label>
                    <input type="Password" class="form-control" name="opas" value="<?php echo $opas;?>">
                    <div style="color: red;"><?php echo $val1; ?></div>
                  </div>
                  <div class="col-md-12">
                    <label  class="text-black">New Password <span class="text-danger">*</span></label>
                    <input type="Password" class="form-control" name="npas" value="<?php echo $npas;?>">
                    <div style="color: red;"><?php echo $val2;?></div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label  class="text-black">Confirm Password<span class="text-danger">*</span></label>

                    <input type="Password" class="form-control"  name="n2pas" value="<?php echo $n2pas;?>">
                    <div style="color: red;"><?php echo $val3; ?></div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block"  name="sub">
                  </div>
                </div>
              </div>
                </form>
              
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