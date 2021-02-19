<?php
session_start(); 
if(!isset($_SESSION['login']))
{
    
    header("location:index.php");
}
include 'controller/c_stock.php';
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
                                            <li class="breadcrumb-item active" aria-current="page">Stock</li>
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
                                <h5 class="mb-0">stock</h5>
                            </div>
                                <div class="card-body">
                                    <div class="table-responsive ">
                                        <table class="table">
                                            <thead>
                                               
                                                <tr>
                                                    <th>Sr.No</th>
                                                    <th>product name</th>
                                                    <th colspan="2">Qty</th>           
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                              
                                                if(empty($mtble))
                                                {
                                                    ?>
                                                    
                                                     <td colspan="3">recode is empty</td>
                                                     <?php 
                                                }
                                               
                                               else
                                                  {
                                                      $i=1;
                                                    foreach($mtble as $s)
                                                    {
                                              ?>
                                                <tr>
                                                    <th scope="row"><?php echo $i;?></th>
                                                    <td><?php echo $s->p_name; ?></td>
                                                    <td><?php echo $s->qty;?></td>
                                                    <td> </td>
                                                    <td><a href="u_stock.php?action=add&pid=<?php echo $s->p_id; ?>">Add Stock</a> || <a href="u_stock.php?action=del&pid=<?php echo $s->p_id; ?>">Decrease Stock</a></td>
                                                    <th><a href="showexpirebyproduct.php?p=<?php echo $s->p_id; ?>" ><button class="btn btn-success">Details</button></a></th> 
                                                </tr>
                                               <?php
                                               $i++;
                                                }
                                            }
                                               ?>
                                            
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
</body>
    
</html>