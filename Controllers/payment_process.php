<?php 
    require_once("../Classes/payment_class.php");


    function payment_controller($amount, $customer_id, $currency, $payment_Date, $booked_slot_id){
        $pay = new payment;

        return $pay->payment_controller($amount, $customer_id, $currency, $payment_Date, $booked_slot_id);
    }


?>
