<?php
session_start();
 include'controller/c_invoicegenerate.php'; 
 $subtotal=0 ;?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <title>Invoice</title>
    <script type="text/javascript">
       
    </script>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
            <?php include "navbar.php";?>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
       <?php include "sidebar.php";?>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
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
                                <h2 class="pageheader-title">Product Invoice </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Generate Invoice</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->

                        <button type="button" onclick="window.print()" class="btn btn-danger">Print</button>
                    <div class="row">
                        <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card" id="inid">
                                <div class="card-header p-4">
                                     
                                   
                                    <div align="center"><h2 class="mb-0">Krishna Medicines</h2>
                                    Date of invoice: <?php echo date("d/m/Y"); ?></div>
                                </div>
                                <div class="card-body" style="align-items: justify;">
                                    <div class="row mb-4">
                                        <div class="col-sm-6" >
                                            <h5 class="mb-3">From:</h5>                                            
                                            <h3 class="text-dark mb-1">ALPESH PATEL</h3>
                                         
                                            <div><b>Address:</b>65/A UIYANAGAR,</div>
                                            <div>RAJENDRA PARK ROAD ODHAV,AHMEDABAD</div>
                                            <div><b>Email</b>:krishnamedicines@gmail.com</div>
                                            <div><b>Phone</b>:9898619726</div>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php  
                                            if(empty($sel))
                                                {
                                                ?>
                                                <div>No selected</div>
                                                <?php    
                                                }
                                                else
                                                    {?>
                                            <h5 class="mb-3">To:</h5>
                                            <h3 class="text-dark mb-1"><?php echo strtoupper($sel->c_name);?></h3>
                                            <div><b>Address:</b><?php echo strtoupper($sel->address); ?></div> 
                                            <div><b>Email:</b><?php echo $sel->email_id; ?> </div>
                                            <div><b>Phone:</b> <?php echo $sel->contact_no;?></div>
                                            <?php } 
                                            ?>
                                        </div>
                                    </div>
                                    <div class="table-responsive-sm">
                                        <table class="table table-striped">
                                            <thead>
                                                  
                                                
                                                <tr>
                                                    <th class="center">#</th>
                                                    <th>Item</th>
                                                    <th class="right">Unit Cost</th>
                                                    <th class="center">Qty</th>
                                                    <th class="right">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if(empty($fori))
                                                {
                                                    ?>
                                                    <th>
                                                        <td>Product Not Selected</td>
                                                    </th>
                                                    <?php 
                                                }

                                                else
                                                {
                                                    $i=1;
                                                    foreach ($fori as $invoice) {
                                        
                                                    
                                                 ?>
                                        
                                                <tr>
                                                    <td class="center"><?php echo $i; ?></td>
                                                    <td class="left strong"><?php echo $invoice->p_name; ?></td>
                                                    
                                                    <td class="right">RS/- <?php echo $price=$invoice->p_price; ?></td>
                                                    <td class="center"><?php echo $qty=$invoice->p_qty;?></td>
                                                    <td class="right">RS/- <?php echo $totalprice=$price * $qty; ?> </td>
                                                </tr>
                                                <?php
                                                $i++;
                                                $subtotal+=$totalprice;
                                                } 
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-5">
                                        </div>
                                        <div class="col-lg-4 col-sm-5 ml-auto">
                                            <table class="table table-clear">
                                                <?php
                                                if(empty($indetail))
                                                {
                                                    ?>
                                                    <tbody>
                                                        <tr>
                                                            <td>Empty</td>
                                                        </tr>
                                                    </tbody>
                                                    <?php 
                                                } 
                                                else
                                                {
                                                ?>
                                                <tbody>
                                                    <tr>
                                                        <td class="left">
                                                            <strong class="text-dark">Subtotal</strong>
                                                        </td>
                                                        <td class="right">RS/- <?php echo $st=$subtotal; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="left">
                                                            <strong class="text-dark">Shipping Charge </strong>
                                                        </td>
                                                        <td class="right">RS/- <?php echo $sc=$indetail->shipping_charges; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="left">
                                                            <strong class="text-dark">Discount (10%)</strong>
                                                        </td>
                                                        <td class="right">RS/- <?php echo $dc=$indetail->discount; ?></td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td class="left">
                                                            <strong class="text-dark">Total</strong>
                                                        </td>
                                                        <td class="right">
                                                            <strong class="text-dark">RS/- <?php echo $st+$sc+$dc; ?></strong>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <?php 
                                            }
                                                ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-white">
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <div class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- end wrapper  -->
            <!-- ============================================================== -->
        </div>
    </div>
        <!-- ============================================================== -->
        <!-- end main wrapper  -->
        <!-- ============================================================== -->
        <!-- Optional JavaScript -->
        <!-- jquery 3.3.1 -->
        <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
        <!-- bootstap bundle js -->
        <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
        <!-- slimscroll js -->
        <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
        <!-- main js -->
        <script src="../assets/libs/js/main-js.js"></script>
</body>
 
</html>