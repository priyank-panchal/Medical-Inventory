<?php
session_start(); 
if(!isset($_SESSION['login']))
{
    
    header("location:index.php");
}
include 'controller/c_salesdetails.php';
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
                        
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Sales Details</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div >

                        <div class="row">
                             <!-- responsive table -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                 <div class="card-header">
                                <h5 class="mb-0">Sales Details</h5>
                               
                            </div>
                                <div class="card-body">
                                      <div class="table-responsive ">
                                        <table class="table">
                                            <thead>
                                               
                                                <tr>
                                                    <th>Sr.No</th>
                                                    <th>date</th>
                                                    <th>Product Name</th>
                                                    <th>Qty</th>
                                                   <th>Invoice No</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                <?php
                                              if(empty($mtable))
                                              {
                                                ?>
                                                <td>table is empty</td>
                                                <?php
                                              }
                                              else
                                              {                                                
                                                $i=1;
                                                foreach($mtable as $s)  
                                                {
                                                    ?>
                                                <tr>
                                                <th scope="row"><?php echo $i;?></th>
                                                    <td><?php echo $s->sd_date; ?></td>
                                                    <td><?php echo $s->p_name; ?></td>
                                                    <td><?php echo $s->p_qty; ?></td>
                                                    <td><?php echo $s->In_id; ?></td>

                                                </tr>
                                               <?php
                                               $i++;  
                                            }
                                          }

                                        
                                    ?>
                                            </tbody>
                                        </table>
                                        <table>
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end responsive table -->
                        </div>
                        <table class="table">
                            <tr>
                                <th>Image of prescription</th>
                            </tr>
                        <?php 
                                    if(empty($preimg))
                                            {
                                            ?>
                                            <tr>
                                            <td>There has no product which needs prescription.</td>
                                        </tr>
                                            <?php 
                                            }   
                                            else
                                            {
                                                   ?>
                                                    <tr>
                                                    <td><a href="prescriptionimg/<?php echo $preimg->image;?>" ><img src="prescriptionimg/<?php echo $preimg->image;?> " height="100px" width="100px"  />
                                                    </a></td>
                                                    <tr>
                                                    <?php 

                                             } 
                              ?>      
                        </table>
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