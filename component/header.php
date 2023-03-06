<?php
require_once("config/dbcon.php");

?>
<header id="header" class="header header-layout-type-header-2rows">
  <div class="header-top d-none d-md-block">
    <div class="container">
      <div class="row">
        <div class="col-xl-auto header-top-left align-self-center text-center text-xl-start">
          <ul class="element contact-info">
            <li class="contact-phone"><i class="fa fa-phone font-icon sm-display-block"></i> Tel: Gulgasht Coloney Multan</li>
            <li class="contact-email"><i class="fa fa-envelope font-icon sm-display-block"></i> imyasirshabeer@gmail.com</li>
            <li class="contact-address"><i class="fa fa-map font-icon sm-display-block"></i> Gulgasht Coloney Multan</li>
          </ul>
        </div>
        <div class="col-xl-auto ms-xl-auto header-top-right align-self-center text-center text-xl-end">
          <div class="element pt-0 pb-0">
            <ul class="styled-icons icon-dark icon-theme-colored1 icon-circled clearfix">
              <li><a class="social-link" href="#"><i class="fab fa-facebook"></i></a></li>
              <li><a class="social-link" href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a class="social-link" href="#"><i class="fab fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="header-nav tm-enable-navbar-hide-on-scroll">
    <div class="header-nav-wrapper navbar-scrolltofixed">
      <div class="menuzord-container header-nav-container">
        <div class="container position-relative">
          <div class="row header-nav-col-row">
            <div class="col-sm-auto align-self-center">
              <a class="menuzord-brand site-brand" href="home.php">
                <img class="logo-default logo-1x" src="images/logo.svg" alt="Logo">
                <img class="logo-default logo-2x retina" src="images/logo.svg" alt="Logo">
              </a>
            </div>
            <div class="col-sm-auto ms-auto pr-0 align-self-center">
              <nav id="top-primary-nav" class="menuzord theme-color1" data-effect="fade" data-animation="none" data-align="right">
                <ul id="main-nav" class="menuzord-menu active">
                  <li class=""><a class="" href="Home.php">Home</a></li>
                  <li><a href="category.php">Category</a></li>
                  <li><a href="shop.php">Shop</a></li>
                  <li><a href="contact.php">Contact</a></li>

                  <li><a href="about.php">About Us</a></li>
                  <?php
                  if (isset($_SESSION['user_id'])) {
                    $id = $_SESSION['user_id'];
                    $user = $con->query("select * from users where id='$id'")->fetch_assoc();
                  ?>
                    <li><a href="#"><?php echo $user['fname'] ?></a>
                      <ul class="dropdown">
                        <!--  <li><a href="login.php">Login</a></li> -->
                        <li><a href="seller/view-ads.php">View Your Ads</a></li>
                        <li><a href="seller/profile.php">Profile</a></li>
                        <li><a href="logout.php">Logout</a></li>

                      </ul>
                    </li>
                  <?php
                  } else {
                  ?>
                    <li><a href="#">Account</a>
                      <ul class="dropdown">
                        <li><a href="login.php">Login</a></li>
                        <li><a href="signup.php">Signup</a></li>
                        <!-- <li><a href="logout.php">Logout</a></li> -->

                      </ul>
                    </li>
                  <?php
                  }
                  ?>
                  <?php
                  if (isset($_SESSION['user_id'])) {
                  ?>
                    <li><a target="_blank" href="seller/index.php">Seller</a></li>

                  <?php
                  } else {
                  ?>
                    <li><a target="_blank" href="login.php">Become a Seller</a></li>
                  <?php
                  }
                  ?>

                </ul>
              </nav>
            </div>
          </div>
          <div class="row d-block d-xl-none">
            <div class="col-12">
              <nav id="top-primary-nav-clone" class="menuzord d-block d-xl-none default menuzord-color-default menuzord-border-boxed menuzord-responsive" data-effect="slide" data-animation="none" data-align="right">
                <ul id="main-nav-clone" class="menuzord-menu menuzord-right menuzord-indented scrollable">
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>