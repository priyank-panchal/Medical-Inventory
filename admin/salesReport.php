<?php
session_start(); 
if(!isset($_SESSION['login']))
{
  header("location:../index.php");
}
include 'controller/c_demo.php';
?>
<!doctype html>
<html lang="en">
<head>
  <?php include 'styles.php';?>
</head>
<body>
    <div class="dashboard-main-wrapper">
        <?php include 'navbar.php';?>
        <?php include 'sidebar.php';?>
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Manage Sales Reports</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ecommerce-widget">
                        <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                 <div class="card-header">
                                <h5 class="mb-0">Sales Details
                                <button class="btn btn-sm btn btn-danger" name="report" type="button" style="margin-left: 700px;" onclick="window.print();">Generate PDF</button></h5>
                             </div>
                            <div class="col-sm-09 m-b-xs col-lg-09 col-xl-09" style="padding: 10px;">
                        <form method="post" style="border-spacing:2px;">
                            From:<input type="date" name="d1" class="input-sm form-control">
                            To:<input type="date" name="d2" class=" form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-sm btn btn-success" style="margin-top: 5px; margin-left: 400px;" name="report" type="submit">Go!</button>
                        </span>
                        </form>
                        
                  </div>
                     <div class="card-body">
                                    <table class="table" >
                                    <thead>
                                    <tr>
                                        <th >Sr No.</th>
                                        <th>Product Name</th>
                                        <th>Invoice Id</th>
                                        <th>Sales Date</th>
                                    </tr>
                                    </thead>
                                <tbody>
                                <?php
                                    if(isset($_POST['report']))
                                    {
                                        $d1=$_POST['d1'];   
                                        $d2=$_POST['d2'];
                                        $s1="select * from sales_details where sd_date between '$d1' and '$d2'";
                                        $s2=mysqli_query($con,$s1);
                                        $i=1;
                                        while($rq=mysqli_fetch_array($s2))
                                        {                                         
                                            ?>
                                            <tr>
                                            <td><?php echo $i;?></td>
                                             <td><?php 
                                            $qry1="select * from product where p_id='$rq[2]'";
                                             $fry=mysqli_query($con,$qry1)or die(mysqli_error($con));
                                             $f1=mysqli_fetch_array($fry);
                                             echo $f1[1]; ?></td>
                                                <td><?php echo $rq['In_id'];?></td>
                                                <td><?php echo $rq['sd_date'];?></td>
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
                        </div>
  
                    </div>
                </div>
            </div>
           <?php include 'footer.php';?>
        </div>
       </div>
    <?php include 'scripts.php';?>
</body>
</html>