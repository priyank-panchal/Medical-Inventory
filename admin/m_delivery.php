<?php
session_start(); 
if(!isset($_SESSION['login']))
{
    
    header("location:index.php");
}
include 'controller/c_sdelivery.php';
?>
<!doctype html>
<html lang="en">
 
<head>
  <?php include 'styles.php';?>
  <script type="text/javascript">
      function deleteid(id)
    {
         if(confirm("Do you want to delete this?"))
         {
            window.location.href='controller/c_employee.php?did='+id;
        }
    }
 
  </script>
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
                                            <li class="breadcrumb-item active" aria-current="page">Delivery</li>
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
                                <h5 class="mb-0">Delivery Details</h5>
                               
                            </div>
                                
                                <div class="card-body">
                                    <div class="table-responsive ">
                                        <table class="table">
                                            <thead>
                                               
                                                <tr>
                                                    <th>Sr.No</th>
                                                    <th>Customer name</th>
                                                    <th>Employe name</th>
                                                    <th>Email</th>
                                                    <th>date of delivery</th>
                                                    <th>Track Order</th>
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

                                                    $qrycut="SELECT c_name FROM `customer` WHERE c_id='$s->c_id' ";
                                                    $runqry=mysqli_query($v,$qrycut);
                                                    $runval=mysqli_fetch_array($runqry);
                                                
                                                    ?>
                                                <tr>
                                                    <th scope="row"><?php echo $i;?></th>
                                                    <td><?php echo ucfirst($runval['c_name']);?></td>
                                                    <td><?php echo ucfirst($s->e_name);?></td>
                                                    <td><?php echo ucfirst($s->email_id);?></td>
                                                    <td><?php echo $s->date_delivery;?></td>
                                                    <td><a href="status.php?id=<?php echo $s->In_id; ?>"><button class="btn btn-danger">Track Order</button></a></td>
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