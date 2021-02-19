<?php
session_start(); 
if(!isset($_SESSION['login']))
{
    
    header("location:index.php");
}
include 'controller/c_product.php';
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
            window.location.href='controller/c_product.php?did='+id;
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
        <!-- =================  ============================================= -->
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
                                            <li class="breadcrumb-item"><a href="home.php" class="breadcrumb-link">Admin</a></li>
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
                             <!-- responsive table -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                 <div class="card-header">
                                <h5 class="mb-0">Product Details</h5>
                            </div>
                            
                            <div class="card">  
                                 

                            <div style="margin-top: 1%;">
                                <h5 style="margin-left: 2%;float: left;"><a href="product.php" class="btn btn-primary btn-lg">
                                    <li class="fas fa-plus" title="Add Category"></li> Add
                                
                                </a></h5>
                                    <div style="margin-left: 20%;">
                                        <form method="post">
                                     <input type="text" name="txt" class="form-control" style="margin-left: 50%;margin-top: 0.4%; width: 30%;  margin-right: 1%;float: left;"/>
                    <input type="submit" name="search" class="btn btn-primary" value="search" style="float: none;" />
                    </form>
                    </div>
        </div>
                                        <div class="card-body">
                                    <div class="table-responsive ">
                                        <table class="table">
                                            <thead>
                                               
                                                <tr>
                                                    <th scope="col">Sr.No</th>
                                                    <th scope="col">Product Name</th>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Expire date</th>
                                                    <th scope="col">Price</th>
                                                    
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if(!isset($_REQUEST['search']))
                                                {
                                                if(empty($mtable))
                                                {
                                                    ?>
                                                    <td>rocrd is empty</td>
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
                                                    <td><?php echo ucfirst($s->p_name);?></td>
                                                    <td><img src="productimg/<?php echo $s->image; ?>" 
                                                        alt="image not found" height="100px" width="150px"/></td>
                                                    <td><?php echo $s->expiry_date;?></td>
                                                    <td><?php echo $s->p_price; ?></td>
                                                    <td><a href="javascript:deleteid(<?php echo $s->p_id; ?>)"><i class="fas fa-trash-alt" title="Delete"></i></a>  ||  
                                                        <a href="u_product.php?upid=<?php echo $s->p_id; ?>"><i class="fas fa-edit" title="edit "></i></a></td>
                                                </tr>
                                               <?php
                                               $i++;
                                                }
                                            }
                                        }
                                        else
                                        {
                                            if(empty($searchtxt))
                                            {
                                                ?>
                                                <td>No product Found</td>
                                                <?php 
                                            }
                                            else
                                            {
                                                $i=0;
                                            foreach ($searchtxt as $searchtxt1) {
                                                # code...
                                                
                                            
                                            ?>

                                                <tr>
                                                   <td><?php echo $i+1;?></td>
                                                    <td><?php echo ucfirst($searchtxt1->p_name);?></td>
                                                    <td><img src="productimg/<?php echo $searchtxt1->image; ?>" 
                                                        alt="image not found" height="100px" width="150px"/></td>
                                                    <td><?php echo $searchtxt1->expiry_date;?></td>
                                                    <td><?php echo $searchtxt1->p_price; ?></td>
                                                    <td><a href="javascript:deleteid(<?php echo $searchtxt1->p_id; ?>)"><i class="fas fa-trash-alt" title="Delete"></i></a>  ||  
                                                        <a href="u_product.php?upid=<?php echo $searchtxt1->p_id; ?>"><i class="fas fa-edit" title="edit "></i></a></td>
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