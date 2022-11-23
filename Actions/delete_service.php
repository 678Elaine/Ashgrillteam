<?php 

    require_once("../Controllers/service_controller.php");

    $s_id = $_GET['s_id'];

    $result = deleteService_ctr($s_id);
    if($result){
        echo "<script>alert('Deleted Successfully Successfully')</script>";
    }else{
        echo "could not delete";
    }

?>