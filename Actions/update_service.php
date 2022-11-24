<?php 
    require_once("../Controllers/service_controller.php");

    $service_name = $_GET['service_name'];
    $cat_id = $_GET['cat_id'];
    $time = $_GET['time'];
    $price = $_GET['price'];
    $s_id = $_GET['s_id'];
    $updated = updateService_ctr($s_id, $service_name, $cat_id, $time, $price);

    if($updated){
        echo "<script>alert('Success')</script>";
    }else{
        echo "<script>alert('Failed')</script>";
    }
?>