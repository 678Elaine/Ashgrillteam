<?php 
    require_once("../Controllers/booking_controller.php");

    $book_id = $_GET['book_id'];

    $deleted = delete_booking_ctr($book_id);

    if($deleted){
        echo "<scipt>alert('success')</script>";
    }else{
        
    }

?>