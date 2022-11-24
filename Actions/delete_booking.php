<?php 
    require_once("../Controllers/booking_controller.php");

    $book_id = $_GET['book_id'];

    $deleted = delete_booking_ctr($book_id);

    if($deleted){
        header("location: ../View/booking.php");
    }else{
        echo "failed";
        header("location: ../View/booking.php");
    }

?>