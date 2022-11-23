<?php

/**
 * This class hanldes all the database functions 
 */
require("../Settings/db_class.php");

class customer_class  extends db_connection{

    //this function performs the insertion function
    function customer_register_cls($name,$email,$password,$number,$businessname,$student_id,$user_role){
		$mysql = "INSERT INTO `customer`(`name`, `email`, `password`, `number`, `businessname`, `student_id`, `user_role`) VALUES ('$name','$email','$password','$number','$businessname','$student_id','$user_role')";

		return $this->db_query($mysql);
		
		
	}


	function select_customer_cls($email,$password){
		$mysql ="SELECT * FROM `customer` WHERE `email` = '$email'AND `password` ='$password'";
		
		return $this->db_fetch_all($mysql);
	}

	function checkIfEmailExist($email ,$phone, $student_id){
		$sql="SELECT `email` FROM `customer` WHERE  `email`='$email' or number = '$phone' or student_id = '$student_id'";
		return $this->db_fetch_one($sql);
	}

	function checkAndGetCredentials($email){
		$mysql ="SELECT * FROM `customer` WHERE `email` = '$email' ";
		
		return $this->db_fetch_one($mysql);
	}
	
}






?>