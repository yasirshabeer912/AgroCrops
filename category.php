<?php
session_start();
include 'component/headerlinks.php';
?>


  <!-- Start main-content -->
  <div class="main-content-area">
    <!-- Section: page title -->
   

    <section class="">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-lg-12 col-xl-12">
              <!-- Isotope Filter -->
            
              <!-- End Isotope Filter -->

              <!-- Isotope Gallery Grid -->
              <div id="gallery-holder-618422" class="isotope-layout grid-3 gutter-15 clearfix lightgallery-lightbox">
                <div class="isotope-layout-inner">
              <?php
             $sql=$con->query("Select * from category");
             while($row=$sql->fetch_assoc()){
              ?>
                  <div class="isotope-item cat1 cat3">
                    <div class="isotope-item-inner">
                      <div class="product">
                        <div class="product-header">
    
                          <div class="thumb image-swap">
                            <a href="category_ads.php?id=<?php echo $row['id'] ?>"><img style="height: 300px;" src="PICS/<?php echo $row['image'] ?>" class="product-main-image img-responsive img-fullwidth" width="400" height="400" alt="category"></a>
                            <a href="category_ads.php?id=<?php echo $row['id'] ?>"><img style="height: 300px;" src="PICS/<?php echo $row['image'] ?>" class="product-hover-image img-responsive img-fullwidth"  width="400" height="400" alt="category"></a>
                          </div>
                        
                        </div>
                        <div class="product-details">
                      
                          <h5 class="product-title"><a href="category_ads.php?id=<?php echo $row['id'] ?>"><?php echo $row['name'] ?></a></h5>
                      
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php
             }
             ?>
                 
                </div>
              </div>
              <!-- End Isotope Gallery Grid -->
            </div>
           
          </div>
        </div>
      </div>
    </section>
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
</body>
</html>