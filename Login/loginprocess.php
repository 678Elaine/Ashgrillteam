<?php
require_once("../Controllers/customer_controller.php");

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    

    //check if email 
    $login = checkAndGetCredentials_ctr($email);
    
    if ($login) {
        $hashpassword = $login['password'];
       
        if (password_verify($password, $hashpassword)) {
            session_start();
            $_SESSION['customerId'] = $login['customer_id'];
            $_SESSION['customerName'] = $login['name'];
            $_SESSION['customerEmail'] = $login['email'];
            $_SESSION['customerPasswd'] = $login['password'];
            $_SESSION['number'] = $login['number'];
            $_SESSION['businessname'] = $login['businessname'];
            $_SESSION['student_id'] = $login['student_id'];
            $_SESSION['customerImage'] = $login['customer_image'];
            $_SESSION['user_role'] = $login['user_role'];
            $_SESSION['userLogin'] = true;
            if($_SESSION['user_role'] == 1 ){
                header("location:../View/admin.php");
                
            }
            else{
                header("location:../View/booking.php");

            }

          
        } else {
            echo 'Invalid password.';
        }
    } else {
        echo "Email unaviable";
    }
}

?>
        
