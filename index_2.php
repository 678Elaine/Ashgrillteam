<?php


    use PHPMailer\PHPMailer\PHPMailer;
    function sendmail(){
        $name = "ASHGRILL";  // Name of your website or yours
        $to = $email;  // mail of reciever
        $subject = "Confirmation";
        $body = "Congratulations! You have sucessfully booked your spot at the Grill!";
        $from = "wecreategh2812@gmail.com";  // you mail
        $password = "ingcmxaqrugnwxqg";  // your mail password

        // Ignore from here

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";
        $mail = new PHPMailer();

        // To Here

        //SMTP Settings
        $mail->isSMTP();
        // $mail->SMTPDebug = 3; // Keep It commented this is used for debugging                          
        $mail->Host = "smtp.gmail.com"; // smtp address of your email
        $mail->SMTPAuth = true;
        $mail->Username = $from;
        $mail->Password = $password;
        $mail->Port = 587;  // port
        $mail->SMTPSecure = "tls";  // tls or ssl
        $mail->smtpConnect([
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            ]
        ]);

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($from, $name);
        $mail->addAddress($to); // enter email address whom you want to send
        $mail->Subject = ("$subject");
        $mail->Body = $body;
        if ($mail->send()) {
            echo "Email is sent!";
        } else {
            echo "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }
    }


        // sendmail();  // call this function when you want to

        if (isset($_GET['sendmail'])) {
            sendmail();
        }
?>


<html>
    <head>
        <title>Send Mail</title>
    </head>
    <body>
        <form method="get">
            <button type="submit" name="sendmail">sendmail</button>
        </form>
    </body>
</html>
