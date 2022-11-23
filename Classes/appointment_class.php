<?php 
    require_once("../Settings/db_class.php");

    class Appointment extends db_connection{


        function createAppointment($appointment_date, $appointment_day, $appoint_time){
            $sql = "INSERT INTO `appointments`(`appointment_date`, `appointment_day`, `appointment_time`) VALUES ('$appointment_date','$appointment_day','$appoint_time')";

            return $this->db_query($sql);
        }

        function deleteAppointment($appointment_id){
            $sql = "DELETE FROM `appointments` WHERE appointment_id='$appointment_id'";

            return $this->db_query($sql);
        }

        function updateAppointment($appointment_id,$appointment_date, $appointment_day, $appoint_time){
            $sql = "UPDATE `appointments` SET `appointment_date`='$appointment_date',`appointment_day`='$appointment_day',`appointment_time`='$appoint_time' WHERE `appointment_id`='$appointment_id'";

            return $this->db_query($sql);
        }

        function getAllAppointment(){
            $sql = "SELECT * FROM `appointments` ";

            return $this->db_fetch_all($sql);
        }

        function getOneAppointment($appointment_id){
            $sql = " SELECT * FROM `appointments` WHERE `appointment_id`='$appointment_id'";

            return $this->db_fetch_one($sql);
        }
    }

?>