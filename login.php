<?php
session_start();
include 'component/headerlinks.php';
require_once("config/dbcon.php");
if (isset($_POST['login_button'])) {
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);

  $sql = $con->query("select * from users where email='$email'  AND password='$password'");
  if ($sql->num_rows > 0) {
    $query_fetch = $sql->fetch_assoc();
    $_SESSION['user_id'] = $query_fetch['id'];
    header('Location: Home.php');
  } else {
    $_SESSION['message'] = " not registered"; //message to show
    header("Location: login.php");
    exit(0);
  }
}

?>

<div class="container">
  <div class="row">
    <?php
    // Your message code
    if (isset($_SESSION['message'])) {
      echo '<h4 class="alert alert-warning">' . $_SESSION['message'] . '</h4>';
      unset($_SESSION['message']);
    } // Your message code
    ?>
   <div class="col-lg-8 mx-auto my-5">
   <div class="block-header">
            <h3 class="block-header__title">Login To<strong class="text-success"> AgroCrops</strong> &nbsp;</h3>
            <div class="block-header__divider"></div>
          </div>
   <form id="contact_form" name="" class="p-5" action="" method="post" novalidate="novalidate">
      <div class="row">
        <div class="col-md-12 mb-3">
          <div class="mb-3">
            <input name="email" class="form-control" type="email" placeholder="email">
          </div>
        </div>
        <div class="col-md-12">
          <div class="mb-3">
            <input name="password" class="form-control required email" type="password" placeholder="password">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col start-end">
          <div class="mb-3 mb--0 m-auto">
            <input name="form_botcheck" class="form-control" type="hidden" value="">
            <button name="login_button" type="submit" class="btn btn-md btn-theme-colored2" data-loading-text="Please wait...">Login ➞</button>
          </div>
        </div>
        <a href="signup.php">Create New Account</a>
      </div>
    </form>
   </div>

  </div>

</div>

<?php
include("component/footer.php");
?>
<script src="js/custom.js"></script>
</body>
</html>