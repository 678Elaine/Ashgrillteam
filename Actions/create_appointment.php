<?php 

    require_once("../Controllers/appointment_controller.php");

    $appointment_date = $_GET['appointment_date'];

    $timestamp = strtotime($appointment_date);

    $appointment_day = date('l', $timestamp);

    $appoint_time = $_GET['appointment_time'];



    $result = createAppointment_ctr($appointment_date, $appointment_day, $appoint_time);

    if($result){
        echo "success";
        header("location: ../view/admin.php");
    }else{
        echo "<script>alert('failed')</script>";
        header("location: ../view/admin.php");
    }
?>