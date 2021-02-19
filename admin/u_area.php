<?php include 'controller/c_area.php';?>
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
                                <h2 class="pageheader-title">Area</h2>
                                <p class="pageheader-text"></p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="m_area.php" class="breadcrumb-link">location>master-area</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">area</li>
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
                                    <h5 class="card-header">Area</h5>
                                    <div class="card-body">
                                        <form method="post">
                                            <div class="form-group">   
                                                <label>Area Name:</label>
                                                <input type="text" placeholder="" 
                                                value="<?php echo $val1=$awhere->area_name; ?>" class="form-control" name="upareaname">
                                                <div class="error" style="color: red;">
                                                    <?php echo $upval; ?> </div>
                                            </div>
                                            <div class="form-group">   
                                                <label>Pincode:</label>    
                                                <input type="text" value="<?php echo 
                                                $val2=$awhere->pincode; ?>" placeholder="" class="form-control" name="uppincode" maxlength="6">

                                                <div class="error" style="color: red;"><?php echo $upval1; ?> 
                                                </div>
                                            </div>

                                        
                                                <div class="form-group">
                                               <label>cityname</label>
                                                        <select name="updrop" class="form-control dropdown-item" >
                                                            <option value="select">--Select City--</option>
                                                        <?php foreach($two as $value) {
                                                    ?>          
                                     <option value="<?php echo $value->city_id;?>" <?php 
                                     if($awhere->city_id==$value->city_id){echo "selected"; } ?>><?php echo $value->city_name;?></option>
                                                        <?php
                                                                                }
                                                          ?>        
                                                        </select>
                                                        <div style="color: red;"><?php echo $upval2; ?></div>          
                                                           
                                             
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