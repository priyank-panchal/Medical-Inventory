<?php 
session_start();

include 'controller/c_emp_deliveryshow.php ';
if(!isset($_SESSION['elogin']))
{
    header("location:emp_login.php");
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
        <?php include 'emp_nav.php';?>
        <?php include 'emp_sidebar.php';?>
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
                                            <li class="breadcrumb-item active" aria-current="page">Customer</li>
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
                                <h5 class="mb-0" style="">Customer Details</h5>
                            </div>
                           
                                <div class="card-body">
                                    <div class="table-responsive ">
                                        <table class="table">
                                            <thead>
                                               
                                                <tr>
                                                    <th>Sr.No</th>
                                                    <th>Inovice No</th>
                                                    <th>Product Name</th>
                                                    <th>product Quantity</th>

                                                  
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                            
                                                if(empty($m_tble))
                                                {
                                                 ?>
                                                 <td>table is empty</td>
                                                 <?php
                                                }
                                              else
                                                {
                                              $i=1;
                                                foreach($m_tble as $s)
                                                {
                                                    ?>
                                                <tr>
                                                    <td scope="row"><?php echo $i;?></td>
                                                    <td><?php echo $s->In_id; ?></td>
                                                    <td><?php echo $s->p_name;?></td>
                                                    <td><?php echo $s->p_qty;?></td>

                                                </tr>
                                               <?php
                                               $i++;  
                                            }
                                        }
                                    
                                        ?>    </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end responsive table -->

                                        <table class="table">
                                            <tr>
                                                <?php 
                                                if(empty($pres))
                                                    {
                                                        ?>
                                                        <tr>
                                                            <td>Not need for prescription.</td>
                                                        </tr>
                                                        <?php 
                                                    }
                                                    else
                                                    {
                                                     foreach ($pres as $pres1) {
                                                         # code...
                                                     
                                                    ?>

                                                <td><a href="prescriptionimg/<?php echo $pres1->image;?>"><img src="prescriptionimg/<?php echo $pres1->image; ?>" height="100px" width="100px"></td>
                                            </tr>
                                            <?php 
                                        }
                                    }
                                        ?>
                                        </table>
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
