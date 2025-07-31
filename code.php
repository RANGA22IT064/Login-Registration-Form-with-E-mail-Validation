<?php
session_start();
include('dbcon.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';
function sendmail_verify($name,$email,$verify_token)
{
            $mail = new PHPMailer(true);
            //$mail->SMTPDebug= 3;
            $mail->isSMTP();      
            $mail->SMTPAuth   = true;                                           
            $mail->Host       = 'smtp.gmail.com';                     
                                    
            $mail->Username   = 'ranganathan22it064@gmail.com';                    
            $mail->Password   = 'kedj isdy fxqx haqx';                               
            $mail->SMTPSecure = "tls";            
            $mail->Port       = 587;                                   
            $mail->setFrom("ranganathan22it064@gmail.com", $name);
            $mail->addAddress($email);     
        
    
            $mail->isHTML(true);                                 
            $mail->Subject = 'To Verify Your Email';
            $email_template="
                <h1> To click tha link to verify your account <h1>
                <br/>
                <a href='http://localhost/JOY/verify-email.php?token=$verify_token'>Clich Here </a>
            ";
            $mail->Body = $email_template;
            $mail->send();
            //echo 'Message has been sent';
    
            
        

}

if(isset($_POST["register_btn"]))
{
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $verify_token= md5(rand());

    $check_email_query ="SELECT email FROM user WHERE email='$email' LIMIT 1";
    $check_email_query_run = mysqli_query($con, $check_email_query);

    if(mysqli_num_rows($check_email_query_run) >0)
    {
        $_SESSION['status'] = "Email is already exist";
        header("Location: register.php");

    }
    else
    {
        $query ="INSERT INTO user(name,phone,email,password,verify_token) VALUES ('$name','$phone','$email','$password','$verify_token')";
        $query_run = mysqli_query($con, $query);

        if($query_run)
        {
            sendmail_verify("$name","$email","$verify_token");
            $_SESSION['status'] = "Registration Success..! Please verify your Email";
            header("Location: register.php");
    

        }
        else
        {

            $_SESSION['status'] = "Registration Failed";
            header("Location: register.php");

        }
    }
    

}
?>