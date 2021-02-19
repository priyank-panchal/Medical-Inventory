<?php 
include 'controller/c_u_products.php';?>
<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">Popular Products</h2>
          </div>
        </div>

        <div class="row">
<?php

           foreach($limit as $sp)
          {
            ?>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
           <!-- <span class="tag">Sale</span> -->
            <a href="shop-single.php?sid=<?php echo $sp->p_id;?>"> <img src="admin/productimg/<?php echo $sp->image; ?>" alt="Image" height="200px" width="200px"></a>
            <h3 class="text-dark"><a href="shop-single.php?sid=<?php echo $sp->p_id;?>"><?php echo $sp->p_name;?></a></h3>
            <p class="price">Rs/-<?php echo $sp->p_price; ?></p>
          </div>
          <?php
          }
          ?>
          </div>
        <div class="row mt-5">
          <div class="col-12 text-center">
            <a href="shop.php" class="btn btn-primary px-4 py-3">View All Products</a>
          </div>
        </div>
      </div>
    </div>
<div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">New Products</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 owl-carousel">
<?php foreach ($sel_pro as $value) {?>
        <div class="text-center item mb-4">
                <a href="shop-single.php?sid=<?php echo $value->p_id ?>"> 
                  <img src="admin/productimg/<?php echo $value->image;?>" height="300px" width="100px"  alt="Image" ></a>
                <h3 class="text-dark"><a href="shop-single.php?sid=<?php echo $value->p_id; ?>">
                  <?php echo $value->p_name;?></a></h3>
                <p class="price">Rs/-<?php echo $value->p_price;?></p>
              </div>

  <?php
}
 ?>       
            </div>
          </div>
        </div>
      </div>
    </div>
