<?php 
    require_once("../Controllers/appointment_controller.php");

    $appointment_id = $_GET['appointment_id'];

    $result = deleteAppointment_ctr($appointment_id);

    if($result){
        echo "success";
    }else{
        echo "failed";
    }



?>