<?php include 'controller/c_stock.php';?>
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
                                <h2 class="pageheader-title">Update Qantity</h2>
                                <p class="pageheader-text"></p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="m_brand.php" class="breadcrumb-link">Admin</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Update Quantity</li>
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
                            
                                    <h5 class="card-header" style="float: left;">Update Quantity</h5>
                                    <div class="card-body">
                                        <form method="post">
                                            <div class="form-group">   
                                                <label for="inputEmail">Product Name:</label>
                            <input  type="text" placeholder="" class="form-control" name="" value="<?php echo $mtt->p_name;?>" disabled/>
                                                <div class="error" style="color: red;">
                                                </div>
                                               </div>
                                               <div class="form-group">   
                                                <label for="inputEmail">Stock Quantity:</label>
                            <input  type="text" placeholder="" class="form-control" name="" value="<?php echo $mtt->qty;?>" disabled/>
                                                <div class="error" style="color: red;">
                                                </div>
                                               </div>
                                               <?php
                                               if($_REQUEST['action']==="add")
                                               { 
                                               ?>
                                               <div class="form-group">   
                                                <label for="inputEmail">Add Quantity:</label>
                            <input  type="text" placeholder="" class="form-control" name="addqty" value="<?php echo $addqty; ?>"/>
                                                <label for="inputEmail">Date:</label>
                            <input  type="date" placeholder="" class="form-control" name="exprie" value="<?php echo $expr; ?>"/>
                            

                                                <div class="error" style="color: red;">
                                                    <?php echo $uval1; ?>     
                                                </div>
                                               </div>
                                               <?php 
                                           }
                                           elseif($_REQUEST['action']==="del")
                                            {
                                                ?>
                                               <div class="form-group">   
                                                <label for="inputEmail">Remove Quantity:</label>
                            <input  type="date" placeholder="" class="form-control" name="delqty" value="<?php echo $rmqty; ?>"/>
                                                <div class="error" style="color: red;">
                                                    <?php echo $uval; ?>     
                                                </div>
                                               </div>
                                           <?php       
                                            }    
                                            else
                                            {
                                                ?>
                                                <div class="error"><h2>Page Not found.</h2>
                                                </button> 
                                            </div>
                                                <?php 
                                            }
                                            ?>         
                                 <button type="submit" class="btn btn-primary" name="usubmit">Submit
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