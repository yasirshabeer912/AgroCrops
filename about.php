<?php
session_start();
include 'component/headerlinks.php';
?>

  <!-- Start main-content -->
  <div class="main-content-area mb-4">
    <!-- Section: inner-header Start -->
  
    <!-- Section: inner-header End -->

    <!-- Section: About -->
    <section class="our-about">
      <div class="container">
        <div class="section-content">
        <div class="block-header">
            <h3 class="block-header__title">About <strong class="text-success">AgroCrops</strong> &nbsp;</h3>
            <div class="block-header__divider"></div>
          </div>
          <div class="row">
            <div class="col-xl-6">
              <div class="about-box text-center text-xl-end">
                <div class="thumb">
                  <img src="images/about/1.jpg" alt="1.jpg">
                  <img class="about-img2" src="images/about/2.jpg" alt="2.jpg">
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="about-box-contents">
                <div class="destails">
                  <h6 class="subtitle"><img src="images/icon/st-icon.png" alt="st-icon.png"> Our Introduction</h6>
                  <h2 class="title">Welcome to AgroCrops</h2>
                  <!-- <p>Online Plateform For Selling and Buying Agricultural Products By Posting The Products Details Free.</p> -->
                  <div class="tm-sc-unordered-list list-style1 mb-40">
                  Welcome to Agrocrops, the online marketplace for buying and selling crops. Our mission is to connect farmers and buyers in a simple, secure, and transparent way, helping to promote local agriculture and build sustainable communities.
                  </div>
                  <a class="btn btn-md btn-theme-colored2 btn-view-details btn-outline-light" href="Home.php" target="_self">Buy Or Sell ➞</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tm-floating-objects">
        <span class="d-none d-lg-block tm-animation-floating z-index--1" data-tm-bg-img="images/floating-objects/ob1.png" data-tm-width="195" data-tm-height="145" data-tm-top="auto" data-tm-bottom="0" data-tm-left="10%" data-tm-right="auto" data-tm-opacity="-100px"></span>
        <span class="tm-animation-floating z-index--1" data-tm-bg-img="images/floating-objects/ob2.png" data-tm-width="953" data-tm-height="224" data-tm-top="auto" data-tm-bottom="0" data-tm-left="auto" data-tm-right="-300px" data-tm-opacity="1"></span>
      </div>
    </section>

    <!-- Section: Service -->
    <section class="our-service" data-tm-bg-color="#f0ece3">
      <div class="container pb-90">
        <div class="section-title">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="tm-sc-section-title section-title text-center">
                <div class="title-wrapper">
                  <h6 class="subtitle"><img src="images/icon/st-icon.png" alt="st-icon.png"> Our Services</h6>
                  <h2 class="title">What We Offers</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-6 col-xl-4">
              <div class="service-item-current-style1 text-start">
                <div class="icon-box">
                  <div class="icon">
                    <i class="flaticon-agri-planting-2"></i>
                  </div>
                </div>
                <div class="details">
                  <h4 class="title service-title">Fresh Vegetables</h4>
                  <div class="excerpt service-details">At Agrocrops, we offer a wide range of fresh, locally-sourced vegetables, including vegetables, and seasonal favorites like tomatoes and cucumbers.</div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-4">
              <div class="service-item-current-style1 text-start">
                <div class="icon-box">
                  <div class="icon">
                    <i class="flaticon-agri-dairy-products"></i>
                  </div>
                </div>
                <div class="details">
                  <h4 class="title service-title">Crops</h4>
                  <div class="excerpt service-details">From seasonal fruits and vegetables to fresh grains and cereals, Agrocrops offers a wide variety of locally-sourced crops to meet your every need.</div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-4">
              <div class="service-item-current-style1 text-start">
                <div class="icon-box">
                  <div class="icon">
                    <i class="flaticon-agri-harvest"></i>
                  </div>
                </div>
                <div class="details">
                  <h4 class="title service-title">Flowers</h4>
                  <div class="excerpt service-details">Agrocrops also offers a beautiful variety of fresh flowers, sourced from local farmers and perfect for brightening up any occasion or space.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

 

    <!-- Section: Product Strategy -->
    <section class="fresh-product">
      <div class="container pt-100 pb-0">
        <div class="row">
          <div class="col-lg-5 col-xl-5">
            <div class="fresh-product-iconbox">
              <div class="tm-sc-funfact funfact-current-theme2 tm-animate-icon-on-hover animate-icon-scale border-bottom-light pt-0">
                <div class="funfact-inner d-flex">
                  <div class="icon-wrapper">
                    <div class="funfact-icon"> <i class="flaticon-agri-hydroponic-1"></i> </div>
                  </div>
                  <?php
              
              $sql2 = $con->query("SELECT * from category") ;
              $count2 = mysqli_num_rows($sql2);
              ?>
                  <div class="details-wrapper">
                    <div class="counter-wrapper">
                      <h2 class="counter"><span class="animate-number appeared" data-value="5493" data-animation-duration="1500"><?php echo $count2 ?></span></h2>
                    </div>
                    <div class="title-wrapper">
                      <h6 class="title ">Total Categories</h6>
                    </div>
                  </div>
                </div>
              </div>
              <?php
              
              $sql1 = $con->query("SELECT * from ads") ;
              $count1 = mysqli_num_rows($sql1);
              ?>
              <div class="tm-sc-funfact funfact-current-theme2 tm-animate-icon-on-hover animate-icon-scale border-bottom-light">
                <div class="funfact-inner d-flex">
                  <div class="icon-wrapper">
                    <div class="funfact-icon"> <i class="flaticon-agri-sickle"></i> </div>
                  </div>
                  <div class="details-wrapper">
                    <div class="counter-wrapper">
                      <h2 class="counter"><span class="animate-number appeared" data-value="1750" data-animation-duration="1500"><?php echo $count1 ?></span></h2>
                    </div>
                    <div class="title-wrapper">
                      <h6 class="title ">TOTAL PRODUCTS</h6>
                    </div>
                  </div>
                </div>
              </div>
              <?php
              
              $sql = $con->query("SELECT * from users") ;
              $count = mysqli_num_rows($sql);
              ?>
              <div class="tm-sc-funfact funfact-current-theme2 tm-animate-icon-on-hover animate-icon-scale">
                <div class="funfact-inner d-flex">
                  <div class="icon-wrapper">
                    <div class="funfact-icon"> <i class="flaticon-agri-planting-1"></i> </div>
                  </div>
                  <div class="details-wrapper">
                    <div class="counter-wrapper">
                      <h2 class="counter"><span class="animate-number appeared" data-value="2460" data-animation-duration="1500"><?php echo $count ?></span></h2>
                    </div>
                    <div class="title-wrapper">
                      <h6 class="title ">SATISFIED CLIENTS</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-xl-7">
            <div class="fresh-product-content">
              <div class="destails">
                <div class="product-strategy-thumb">
                  <img src="images/about/3.jpg" alt="about3images">
                  <div class="call-us"><span>+ 92 307 1617 492</span></div>
                </div>
                <h6 class="subtitle"><img src="images/icon/st-icon.png" alt="st-icon.png"> About AgroCrops</h6>
                <h2 class="title">We Manage Fresh Product Strategy</h2>
                <p class="para">Lorem ipsum dolor sit amet, conse ctetur adipisicing elit sed do eiusm od tempor ut labore.  Many desktop publishing packages and wpage editors now use Lorem Ipsum as their defamodel text, and a search for Lorem ipsum dolor sit amet, conse ctetur adipisicing elit.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


  </div>
  <!-- end main-content -->

  <!-- Footer -->
  <?php include 'component/footer.php'; ?>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>
</html>