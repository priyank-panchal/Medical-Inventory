<div class="site-navbar py-2">
      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="index.php" class="js-logo-clone">Family Care Pharmacy</a>
            </div>
          </div>
        <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Product</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <?php if(isset($_SESSION['customer']))
                {
                  ?>
                  <li class="has-children">
                  <a href="#">My Account</a>
                  <ul class="dropdown">
                    <li><a href="profile.php">Profile</a></li>
                    <li><a  href="order.php">Orders</a></li>
                    <li><a href="user_change_password.php">Change Password</a></li>
                    <li><a href="user_logout.php">logout</a></li>
                  </ul>
                </li>
                  <?php
                }
                else
                {
                  ?> 
                  <li class="has-children">
                    <a href="#">My Account</a>
                    <ul class="dropdown">
                         <li><a href="login.php">login</a></li>
                         <li><a href="registration.php">Registration</a></li>
                  </ul>
                </li>
                  <?php
                }
                ?>
          </ul>
            </nav>
          </div>
          <div class="icons">
            
            <a href="cart.php" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none">
              <span class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>