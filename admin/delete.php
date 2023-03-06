<?php
include("component/header.php");
if(isset($_GET['id'])){
     $id=$_GET['id'];
     $status=$_GET['status'];

    $sql=$con->query("DELETE FROM ads  where id='$id'");
    if($sql){
        header("location:all_ads.php");
    //     $_SESSION['delete_success']="Ads Delete Successfully";
    //     echo " <script>
    //     function autoRefresh() {
    //         window.location = 'view-ads.php';
    //     }
    //     setInterval('autoRefresh()', 4000);
    // </script> ";
       
    }
}
?>