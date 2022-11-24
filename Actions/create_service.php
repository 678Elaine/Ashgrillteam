<?php
    require_once("../Controllers/service_controller.php");


    $service_name = $_POST['service_name'];
    $cat_id = $_POST['cat_id'];
    $price = $_POST['price'];
    // $img = $_GET['service_image'];
    $user_file_name = $_FILES["service_image"]['name'];
    $target_dir = "../images/service/";
    $full_dir = $target_dir.$user_file_name;
    $image = "../images/service/".$user_file_name;

    // $root_dir = "../images/service/";
    // $upload_root_dir = "../images/services/";
    // $file = $_FILES["image"];
    // $file_dest = $root_dir . basename($file["name"]);
    // $upload_file_dest = $upload_root_dir . basename($file["name"]);
    // $file_type = strtolower(pathinfo($file_dest, PATHINFO_EXTENSION));
        
    $move = move_uploaded_file($_FILES["service_image"]['tmp_name'], $full_dir);

    if($move){
        $created = createService_ctr($service_name, $cat_id,$price, $service_image);
        if($created){
            echo "<script>alert('Service Created Successfully')</script>";
            header("location: ../View/admin.php");
        }else{
            echo "<script>alert('Failed')</script>";
        }
    }else{
        echo "<script>alert('Failed Upload With Image')</script>";
    }
 

?>