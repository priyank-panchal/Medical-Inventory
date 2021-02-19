<?php
session_start();
 include 'controller/c_emp_delivery.php ';
 if(!isset($_SESSION['login']))
 {
    header("location:home.php");
 }
?>
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
                                <h2 class="pageheader-title">Delivery</h2>
                                <p class="pageheader-text"></p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Delivery allocate</li>
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
                                    <h5 class="card-header">Delivery</h5>
                                    <div class="card-body">
                                        <form method="post" enctype="multipart/form-data">
                                          
                                            <div class="form-group">   
                                                <label>Employee Name</label>
                                                <select class="form-control dropdown-item" name="name" style="border:1px solid #d2d2e4; ">
                                                    <option class="dropdown-item active" value="">--Select--</option>
                                                    
                                                        <?php 
                                                        foreach ($empname as $value) {
                                                            ?>
                                                        <option value="<?php echo $value->e_id; ?>">
                                                                <?php echo $value->e_name; ?>
                                                        </option> 
                                                       <?php           
                                                        }
                                                        ?>
                                                </select>
                                                <div class="error" style="color: red;"><?php echo $err2;?></div>
                                               </div>
                                         
                                            
                                            <div class="form-group">   
                                                <label>Date</label>
                                                <input type="date" class="form-control" name="dte" />
                                                <div class="error" style="color: red;"><?php echo $err1; ?></div>                                         
                                          
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