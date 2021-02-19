<?php include'controller/c_supplier.php';?>
<!doctype html>
<html lang="en">
<head>
  <?php include 'styles.php';?>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <?php include 'navbar.php';?>
        <?php include 'sidebar.php';?>
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Supllier</h2>
                                <p class="pageheader-text"></p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="home.php" class="breadcrumb-link">home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">supplier</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Supplier</h5>
                                    <div class="card-body">
                                        <form method="post">
                                            <div class="form-group">   
                                                <label>Supplier Name:</label>
                                                     <input type="text" placeholder="" class="form-control" name="sname" value="<?php echo $name; ?>" />
                                                <div class="error" style="color: red;"><?php echo $val1; ?>     
                                                </div>
                                               </div>


                                               <div class="form-group">   
                                                <label>Supplier Address:</label>
                                                     <textarea value="<?php echo $address ?>" class="form-control" rows="2" name="saddress"></textarea>
                                                <div class="error" style="color: red;"><?php echo $val2; ?>     
                                                </div>
                                                
                                               </div>
                                            
                                            <div class="form-group">   
                                                <label>Email:</label>
                                                     <input  type="text" placeholder="" class="form-control" name="semail" value="<?php echo $email; ?>" />
                                                <div class="error" style="color: red;"><?php echo $val3; ?>     
                                                </div>
                                               </div>                                            
                                           
                                           <div class="form-group">   
                                                <label>password</label>
                                                     <input type="password" placeholder="" class="form-control" name="spassword" value="<?php echo $password; ?>" />
                                                <div class="error" style="color: red;"><?php echo $val4; ?>     
                                                </div>
                                               </div>



                                        <div class="form-group">   
                                                <label>Contact no</label>
                                                     <input type="tel" placeholder="" maxlength="10"class="form-control" name="scontact" value="<?php echo $contact; ?>"/>
                                                <div class="error" style="color: red;"><?php echo $val5; ?>     
                                                </div>
                                               </div>
                                            
                                <button type="submit" class="btn btn-primary" name="sub">Submit</button>
                                <button type="reset" class="btn btn-danger" onclick="history.back(-1)">Cancel</button>
                                            
                                        </form>
                                    </div>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
           <?php include 'footer.php';?>
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
   <?php include 'scripts.php';?>
</body>
 
</html>