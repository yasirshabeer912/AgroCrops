<?php
session_start();

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

  <?php include 'component/homelinks.php' ?>

  <style>
    #anchor {
      color: black;
    }

    #anchor:hover {
      color: green;

    }
  </style>
</head>


<body>
  <div class="side-panel-body-overlay"></div>

  <div id="wrapper" class="clearfix">
    <!-- Header -->
    <?php
    include_once("component/header.php");
    ?>

    <!-- Start main-content -->
    <div class="main-content-area">

      <!-- Section: home Start -->
      <section id="home ">
        <div class="container-fluid p-0">
          <div class="row">
            <div class="col">
              <!-- START Industrivo Rev Slider 2 REVOLUTION SLIDER 6.1.7 -->
              <p class="rs-p-wp-fix "></p>
              <rs-module-wrap id="rev_slider_1_1_wrapper" data-alias="firoox-revolution-slider" data-source="gallery" style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                <rs-module id="rev_slider_1_1" data-version="6.3.3">
                  <rs-slides>
                    <rs-slide data-key="rs-2" data-title="Slide 1" data-thumb="images/bg/bg1.jpg" data-anim="ei:d;eo:d;s:d;r:default;t:slotslide-horizontal;sl:d;">
                      <img src="images/bg/bg1.jpg" title="firoox-s1" width="1920" height="1280" data-bg="p:center top;" data-parallax="off" class="rev-slidebg" data-no-retina="">
                      <rs-layer id="slider-2-slide-2-layer-18" data-type="text" data-rsp_ch="on" data-xy="x:l,l,c,c;xo:55px,0px,8px,0;yo:230px,149px,120px,200px;" data-text="w:normal;s:70,62,52,46;l:95,90,80,48;ls:1px,0px,0px,0px;fw:800;a:left,left,left,center;" data-dim="w:750px,743px,659px,455px;" data-frame_0="y:-50,-37,-28,-17;" data-frame_1="st:1100;sp:1000;sR:1100;" data-frame_999="o:0;st:w;sR:6900;" style="z-index:11;text-transform:capitalize;" class="font-current-theme2">Agriculture Matter to the Future of Development<span class="text-theme-colored2">.</span>
                      </rs-layer>
                      <rs-layer id="slider-2-slide-2-layer-22" data-type="text" data-rsp_ch="on" data-xy="x:l,l,c,c;xo:60px,0px,-225px,0px;yo:548px,450px,400px,400px;" data-text="w:normal;s:20,16,16,13;l:22,20,18,20;a:left,left,left,center;" data-frame_0="y:-50,-37,-28,-17;" data-frame_1="st:1700;sp:1000;sR:1700;" data-frame_999="o:0;st:w;sR:6300;" style="z-index:10;" class="font-current-theme2"><a href="about.php" class="btn btn-theme-colored2">Learn More ➞</a>
                      </rs-layer>
                      <rs-layer id="slider-2-slide-2-layer-0" data-type="shape" data-rsp_ch="on" data-text="w:normal;s:20,14,10,6;l:0,18,13,8;" data-dim="w:100%;h:100%;" data-basealign="slide" data-frame_999="o:0;st:w;sR:8700;" style="z-index:8;background-color:rgba(0,10,22,0.17);">
                      </rs-layer>
                    </rs-slide>
                    <rs-slide data-key="rs-11" data-title="Slide 1" data-thumb="images/bg/bg2.jpg" data-anim="ei:d;eo:d;s:d;r:default;t:slotslide-horizontal;sl:d;">
                      <img src="images/bg/bg2.jpg" title="Untitled-1" width="1920" height="1280" data-bg="p:center top;" data-parallax="off" class="rev-slidebg" data-no-retina="">
                      <rs-layer id="slider-2-slide-11-layer-18" data-type="text" data-rsp_ch="on" data-xy="x:l,l,c,c;xo:55px,0px,8px,0;yo:338px,249px,220px,245px;" data-text="w:normal;s:90,72,62,46;l:95,90,80,48;ls:1px,0px,0px,0px;fw:900;a:left,left,left,center;" data-dim="w:1000px,743px,659px,455px;" data-frame_0="y:-50,-37,-28,-17;" data-frame_1="st:1100;sp:1000;sR:1100;" data-frame_999="o:0;st:w;sR:6900;" style="z-index:11;text-transform:capitalize;" class="font-current-theme2">Organic and Agricul Products
                      </rs-layer>
                      <rs-layer id="slider-2-slide-11-layer-22" data-type="text" data-rsp_ch="on" data-xy="x:l,l,c,c;xo:60px,0px,-225px,0px;yo:548px,450px,400px,400px;" data-text="w:normal;s:20,16,16,13;l:22,20,18,20;a:left,left,left,center;" data-frame_0="y:-50,-37,-28,-17;" data-frame_1="st:1700;sp:1000;sR:1700;" data-frame_999="o:0;st:w;sR:6300;" style="z-index:10;" class="font-current-theme1"><a href="about.php" class="btn btn-theme-colored2">Learn More ➞</a>
                      </rs-layer>
                      <rs-layer id="slider-2-slide-11-layer-0" data-type="shape" data-rsp_ch="on" data-text="w:normal;s:20,14,10,6;l:0,18,13,8;" data-dim="w:100%;h:100%;" data-basealign="slide" data-frame_999="o:0;st:w;sR:8700;" style="z-index:8;background-color:rgba(0,10,22,0.17);">
                      </rs-layer>
                    </rs-slide>
                  </rs-slides>
                  <rs-static-layers>
                    <!--
                    -->
                  </rs-static-layers>
                  <rs-progress class="rs-bottom" style="height: 5px; background: rgba(199,199,199,0.5);"></rs-progress>
                </rs-module>
                <script>
                  if (typeof revslider_showDoubleJqueryError === "undefined") {
                    function revslider_showDoubleJqueryError(sliderID) {
                      var err = "<div class='rs_error_message_box'>";
                      err += "<div class='rs_error_message_oops'>Oops...</div>";
                      err += "<div class='rs_error_message_content'>";
                      err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
                      err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
                      err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
                      err += "</div>";
                      err += "</div>";
                      jQuery(sliderID).show().html(err);
                    }
                  }
                </script>
              </rs-module-wrap>
              <!-- END REVOLUTION SLIDER -->
            </div>
          </div>
        </div>
      </section>
      <!-- Section: home End -->

      <!-- Section: About -->


      <div class="block block-features block-features--layout--classic mt-5">
        <div class="container">
          <div class="block-features__list">
            <div class="block-features__item">
              <div class="block-features__icon"><svg width="48px" height="48px">
                  <use xlink:href="images/sprite.svg#fi-free-delivery-48"></use>
                </svg></div>
              <div class="block-features__content">
                <div class="block-features__title">Free Shipping</div>
                <div class="block-features__subtitle">Meet Seller at any Place</div>
              </div>
            </div>
            <div class="block-features__divider"></div>
            <div class="block-features__item">
              <div class="block-features__icon"><svg width="48px" height="48px">
                  <use xlink:href="images/sprite.svg#fi-24-hours-48"></use>
                </svg></div>
              <div class="block-features__content">
                <div class="block-features__title">Support 24/7</div>
                <div class="block-features__subtitle">Call us anytime</div>
              </div>
            </div>
            <div class="block-features__divider"></div>
            <div class="block-features__item">
              <div class="block-features__icon"><svg width="48px" height="48px">
                  <use xlink:href="images/sprite.svg#fi-payment-security-48"></use>
                </svg></div>
              <div class="block-features__content">
                <div class="block-features__title">100% Safety</div>
                <div class="block-features__subtitle">Only secure payments</div>
              </div>
            </div>
            <div class="block-features__divider"></div>
            <div class="block-features__item">
              <div class="block-features__icon"><svg width="48px" height="48px">
                  <use xlink:href="images/sprite.svg#fi-tag-48"></use>
                </svg></div>
              <div class="block-features__content">
                <div class="block-features__title">Free To use</div>
                <div class="block-features__subtitle">Post and Ad </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- .block-features / end -->






      <section class="sectionn">
        <div class="container">
        <div class="block-header">
            <h3 class="block-header__title">Fresh <strong class="text-success">Recommendations</strong> &nbsp;</h3>
            <div class="block-header__divider"></div>
          </div>
          <div class="section-content">
            <div class="row">
              <div class="col-lg-12 col-xl-12">
                <!-- Isotope Gallery Grid -->
                <div id="gallery-holder-618422" class="isotope-layout grid-3 gutter-15 clearfix lightgallery-lightbox">
                  <div class="isotope-layout-inner" id="gallery-items">
                    <!-- Isotope Item Start -->
                    <?php
                    $sql = $con->query("SELECT * from ads where status='aprove' ORDER BY date DESC LIMIT 6");
                    while ($row = $sql->fetch_assoc()) {
                      $category_id = $row['category_id'];
                      $category = $con->query("select * from category where id='$category_id'")->fetch_assoc();
                    ?>
                      <div class="isotope-item cat1 cat3">
                        <div class="isotope-item-inner">
                          <div class="product">
                            <div class="product-header">
                              <div class="thumb image-swap">
                                <a href="detail.php?id=<?php echo $row['id'] ?>"><img style="height: 300px;" src="PICS/<?php echo $row['image'] ?>" class="product-main-image img-responsive img-fullwidth" width="300" height="300" alt="Ads"></a>
                                <a href="detail.php?id=<?php echo $row['id'] ?>"><img style="height: 300px;" src="PICS/<?php echo $row['image'] ?>" class="product-hover-image img-responsive img-fullwidth" alt="Ads"></a>
                              </div>
                              <div class="product-button-holder"></div>
                            </div>
                            <div class="product-details">
                              <a href="">
                                <h6 class="text-secondary"><?php echo $category['name'] ?></h6>
                              </a>
                              <h5 class="product-title"><a id="anchor" href="detail.php?id=<?php echo $row['id'] ?>"><?php echo $row['title'] ?></a></h5>
                              <span class="price">
                                <ins><span class="amount"><span class="currency-symbol">Rs</span><?php echo $row['price'] ?></span></ins>
                              </span>
                              <div class="price_location d-flex justify-content-between my-2">
                                <span class="address"><?php echo $row['location'] ?></span>
                                <span class="time"><?php echo $row['date'] ?></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php
                    }
                    ?>
                    <!-- End Isotope Item -->
                  </div>
                  <div id="new-gallery-items">
                    <!-- Newly loaded products will be appended here -->
                  </div>

                  <!-- End Isotope Grid -->
                </div>
                <div class="text-center">
                  <button id="load-more" class="btn btn-primary btn-lg">Load More</button>
                </div>
              </div>






            </div>
          </div>
        </div>
      </section>


      <!-- .block-banner -->
      <div class="block block-banner my-4">
        <div class=""><a href="shop.php" class="block-banner__body">
            <div class="block-banner__image block-banner__image--desktop" style="background-image: url('images/banner.jpeg')"></div>
            <div class="block-banner__image block-banner__image--mobile" style="background-image: url('images/bannermbl.jpeg')"></div>
            <div class="block-banner__title">Agro<br class="block-banner__mobile-br">Crops</div>
            <div class="block-banner__text">Seeds, Vegetables,Crops, Machinary, And More</div>
            <div class="block-banner__button"><span class="btn btn-sm btn-primary">Shop Now</span></div>
          </a></div>
      </div><!-- .block-banner / end -->






    </div>
    <!-- end main-content -->

    <!-- Footer -->
    <?php
    include_once("component/footer.php");
    ?>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
  <!-- end wrapper -->

  <!-- Footer Scripts -->
  <!-- JS | Custom script for all pages -->
  <script src="js/custom.js"></script>
  <script>
    $(document).ready(function() {
      var items_per_load = 8;
      var offset = items_per_load;

      $('#load-more').on('click', function() {
        $.ajax({
          url: 'load_more.php',
          type: 'post',
          data: {
            offset: offset
          },
          beforeSend: function() {
            $('#load-more').text('Loading...');
          },
          success: function(response) {
            if (response == '') {
              $('#load-more').hide();
            } else {
              $('#new-gallery-items').append(response);
              offset += items_per_load;
              $('#load-more').text('Load More');
            }
          }
        });
      });
    });
  </script>

</body>

</html>