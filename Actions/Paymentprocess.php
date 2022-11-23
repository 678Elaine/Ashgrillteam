<?php

require_once("../Controllers/payment_process.php");
require_once("../Controllers/booking_controller.php");
session_start();
$ref=$_GET['reference'];
$curl = curl_init();

$customer_id = $_SESSION['customerId'];
$bookedslot_status = "success";
$$booked_slot_id = insertIntoBookedSlot_ctr($customer_id,$invoice_no, $currency, $bookedslot_status);
  
 curl_setopt_array($curl, array(
   CURLOPT_URL => "https://api.paystack.co/transaction/verify/:".$ref,
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_ENCODING => "",
   CURLOPT_MAXREDIRS => 10,
   CURLOPT_TIMEOUT => 30,
   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
   CURLOPT_CUSTOMREQUEST => "GET",
   CURLOPT_HTTPHEADER => array(
     "Authorization: Bearer sk_live_497a3a223893acf3ff8ecfd4dce1158b2fc9b088",
     "Cache-Control: no-cache",
   ),
 ));
 
 $response = curl_exec($curl);
 $err = curl_error($curl);
 $result = json_decode($response,true);

 curl_close($curl);
 
 if ($err) {
   echo "cURL Error #:" . $err;
 } else {
   echo $response;
   $amount = $result['data']['amount'];
   $currency =$result['data']['currency'];
   $payment_date=date("Y-m-d");
   $finalresult=payment_process($amount, $customer_id, $currency, $payment_Date, $booked_slot_id);

   $bookings = get0neBookingCustomer_ctr($customer_id);

   foreach($bookings as $book){
      $appointment_id = $book['appointment_id'];
      $booked_slot_id = $book['booked_slot_id'];
      if(insert_into_book_details($appointment_id, $booked_slot_id)){
        delete_customer_book($customer_id, $appointment_id, $booked_id);
      }
   }

   
  
 }

?>
