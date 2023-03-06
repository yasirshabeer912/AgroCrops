<?php
include("component/header.php");
?>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

    

	   <?php
	   include("component/navbr.php");
	   ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
	   <?php
	   include("component/sidebar.php");
	   ?>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<!-- Add Order -->
				
				<div class="row">
					<div class="col-xl-12">
						<div class="row">
							<div class="col-sm-6">
								<div class="card fun">
									<div class="card-body">
										<div class="media align-items-center">
											<div class="media-body me-3">
												<?php
                                               $sql_ads=$con->query("select * from ads");
											   $total_ads=mysqli_num_rows($sql_ads);
												?>
												<h2 class="num-text text-black font-w600"><?php echo $total_ads ?></h2>
												<span class="fs-14">Total Ads</span>
											</div>
											<svg width="36" height="36" viewbox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M34.4221 13.9831C34.3342 13.721 34.1756 13.4884 33.9639 13.3108C33.7521 13.1332 33.4954 13.0175 33.2221 12.9766L23.6491 11.5141L19.3531 2.36408C19.232 2.10638 19.04 1.88849 18.7996 1.73587C18.5592 1.58325 18.2803 1.5022 17.9956 1.5022C17.7108 1.5022 17.432 1.58325 17.1916 1.73587C16.9512 1.88849 16.7592 2.10638 16.6381 2.36408L12.3421 11.5141L2.76908 12.9766C2.49641 13.0181 2.24048 13.1341 2.02943 13.3117C1.81837 13.4892 1.66036 13.7215 1.57277 13.9831C1.48517 14.2446 1.47139 14.5253 1.53293 14.7941C1.59447 15.063 1.72895 15.3097 1.92158 15.5071L8.89808 22.6501L7.24808 32.7571C7.20306 33.0345 7.23685 33.3189 7.34561 33.578C7.45437 33.8371 7.63373 34.0605 7.86325 34.2226C8.09277 34.3847 8.36321 34.4791 8.64377 34.495C8.92432 34.5109 9.20371 34.4477 9.45008 34.3126L18.0001 29.5906L26.5501 34.3126C26.7965 34.4489 27.0762 34.5131 27.3573 34.4978C27.6385 34.4826 27.9097 34.3885 28.1399 34.2264C28.37 34.0643 28.55 33.8406 28.659 33.5811C28.7681 33.3215 28.8019 33.0365 28.7566 32.7586L27.1066 22.6516L34.0786 15.5071C34.2703 15.3091 34.4038 15.0622 34.4644 14.7933C34.525 14.5245 34.5103 14.2441 34.4221 13.9831Z" fill="#2953E8"></path>
											</svg>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="card fun">
									<div class="card-body">
										<div class="media align-items-center">
											<div class="media-body me-3">
											<?php
                                               $sql_aprove=$con->query("select * from ads where status='aprove'");
											   $total_aprove=mysqli_num_rows($sql_aprove);
												?>
												<h2 class="num-text text-black font-w600"><?php echo $total_aprove ?></h2>
												<span class="fs-14">Aprovel Ads</span>
											</div>
											<svg width="36" height="36" viewbox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M17.8936 22.4999C23.6925 22.4999 28.3936 17.7989 28.3936 11.9999C28.3936 6.20095 23.6925 1.49994 17.8936 1.49994C12.0946 1.49994 7.39355 6.20095 7.39355 11.9999C7.39355 17.7989 12.0946 22.4999 17.8936 22.4999Z" fill="#2953E8"></path>
												<path d="M29.5606 21.3344C29.2171 20.9909 28.8511 20.6699 28.4761 20.3564C27.216 21.96 25.6079 23.2562 23.7734 24.1472C21.9389 25.0382 19.926 25.5007 17.8865 25.4996C15.8471 25.4986 13.8346 25.0342 12.001 24.1414C10.1674 23.2486 8.56061 21.9507 7.30209 20.3459C5.4471 21.8906 3.95587 23.8256 2.9348 26.013C1.91373 28.2003 1.38799 30.586 1.39509 32.9999C1.39509 33.3978 1.55313 33.7793 1.83443 34.0606C2.11573 34.3419 2.49727 34.4999 2.89509 34.4999H32.8951C33.2929 34.4999 33.6744 34.3419 33.9557 34.0606C34.2371 33.7793 34.3951 33.3978 34.3951 32.9999C34.4005 30.8324 33.976 28.6854 33.1461 26.683C32.3163 24.6807 31.0976 22.8627 29.5606 21.3344Z" fill="#2953E8"></path>
											</svg>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="card fun">
									<div class="card-body">
										<div class="media align-items-center">
											<div class="media-body me-3">
												<?php
											$sql_reject=$con->query("select * from ads where status='reject'");
											   $total_reject=mysqli_num_rows($sql_reject);
												?>
												<h2 class="num-text text-black font-w600"><?php echo $total_reject ?></h2>
												<span class="fs-14">Rejected Ads</span>
											</div>
											<svg width="36" height="36" viewbox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12 1.5H6C3.51472 1.5 1.5 3.51472 1.5 6V29.8125C1.5 32.2977 3.51472 34.3125 6 34.3125H12C14.4853 34.3125 16.5 32.2977 16.5 29.8125V6C16.5 3.51472 14.4853 1.5 12 1.5Z" fill="#2953E8"></path>
												<path d="M30 1.5H24C21.5147 1.5 19.5 3.51472 19.5 6V12C19.5 14.4853 21.5147 16.5 24 16.5H30C32.4853 16.5 34.5 14.4853 34.5 12V6C34.5 3.51472 32.4853 1.5 30 1.5Z" fill="#2953E8"></path>
												<path d="M30 19.5H24C21.5147 19.5 19.5 21.5147 19.5 24V30C19.5 32.4853 21.5147 34.5 24 34.5H30C32.4853 34.5 34.5 32.4853 34.5 30V24C34.5 21.5147 32.4853 19.5 30 19.5Z" fill="#2953E8"></path>
											</svg>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="card fun">
									<div class="card-body">
										<div class="media align-items-center">
											<div class="media-body me-3">
											<?php
											$sql_pending=$con->query("select * from ads where status='pending'");
											   $total_pending=mysqli_num_rows($sql_pending);
												?>
												<h2 class="num-text text-black font-w600"><?php echo $total_pending ?></h2>
												<span class="fs-14">Pending Ads</span>
											</div>
											<svg width="36" height="36" viewbox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M34.4221 13.9831C34.3342 13.721 34.1756 13.4884 33.9639 13.3108C33.7521 13.1332 33.4954 13.0175 33.2221 12.9766L23.6491 11.5141L19.3531 2.36408C19.232 2.10638 19.04 1.88849 18.7996 1.73587C18.5592 1.58325 18.2803 1.5022 17.9956 1.5022C17.7108 1.5022 17.432 1.58325 17.1916 1.73587C16.9512 1.88849 16.7592 2.10638 16.6381 2.36408L12.3421 11.5141L2.76908 12.9766C2.49641 13.0181 2.24048 13.1341 2.02943 13.3117C1.81837 13.4892 1.66036 13.7215 1.57277 13.9831C1.48517 14.2446 1.47139 14.5253 1.53293 14.7941C1.59447 15.063 1.72895 15.3097 1.92158 15.5071L8.89808 22.6501L7.24808 32.7571C7.20306 33.0345 7.23685 33.3189 7.34561 33.578C7.45437 33.8371 7.63373 34.0605 7.86325 34.2226C8.09277 34.3847 8.36321 34.4791 8.64377 34.495C8.92432 34.5109 9.20371 34.4477 9.45008 34.3126L18.0001 29.5906L26.5501 34.3126C26.7965 34.4489 27.0762 34.5131 27.3573 34.4978C27.6385 34.4826 27.9097 34.3885 28.1399 34.2264C28.37 34.0643 28.55 33.8406 28.659 33.5811C28.7681 33.3215 28.8019 33.0365 28.7566 32.7586L27.1066 22.6516L34.0786 15.5071C34.2703 15.3091 34.4038 15.0622 34.4644 14.7933C34.525 14.5245 34.5103 14.2441 34.4221 13.9831Z" fill="#2953E8"></path>
											</svg>
										</div>
									</div>
								</div>
							</div>
							
							
						</div>
					</div>
					
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
		<?php
		include("component/footer.php");
		?>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div> 
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="vendor/owl-carousel/owl.carousel.js"></script>
	<!-- Chart piety plugin files -->
    <script src="vendor/peity/jquery.peity.min.js"></script>
	<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	<!-- Apex Chart -->
	<script src="vendor/apexchart/apexchart.js"></script>
	<!-- Dashboard 1 -->
	<script src="js/dashboard/dashboard-1.js"></script>
	<script src="js/custom.min.js"></script>
	<script src="js/dlabnav-init.js"></script>
	<script src="js/demo.js"></script>
	
	
</body>
</html>