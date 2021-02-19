<?php include'controller/c_subcategory.php';?>
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
                                <h2 class="pageheader-title">SubCateogory</h2>
                                <p class="pageheader-text"></p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page"></li>
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
                                    <h5 class="card-header">Update Subcategory</h5>
                                    <div class="card-body">
                                        <form method="post">
                                            <div class="form-group">   
                                                <label >Subcategory Name:</label>
                                                     <input  type="text" placeholder="" class="form-control" name="upscategory" 
                                                     value="<?php echo $sel->subcategory_name; ?>" />
                                                <div class="error" style="color: red;"><?php echo $uper; ?>     
                                                </div>
                                                
                                               </div>
             
                                                 <div class="form-group">
                                               <label >Select Category:</label>
                                                        <select name="upcid" class="form-control dropdown-item">
                                                            <option value="" selected>--Select Category--</option>
                                                        <?php foreach($sc as $value) {

                                                    ?>          
        <option value="<?php echo $value->category_id;?>" <?php if($sel->subcategory_id==$value->category_id){echo "selected";} ?>>
                                                                    <?php echo $value->category_name;?>
                                                                        
                                                                    </option>
                                                        <?php
                                                                                }
                                                           ?>        
                                                        </select>
                                                        <div style="color: red;"><?php echo $err2; ?></div>                           
                                             </div>
                                        
                            <button type="submit" class="btn btn-primary" name="upsub">Submit</button>
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