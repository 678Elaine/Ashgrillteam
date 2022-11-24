<?php 
    require_once("../Controllers/appointment_controller.php");

    $appointment_date = $_GET['appointment_date'];

    $appointment_day = $_GET['appointment_day'];

    $appoint_time = $_GET['appointment_time'];

    
    $updated = updateAppointent_ctr($appointment_date, $appointment_day, $appoint_time);

    if($updated){
        echo "success";
    }else{
        echo "failed";
    }


?>