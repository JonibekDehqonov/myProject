<?php
// include 'contact.php';
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
//Create an instance; passing `true` enables exceptions
if (isset($_POST['submitContact']))
{
    print_r($_POST);

    // echo '<p>assalom</p>';
    $name=$_POST['name'];
    $gmail=$_POST['gmail'];
    $password=$_POST['pass'];
    $pass=random_int(1000,9999);
    $mail = new PHPMailer(true);

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->Username   = 'dehqonovjonibek22@gmail.com';                     //SMTP username
        $mail->Password   = 'hueflqrabuujijrm';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //ENCRYPTION_SMTPS 465->Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('dehqonovjonibek22@gmail.com', 'Smartfon.tj');
        // $mail->addAddress('joe@example.net', 'Smartfon.tj');     //Add a recipient

        $mail->addAddress($gmail);               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Smartfon.tj';
        $mail->Body    = '<h1>Ассалому алайкум '."$name".' </h1
            <h2>'."$pass".'</h2>';

        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
       
        // echo 'Message has been sent';

        if($mail->send())
        {
            $_SESSION['status']="Smartfon.tj";
            header("location: {$_SERVER["HTTP_REFERER"]}");
    exit(0);    
        }
        else
        {
            $_SESSION['status']="Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            header("location: {$_SERVER["HTTP_REFERER"]}");
    exit(0);
        }


         
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
else{
    header('location: index.php');
    exit(0);
}
?>