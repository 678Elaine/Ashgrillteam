<?php 
    require_once("../Classes/appointment_class.php");


    function  createAppointment_ctr($appointment_date, $appointment_day, $appoint_time){
        $appointment = new Appointment;

        return $appointment-> createAppointment($appointment_date, $appointment_day, $appoint_time);
    }

    function deleteAppointment_ctr($appointment_id){
        $appointment = new Appointment;

        return $appointment->deleteAppointment($appointment_id);
    }

    function updateAppointment_ctr($appointment_id,$appointment_date, $appointment_day, $appoint_time){
        $appointment = new Appointment;

        return $appointment->updateAppointment($appointment_id,$appointment_date, $appointment_day, $appoint_time);
    }

    function getAllBooking_ctr(){
        $appointment = new Appointment;

        return $appointment->getAllAppointment();
    }

    function getOneAppointment_ctr($appointment_id){
        $appointment = new Appointment;

        return $appointment->getOneAppointment($appointment_id);
    }

?>