<?php 
session_start();
include 'controller/c_sup_login.php';
if (isset($_SESSION['suplogin'])) {
      header("location:sup_home.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SupplierLogin</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }   

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><img class="logo-img" src="assets/images/medicine.png" height="20%" width="20%" alt="logo"></a><span class="splash-description">Supplier Panel</span></div>
            <div class="card-body">
                <form method="post">
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="username" type="text" placeholder="Username" name="email" autocomplete="off" value="<?php echo $email; ?>">
                        <div class="error" style="color: red;"><?php echo $em; ?></div>
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" type="password" name="password" placeholder="Password" value="<?php echo $password;?>">
                        <div class="error" style="color: red;"><?php echo $ps; ?></div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="sub">Sign in</button>
                    <div class="error" style="color: red;"><?php echo $msg;?></div>
                </form>
            </div>
            <div class="card-footer bg-white p-0">
                <div class="card-footer-item card-footer-item-bordered ">
                    <a href="forget.php" class="footer-link">Forgot Password</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>

</body>
 </html>