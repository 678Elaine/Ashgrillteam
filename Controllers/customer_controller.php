<?php
//connect to the user account class
include("../Classes/customer_class.php");

//sanitize data




//--INSERT--//
function customer_register_ctr($name,$email,$password,$number,$businessname,$student_id,$user_role)
{
    $newuser_added= new customer_class();

    return $newuser_added->customer_register_cls($name,$email,$password,$number,$businessname,$student_id,$user_role);
}



function select_customer_ctr($email,$password){

    $add= new customer_class();
    
    return $add->select_customer_cls($email,$password);
}

function checkIfEmailExist_ctr($email ,$phone, $student_id){
    $add = new customer_class;
    return $add->checkIfEmailExist($email ,$phone, $student_id);
}

function checkAndGetCredentials_ctr($email){
    $add = new customer_class;
    return $add->checkAndGetCredentials($email);
}


?>