<?php
session_start();
require_once("config/dbcon.php");
if(isset($_POST['add'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $message=$_POST['message'];

  $sql=$con->query("insert into contact_us set name='$name',email='$email',phone='$phone',message='$message'");
  if($sql){
    $_SESSION['message'] = " Successfully";
    // header("location:contact.php");

  }
  else{
    $_SESSION['error'] = "Error";
  }
}
include 'component/headerlinks.php';
?>

 <div class="container">
  <div class="row">
    <h4 class="pt-5">Contact Us</h4>
    <div class="block-header__divider"></div>
    <?php
                    // Your message code
                    if(isset($_SESSION['message']))
                    {
                        echo '<h4 class="alert alert-warning">'.$_SESSION['message'].'</h4>';
                        unset($_SESSION['message']);
                    } // Your message code
                ?>
                     <?php
                    // Your message code
                    if(isset($_SESSION['error']))
                    {
                        echo '<h4 class="alert alert-warning">'.$_SESSION['error'].'</h4>';
                        unset($_SESSION['error']);
                    } // Your message code
                ?>
  <form id="contact_form" name="contact_form" class="p-5" action="" method="post" novalidate="novalidate">
    <div class="row">

      <div class="col-md-6">
        <div class="mb-3">
          <input name="name" class="form-control" type="text" placeholder="Your Name">
        </div>
      </div>
      <div class="col-md-6">
        <div class="mb-3">
          <input name="email" class="form-control required email" type="email" placeholder="Email Address">
        </div>
      </div>
      <div class="col-md-6">
        <div class="mb-3">
          <input name="phone" class="form-control" type="text" placeholder="Phone number">
        </div>
      </div>
     
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="mb-3 mb-20">
          <textarea name="message" class="form-control required" rows="9" placeholder="Write Message"></textarea>
        </div>
        <div class="mb-3 mb--0">
          <input name="form_botcheck" class="form-control" type="hidden" value="">
          <button type="submit" name="add" class="btn btn-md btn-theme-colored2" data-loading-text="Please wait...">Send Message ➞</button>
        </div>
      </div>
    </div>
  </form>

  </div>

 </div>

 <?php
include("component/footer.php");
 ?>
 <script src="js/custom.js"></script>
</body>
</html>