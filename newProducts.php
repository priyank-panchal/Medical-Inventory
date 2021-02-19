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
<?php foreach ($s as $value) {?>
        <div class="text-center item mb-4">
                <a href="shop-single.php?sid=<?php echo $value->p_id ?>" <img src="admin/productimg/<?php echo $value->image; ?>" alt="Image"></a>
                <h3 class="text-dark"><a href="shop-single.php?sid=<?php echo $value->p_id; ?>"></a></h3>
                <p class="price">$120.00</p>
              </div>

  <?php
}
 ?>       
            </div>
          </div>
        </div>
      </div>
    </div>
