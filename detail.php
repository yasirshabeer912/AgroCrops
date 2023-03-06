<?php
session_start();
require_once("config/dbcon.php");
include 'component/headerlinks.php';
?>

  <!-- Start main-content -->
  <div class="main-content-area">
    <!-- Section: page title -->
 <?php
$id=$_GET['id'];
$sql=$con->query("Select * from ads where id='$id'")->fetch_assoc();
$category_id=$sql['category_id'];
$category=$con->query("Select * from category where id='$category_id'")->fetch_assoc();
$seller_id=$sql['seller_id'];
$seller=$con->query("select * from users where id='$seller_id'")->fetch_assoc();
 ?>

    <section>
      <div class="container">
        <div class="section-content">
        <div class="product-single">
          <div class="row">
            <div class="col-lg-7 ">
              <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel ">
                <div class="carousel-inner slider-height slider-border  ">
                  <div class="carousel-item active ">
                    <img style="height: 467px; width:100%" src="PICS/<?php echo $sql['image'] ?>" class="d-block border" alt="...">
                  </div>


                </div>


              </div>
            </div>
            <div class="col-lg-5  ">
              <div class="border  px-3 ">
                <div class="d-flex justify-content-between  col-md-12 ">
                  <h3><?php echo $sql['title'] ?></h3>

                  <i class="fa-solid fa-share-nodes py-3 "></i>
                  <!-- <i class="fa-solid fa-circle-heart"></i> -->
                </div>

                <div class=" d-flex justify-content-between col-md-12 ">
                  <label for="">Address:</label>
                  <label for="t"><?php echo $sql['location'] ?></label>
                </div>

                <div class="addres d-flex justify-content-between col-md-12 ">
                  <label for="">City:</label>
                  <label for="t"><?php echo $sql['city'] ?></label>
                </div>
                <div class="addres d-flex justify-content-between col-md-12 ">
                  <label for="">Date:</label>
                  <label for="t"><?php echo $sql['date'] ?></label>
                </div>
              </div>
              <div class=" border mt-3 px-5">
                <h6 class="mt-3">Seller details</h6>
                <hr style="width:80%; margin:auto">
                <div class="d-flex col-md-12 my-3">
                  <div class="customerpic">
                    <img style="height: 100px; width: 100px; border-radius:50%" src="PICS/<?php echo $seller['image'] ?>" alt="Seller">
                  </div>
                  <div class="mx-4">
                    <h5><?php echo $sql['name'] ?></h5>
                    <?php
                    if (isset($_SESSION['user_id'])) {
                      echo $sql['contact_no'];
                    } else {
                      echo "<a href='login.php' style='color:blue;'> Click To See number </a>";
                    }
                    ?>

                  </div>
                </div>
                <?php
                if (isset($_SESSION['user_id'])) {
                ?>
                  <a style="width: 80%; margin:auto" href="https://wa.me/<?php echo $sql['contact_no'] ?>" class="btn shadow btn-success my-3">
                    <i class="fab fa-whatsapp bg-success text-white"></i>Chat on WhatsApp</a>

                <?php } else { ?>

                  <a style="width: 80%; margin:auto" href="login.php" class="btn shadow btn-success my-3">
                    <i class="fab fa-whatsapp bg-success text-white"></i>Chat on WhatsApp</a>
                <?php } ?>
              </div>
            </div>

          </div>
          <div class=" row border container m-auto mt-3">
            <div class="details">
              <h6>Details</h6>
              <div class="row">
                <div class="col-3"><strong>Title:</strong></div>
                <div class="col-3"><?php echo $sql['title'] ?></div>
                <div class="col-3"><strong>Price:</strong></div>
                <div class="col-3"><?php echo $sql['price'] ?></div>
                <div class="col-3"><strong>Quantity:</strong></div>
                <div class="col-3"><?php echo $sql['quantity'] ?></div>
                <div class="col-3"><strong>Condition:</strong></div>
                <div class="col-3"><?php echo $sql['conditions'] ?></div>
                <div class="col-3"><strong>Date Posted:</strong></div>
                <div class="col-3"><?php echo $sql['date'] ?></div>

              </div>
              <hr>
              <h6>Description</h6>
              <p><?php echo $sql['description'] ?></p>
            </div>
          </div>

        </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

  <!-- Footer -->
<?php
require_once("component/footer.php");
?>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>
</body>
</html>