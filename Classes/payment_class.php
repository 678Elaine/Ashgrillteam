<?php 
    require_once("../Settings/db_class.php");

    class payment extends db_connection{

        function payment_process($amount, $customer_id, $currency, $payment_Date, $booked_slot_id){
            $sql = "";

            return $this->db_query($sql);
        }
    }


?>