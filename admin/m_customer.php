<?php
session_start(); 
if(!isset($_SESSION['login']))
{
    
    header("location:index.php");
}
include 'controller/c_customer.php';
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
                                                    <th>Customer Name</th>
                                                    <th>Area</th>
                                                    <th>Gender</th>
                                                    <th>Address</th>
                                                    <th>Contact_no</th>
                                                    <th>Email</th> 
                                                   

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if(!isset($searchf))
                                                {
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
                                                <td><?php echo ucfirst($s->c_name);?></td>
                                                <td><?php echo ucfirst($s->area_name);?></td>
                                                <td><?php echo ucfirst($s->gender);?></td>
                                                <td><?php echo ucfirst($s->address);?></td>
                                                <td><?php echo $s->contact_no;?></td>
                                                <td><?php echo $s->email_id;?></td>
                                                </tr>
                                               <?php
                                               $i++;  
                                            }
                                        }
                                    }
                                        else
                                        {
                                            if(empty($searchf))
                                            {
                                                ?>
                                                <td>Not Found User</td>
                                                <?php
                                            }
                                            else
                                            {
                                             $i=1;
                                                foreach($searchf as $sf)
                                                {
                                                    ?>
                                                <tr>
                                                <th scope="row"><?php echo $i;?></th>
                                                <td><?php echo ucfirst($sf->c_name);?></td>
                                                <td><?php echo ucfirst($sf->area_name);?></td>
                                                <td><?php echo ucfirst($sf->gender);?></td>
                                                <td><?php echo ucfirst($sf->address);?></td>
                                                <td><?php echo $sf->contact_no;?></td>
                                                <td><?php echo $sf->email_id;?></td>
                                                </tr>
                                        
                                               <?php 
                                               $i++;
                                           }
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