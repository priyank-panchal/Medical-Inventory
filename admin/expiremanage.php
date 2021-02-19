<?php
session_start(); 
if(!isset($_SESSION['login']))
{
    
    header("location:index.php");
}
include 'controller/c_invoice.php';
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
                                            <li class="breadcrumb-item active" aria-current="page">Invoice</li>
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
                                <h5 class="mb-0">Invoice Details</h5>
                               
                            </div>
                                <div class="card-body">
                                    <div class="table-responsive ">
                                        <table class="table">
                                            <thead>
                                               
                                                <tr>
                                                    <th>Sr.No</th>
                                                    <th>Customer Name</th>
                                                    <th>Shipping Charge</th>
                                                    <th>tax </th>
                                                    <th>discount</th>
                                                    <th>Grand Total</th> 
                                                    <th>Date of  Invoice</th>
                                                    <th>Invoice Generate</th>
                                                    <th>Product Details</th>
                                                    <th>Delivery provide</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                              if(empty($mtble))
                                              {
                                                ?>
                                                <td>table is empty</td>
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
                                                <td><?php echo ucfirst($s->c_name);?></td>
                                                <td>RS/- <?php echo $s->shipping_charges;?></td>
                                                <td>RS/- <?php echo $s->tax;?></td>
                                                <td>RS/- <?php echo $s->discount;?></td>
                                                <td>RS/- <?php echo $s->grand_total;?></td>
                                                <td><?php echo $s->date_In;?></td>
                                                <td><a href="invoice.php?in=<?php echo $s->In_id; ?>&c=<?php echo "$s->c_id"; ?>"><button class="btn btn-danger">Invoice Generate</button></a></td>
                                               
                                                <td><a href="m_salesdetails.php?inid=<?php echo $s->In_id; ?>"><button type="submit" class="btn btn-dangar">Details</button></a>
                                                <?php
                                                if(!$countvalue>0)
                                                { 
                                                ?>
                                                 <td><a href="emp_delivery.php?inid=<?php echo $s->In_id;?>
                                                 "  ><button type="submit" name="btnd" class="btn btn-dangar" >Delivery</button></a>
                                                 </td>   
                                             <?php }
                                             else
                                             {
                                                ?>
                                                <td><a href="status.php?id=<?php echo $s->In_id;?>">
                                                <button type="submit" name="btnstatus" class="btn btn-dangar">Status</button></a>
                                                <?php   
                                             }
                                             ?>
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