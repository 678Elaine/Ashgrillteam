<?php 
    require_once("../Controllers/customer_controller.php");
     
    if(isset($_GET['submit'])){
    $name=$_GET['name'];
    $email=$_GET['email'];
    $password=$_GET['password'];
    $number=$_GET['number'];
    $businessname=$_GET['business_name'];
    $student_id=$_GET['student_id'];
    $user_role=2;

    $newpassword= password_hash($password, PASSWORD_DEFAULT);
    
    if(checkIfEmailExist_ctr($email ,$number, $student_id)===NULL){
        $addcustomer = customer_register_ctr($name,$email,$newpassword,$number,$businessname,$student_id,$user_role);

        echo $addcustomer;
        if($addcustomer){
            header("location:../View/login.php");
        }
        else{
            echo "<script>
            alert('Wrong inputs');
            </script>";
        }
    }
    else{
        echo "<script>
        alert('Email Or Phone Number Or Student id already exist');
        </script>";

    }

    }
  



?>