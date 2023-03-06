<?php
session_start();
include 'component/headerlinks.php';
require_once("config/dbcon.php");
if (isset($_POST['register_btn'])) {
  $fname = mysqli_real_escape_string($con, $_POST['fname']);
  $lname = mysqli_real_escape_string($con, $_POST['lname']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $confirm_password = mysqli_real_escape_string($con, $_POST['confirm_password']);

  if ($password == $confirm_password) {
    // Check Email
    $checkemail = "SELECT email FROM users WHERE email='$email' LIMIT 1";
    $checkemail_run = mysqli_query($con, $checkemail);

    if (mysqli_num_rows($checkemail_run) > 0) {
      // Already Email Exists
      $_SESSION['message'] = "Already Email Exists";
      header("Location: signup.php");
      exit(0);
    } else {
      $user_query = "INSERT INTO users (fname,lname,email,password) VALUES ('$fname','$lname','$email','$password')";
      $user_query_run = mysqli_query($con, $user_query);

      if ($user_query_run) {
        $_SESSION['message'] = "Registered Successfully";
        header("Location: login.php");
        exit(0);
      } else {
        $_SESSION['message'] = "Something Went Wrong!";
        header("Location: signup.php");
        exit(0);
      }
    }
  } else {
    $_SESSION['message'] = "Password and Confirm Password does not Match";
    header("Location: signup.php");
    exit(0);
  }
}
?>

<div class="container my-5">
  <div class="row">
    <div class="block-header">
      <h3 class="block-header__title">Register To<strong class="text-success"> AgroCrops</strong> &nbsp;</h3>
      <div class="block-header__divider"></div>
    </div>
    <?php
    // Your message code
    if (isset($_SESSION['message'])) {
      echo '<h4 class="alert alert-warning">' . $_SESSION['message'] . '</h4>';
      unset($_SESSION['message']);
    } // Your message code
    ?>
    <form id="contact_form" class="p-5" action="" method="post" novalidate="novalidate">
      <div class="row">
        <div class="col-md-6">
          <div class="mb-3">
            <input name="fname" required class="form-control" type="text" placeholder="First Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="mb-3">
            <input name="lname" required class="form-control required email" type="text" placeholder="Last Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="mb-3">
            <input name="email" required class="form-control" type="email" placeholder="email">
          </div>
        </div>
        <div class="col-md-6">
          <div class="mb-3">
            <input name="password" required class="form-control required email" type="password" placeholder=" Password">
          </div>
        </div>
        <div class="col-md-6">
          <div class="mb-3">
            <input name="confirm_password" required class="form-control required email" type="password" placeholder="Confrim password">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col start-end">
          <div class="mb-3 mb--0 m-auto">
            <input name="form_botcheck" class="form-control" type="hidden" value="">
            <button name="register_btn" type="submit" class="btn btn-md btn-theme-colored2" data-loading-text="Please wait...">Register ➞</button>
          </div>
        </div>
        <div class="my-1">
          <a href="login.php">You Already Account</a>
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