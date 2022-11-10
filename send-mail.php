<?php
include('./php/connect.php');
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/PHPMailer.php';


$mail = new PHPMailer(true);

if (!array_key_exists('user_email', $_SESSION)) {
    echo "<script>alert('Please Log In.');</script>";
?>
    <meta http-equiv="refresh" content="0; url = http://localhost/prerna/login.php" />
<?php

} else {
    $session_mail = $_SESSION['user_email'];

    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $amount = $_POST['amount'];

    $insert_tenant = " INSERT INTO `pzp_boarder_master` (`full_name`,`phone`,`e_mail`,`address`,`age`,`amount_paid`) VALUES ('$fullname','$phone','$email','$address','$age','$amount') ";

    $run_insert_tenant = mysqli_query($conn, $insert_tenant);
    

    // get the owner email id as well

    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output 
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'yuvrajwebdev@gmail.com';                     //SMTP username
        $mail->Password   = 'sikcqhcrfqlluqeg';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('yuvrajwebdev@gmail.com', 'PG GO');          //sender mail
        $mail->addAddress($email, '$fullname');                 //recipient mail
        $mail->addAddress('ellen@example.com');               //second mail
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
    
        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Booking Successful - PG GO';
        $mail->Body    = 'Hi there, your PG booking has been successful in PG GO';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        echo "<script>alert('Message has been sent');</script>";
        ?>
        <meta http-equiv="refresh" content="0; url = http://localhost/prerna/booking-sucss.php" />
        <?php
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    
}





// while (array_key_exists('user_email', $_SESSION) == 1) {
    

//     if (isset($_POST['paynow'])) {
//         $email = $session_mail;
//         $subject = "Booking Successful - PG GO";
//         $body = "Hi there, your PG booking has been successful in PG GO";
//         $headers = "From: yuvrajwebdev@gmail.com";

//         if (mail($email, $subject, $body, $headers)) {
//             $sccsspage = "./booking_sucss.php";
//             header('location: ' . $sccsspage);
//             exit();
//         } else {
//             echo "Email send fail!";
//         }
//     }

//     break;
// }





?>