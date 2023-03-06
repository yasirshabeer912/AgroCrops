<?php

session_start();
require("../config/dbcon.php");
if(isset($_POST['login'])){
	$email=$_POST['email'];
	$password=$_POST['password'];
	$sql=$con->query("select * from admin where email='$email' AND password='$password'");
	if($sql->num_rows >0){
		$admin=$sql->fetch_assoc();
		$_SESSION['admin_id']=$admin['id'];
		header("location:index.php");
	}
	else{
		$_SESSION['error']="Your Login detail invalid";
	}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Vora : Crypto Trading UI Admin  Bootstrap 5 Template">
	<meta property="og:title" content="Vora : Crypto Trading UI Admin  Bootstrap 5 Template">
	<meta property="og:description" content="Vora : Crypto Trading UI Admin  Bootstrap 5 Template">
	<meta property="og:image" content="https://Vora.dexignlab.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>Admin Dashboard</title>
    <!-- Favicon icon -->
	<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
	<link rel="manifest" href="images/site.webmanifest">
	<link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#5bbad5">
    <link href="vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="vendor/chartist/css/chartist.min.css">
	<!-- Vectormap -->
    <link href="vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	
</head>

<body class="body ">
	<div class="container mx-auto mt-5">
		<div class="row  align-items-center justify-contain-center  mx-auto">
			<div class="col-xl-5 mx-auto">
				<div class="card">
					<div class="card-body ">
						<div class="row ">
							
							<div class="col-xl-12 col-md-12">
								<div class="sign-in-your py-4 px-2">
									<h3 class="mx-auto">Admin login</h3>
								
									<?php
                                if(isset($_SESSION['error'])){
                                    ?>
                                    		<h4 class="alert alert-danger"><?php echo $_SESSION['error'] ?></h4>
                                    <?php
                                    unset($_SESSION['error']);
                                }
                                ?>
									
									<form method="post">
										<div class="mb-6">
											<label class="mb-1"><strong>Email</strong></label>
											<input type="email" name="email" class="form-control">
										</div>
										<div class="mb-6">
											<label class="mb-1"><strong>Password</strong></label>
											<input type="password" name="password" class="form-control" value="Password">
										</div>
										<div class="row d-flex justify-content-between mt-4 mb-6">
										
											
										</div>
										<div class="text-center">
											<button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
										</div>
										
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>
	
	
</body>
</html>