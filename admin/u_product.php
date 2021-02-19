<?php include 'controller/c_product.php';?>
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
        <div class="dashboard-wrapper" >
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Product</h2>
                                <p class="pageheader-text"></p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin panel</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Product</li>
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
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-12" >
                                <div class="card">
                                    <h5 class="card-header">Product Details</h5>
                                    <div class="card-body">
                                        
                                        <form method="post" enctype="multipart/form-data">
                                            <div class="form-group">   
                                                <label>Product Name:</label>
                                                              <input type="text" placeholder="" class="form-control" name="upname" value="<?php echo $upsel->p_name; ?>" />
                                                <div class="error" style="color: red;"><?php echo $upval; ?></div>
                                               </div>

                                            <div class="form-group">   
                                                <label>Brand</label>
                                                <select class="form-control dropdown-item" name="upbname" style="border:1px solid #d2d2e4;">
                                                    <option value="select">--Select--</option>
                                                    
                                                        <?php 
                                                        foreach ($b as $value) {
                                                            ?>
                                                        <option value="<?php echo $value->brand_id;?>" <?php if($upsel->brand_id==$value->brand_id){echo "selected";}?> >
                                                                <?php echo $value->brand_name; ?>
                                                        </option> 
                                                        <?php                   
                                                        }
                                                        ?>
                                                        
                                                    
                                                </select>
                                                <div class="error" style="color: red;"><?php echo $upval1; ?></div>
                                               </div>

                                            <div class="form-group">   
                                                <label>Product Price:</label>
                                                              <input  type="text" placeholder="" class="form-control" 
                                                              name="uppprice" value="<?php echo $upsel->p_price;;?>"/>
                                                <div class="error" style="color: red;"><?php echo $upval2; ?></div>
                                               </div>

                                            <div class="form-group">   
                                                <label>Subcategory:</label>
                                                <select name="upscategory" class="form-control dropdown-item" style="border:1px solid #d2d2e4;">
                                                    <option class="dropdown-item active" value="select">--Select--</option>
                                                     <?php 
                                                        foreach ($sc as $key) {
                                                            ?><option value="<?php echo $key->subcategory_id; ?>" <?php if($upsel->subcategory_id==$key->subcategory_id){echo "selected";}
                                                                ?> >
                                                                <?php
                                                                echo $key->subcategory_name;
                                                        ?>
                                                        </option> 
                                                        <?php           
                                                        }
                                                        ?>
                                                </select>
                                                        <div class="error" style="color: red;">
                                                            <?php echo $upval3; ?></div>
                                               </div>

                                            <div class="form-group">   
                                                <label style="width: 100%">product Image</label>
                                                              <input  type="file"  name="uppimage" style="box-shadow: none;"> 
                                                              <img src="productimg/<?php echo $upsel->image; ?>" height="50px;" width="50px"/> 
                                                    
                                                              <div class="error" style="color: red;"><?php echo $upval4; ?>
                                                          </div>
                                            </div>

                                        <div class="form-group">   
                                                  <label style="width: 100%">Upload Prescription</label>
                                                    <input type="radio" name="pre"  value="yes" id="pre"<?php  if($upsel->u_pre=="yes"){echo "checked"; }?>>Yes
                                                    <input type="radio" name="pre" value="no" id="p"<?php  if($upsel->u_pre=="no"){ echo "checked"; }?> >No
                                            <div class="error" style="color: red;"><?php echo $presc; ?>
                                                
                                            </div>    
                                            <div class="form-group">   
                                                <label>Expiry Date:</label>
                                                              <input  type="date" placeholder="" class="form-control" name="uppdate"   
                                                              value="<?php echo $upsel->expiry_date; ?>"/>
                                                <div class="error" style="color: red;"><?php echo $upval5; ?></div>
                                               </div>
                                            <div class="form-group">   
                                                <label>Decription:</label>
                                                              <input  type="text" placeholder="" class="form-control" name="updecrip" value="<?php echo $upsel->description;?>"/>
                                                <div class="error" style="color: red;"><?php echo $upval6; ?></div>
                                            </div>

                                            <div class="form-group">   
                                                <label>qty:</label>
                                                              <input  type="text" placeholder="" class="form-control" name="upqty" value="<?php echo $upsel->qty;?>"/>
                                                <div class="error" style="color: red;"><?php echo $upval; ?></div>
                                            </div>

                                            <div class="form-group">   
                                                <label>Year:</label>
                                                              <input  type="text" placeholder="" class="form-control" name="upyear" value="<?php echo $upsel->year;?>"/>
                                                <div class="error" style="color: red;"><?php echo $upval7; ?></div>
                                            </div>
                                            
                                            <div class="form-group">   
                                                <label>Size:</label>
                                                              <input  type="text" placeholder="" class="form-control" name="upsize" value="<?php echo $upsel->size;?>"/>
                                                <div class="error" style="color: red;"><?php echo $upval8; ?></div>
                                            </div>
                                            <div align="center">
                                   <button type="submit" class="btn btn-primary" name="usubmit">Submit
                                   </button>
                                    <button type="reset" class="btn btn-danger" onclick="history.back(-1)">Cancel</button>
                                </div>

                             </div>      
                         </div>

                    </form>
                                   
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