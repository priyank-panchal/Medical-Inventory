<?php
include'controller/c_sup_home.php'; 
if(!isset($_SESSION['suplogin']))
{
    header("location:./suplogin.php");
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
        <?php include 'sup_nav.php';?>
        <?php include 'sup_sidebar.php'?>
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
                                            <li class="breadcrumb-item active" aria-current="page">Supplier Details</li>
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
                                <h5 class="mb-0">Supplier Details</h5>
                               
                            </div>
                                
                                <div class="card-body">
                                    <div class="table-responsive ">
                                        <table class="table">
                                            <thead>
                                               
                                                <tr>
                                                    <th>Sr.No</th>
                                                    <th>Product Name</th>
                                                    <th>Description</th>
                                                    <th>Date Of Purchase</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if(empty($sel))
                                                {
                                                    echo'<td>No orders</td>';
                                                } 
                                                else
                                                {
                                                    $i=1;
                                                    foreach ($sel as $sel1) 
                                                    {    
                                                ?>

                                                <tr>
                                                    <th scope="row"><?php echo $i;?></th>
                                                    <td><?php echo $sel1->pur_name;?></td>
                                                    <td><?php echo $sel1->description;?></td>
                                                    <td><?php echo $sel1->date_purchase; ?></td>    
                                                </tr>
                                               <?php
                                               $i++;
                                               } 
                                           }?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end responsive table -->
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

        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->

        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
   <?php include 'scripts.php';?>
</body>
 
</html>