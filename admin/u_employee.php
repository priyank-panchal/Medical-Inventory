<?php include 'controller/c_employee.php';?>
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
                                <h2 class="pageheader-title">Employee</h2>
                                <p class="pageheader-text"></p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">E-Commerce Dashboard Template</li>
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
                                    <h5 class="card-header">Employee details</h5>
                                    <div class="card-body">
                                        <form method="post">
                                            <div class="form-group">   
                                                <label>Employee Name:</label>
                                                              <input type="text" placeholder="" class="form-control" name="upempname" 
                                                              value="<?php echo $sel->e_name;?>" />
                                                <div class="error" style="color: red;">
                                                    <?php echo $upval; ?></div>
                                               </div>

                                            <div class="form-group">   
                                                <label >Address</label>
                                                <textarea class="form-control" name="upaddress" rows="2"><?php echo $sel->address;?>
                                                    
                                                </textarea>
                                                <div class="error" style="color: red;">
                                                    <?php echo $upval1; ?></div>
                                               </div>

                                            <div class="form-group">   
                                                <label >Email Name:</label>
                                                              <input  type="email" placeholder="" class="form-control" name="upempmail" 
                                                              value="<?php echo $sel->email_id;?>"/>
                                                <div class="error" style="color: red;">
                                                    <?php echo $upval2; ?></div>
                                               </div>

                                            <div class="form-group">   
                                                <label>Password:</label>
                                                              <input type="Password" placeholder="" class="form-control" name="upemppassword" value="<?php echo 
                                                              $sel->password;?>"/>
                                                <div class="error" style="color: red;">
                                                    <?php echo $upval3; ?></div>
                                               </div>

                                            <div class="form-group">   
                                                <label>Contact no:</label>
                                                              <input type="tel" placeholder="" class="form-control" name="upempno" maxlength="10" value="<?php echo $sel->contact_no;?>" />
                                                <div class="error" style="color: red;">
                                                    <?php echo $upval4; ?></div>
                                               </div>

                                 <button type="submit" class="btn btn-primary" name="upsub">Submit
                                                </button>
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