<?php
include("component/header.php");
if(isset($_POST['ads_upload'])){
    $seller_id=$_POST['seller_id'];
    $name=$_POST['name'];
    $contact_no=$_POST['contact_no'];
    $city=$_POST['city'];
    $location=$_POST['location'];
    $title=$_POST['title'];
    $description=$_POST['description'];
    $price=$_POST['price'];
    $quantity =$_POST['quantity'];
    $condition =$_POST['condition'];
    $category_id=$_POST['category_id'];
    $image=$_FILES['image']['name'];
    $image_tmp=$_FILES['image']['tmp_name'];
    $date=date("D-m-Y");
	move_uploaded_file($image_tmp,"../PICS/".$image);
    $sql=$con->query("insert into ads set seller_id='$seller_id',name='$name',contact_no='$contact_no',city='$city',
    location='$location',title='$title',description='$description',image='$image',price='$price',category_id='$category_id',
    date='$date', quantity='$quantity' , conditions='$condition'");
    if($sql){
        $_SESSION['success']="Ads Upload Successfully";
        header("location:view-ads.php");
    }
    else{
        $_SESSION['error']="Please Try Again";
    }
}
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
    <div id="main-wrapper">

        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <div class="logo-abbr">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="100%" height="58.000000pt" viewbox="0 0 58.000000 58.000000" preserveaspectratio="xMidYMid meet">

                        <g transform="translate(0.000000,58.000000) scale(0.100000,-0.100000)" fill="var(--primary)" stroke="none">
                            <path d="M146 570 c-47 -15 -94 -52 -118 -95 -19 -33 -23 -59 -26 -148 -2 -59
						-1 -127 2 -151 10 -64 52 -122 110 -151 45 -23 62 -25 177 -25 119 0 130 2
						180 28 43 22 59 38 81 81 26 49 28 62 28 170 0 64 -4 131 -10 150 -14 51 -50
						97 -95 123 -35 20 -55 23 -170 25 -72 1 -143 -2 -159 -7z m106 -230 c17 -38
						34 -70 38 -70 3 0 20 32 37 70 31 70 49 84 72 56 18 -21 -81 -216 -109 -216
						-29 0 -132 206 -110 220 30 19 42 9 72 -60z"></path>
                        </g>
                    </svg>
                </div>
                <img class="logo-compact" src="images/logo-text.png" alt="">
                <div class="brand-title">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="99" height="30.000000pt" viewbox="0 0 99.000000 30.000000" preserveaspectratio="xMidYMid meet">

                        <g transform="translate(0.000000,30.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                            <path d="M28 289 c-10 -5 -18 -16 -18 -24 0 -8 26 -67 57 -130 54 -108 78
						-136 103 -120 11 7 112 204 124 241 5 16 0 23 -18 32 -30 13 -27 17 -82 -98
						l-41 -85 -46 98 c-25 53 -49 97 -54 97 -4 0 -16 -5 -25 -11z"></path>
                            <path d="M344 210 c-57 -23 -83 -111 -46 -156 44 -55 109 -59 158 -10 51 51
						43 119 -18 156 -35 21 -60 24 -94 10z m74 -92 c6 -47 -59 -62 -73 -17 -9 27
						13 51 44 47 20 -2 27 -9 29 -30z"></path>
                            <path d="M615 210 c-11 -4 -37 -5 -58 -2 l-38 5 3 -99 c3 -98 3 -99 28 -99 24
						0 25 4 30 65 l5 65 40 5 c34 4 40 9 43 31 3 29 -19 41 -53 29z"></path>
                            <path d="M705 179 c-28 -35 -32 -76 -10 -118 18 -36 67 -58 98 -44 15 7 27 7
						38 0 9 -6 24 -7 33 -4 13 5 16 23 16 101 l0 94 -75 0 c-71 1 -76 -1 -100 -29z
						m100 -64 c0 -23 -5 -31 -21 -33 -30 -4 -48 21 -34 48 18 33 55 23 55 -15z"></path>
                            <path d="M914 66 c-12 -31 0 -51 31 -51 27 0 30 3 30 30 0 25 -4 30 -28 33
						-17 2 -29 -2 -33 -12z"></path>
                        </g>
                    </svg>
                </div>



            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>


        <?php include("component/navbr.php");?>
        <?php include("component/sidebar.php");?>
        <div class="content-body">
            <div class="container-fluid">
               
                <div class="row">


                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Ads</h4>
                                <?php
                                if(isset($_SESSION['error'])){
                                    ?>
                                    		<h4 class="alert alert-success"><?php echo $_SESSION['error'] ?></h4>
                                    <?php
                                    unset($_SESSION['error']);
                                }
                                ?>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="seller_id" value="<?php echo $_SESSION['user_id'] ?>">
                                        <h2>Saler Details</h2>
                                        <hr>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Name</label>
                                                <input type="text" required name="name" class="form-control" placeholder="Name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Contact No</label>
                                                <input type="number"required name="contact_no" class="form-control" placeholder="Contact number">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>City</label>
                                                <input type="text"required name="city" class="form-control" placeholder="City">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>location</label>
                                                <input type="text"required name="location" class="form-control" placeholder="location">
                                            </div>
                                        </div>
                                        <hr>
                                        <h2>Ads uploading detail</h2>
                                        <hr>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Title</label>
                                                <input type="text" required name="title" class="form-control border border-2" placeholder="Title">
                                            </div>
                                           
                                            <div class="form-group col-md-6">
                                                <label>Select Category</label>
                                                <select  required name="category_id"class="form-control">
                                                    <option  disabled="" selected="">Choose...</option>
                                                    <?php
                                                    $sql_c=$con->query("Select * from category");
                                                    while($row_c=$sql_c->fetch_assoc()){ 

                                                    ?>
                                                    <option value="<?php echo $row_c['id'] ?>"><?php echo $row_c['name'] ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                 
                                                </select>
                                            </div>
                                    
                                            

                                            <div class="form-group col-md-6">
                                                <label>Image</label>
                                                <input type="file" required  name="image" class="form-control" placeholder="Select image">

                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Price</label>
                                                <input type="number" required name="price" class="form-control" placeholder="Price">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Quantity</label>
                                                <input type="number" required name="quantity" class="form-control" placeholder="Price">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Condition</label>
                                                <select name="condition" class="form-control">
                                                    <option disabled selected="">Choose</option>
                                                    <option value="New">New</option>
                                                    <option value="Used">Used</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Discription</label>
                                               <textarea name="description" class="form-control" id="" cols="50" rows="5"> </textarea>
                                            </div>
                                        </div>
                                      


                                        <button type="submit" name="ads_upload" class="btn btn-primary">Upload</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
      
        <?php
        include("component/footer.php");
        ?>
        

    </div>
    
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>
    <script src="js/demo.js"></script>





</body>

</html>