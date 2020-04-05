<?php

use PHPMailer\PHPMailer\PHPMailer;
require_once('connection.php');
require_once("PHPMailer/PHPMailer.php");
require_once("PHPMailer/Exception.php");
require_once("PHPMailer/SMTP.php");






$fullnavn = $_POST['fullname'];
$køn = $_POST['gender'];
$email = $_POST['email'];
$pwd = $_POST['password'];
$password = md5($pwd);
$token ='qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM0123456789!$/()*';
$token = str_shuffle($token);
$token = substr( $token , 0 , 10);



$sql = "INSERT INTO users (fullname, gender, email, password, emailConfirmed,token) VALUES ('$fullnavn','$køn', '$email', '$password' ,'0','$token' )";

$result = mysqli_query($conn, $sql);


if(!$result)
{
    echo "Error :" .$sql;
    
   
}else
{
  
  
  include_once "PHPMailer/PHPMailer.php";

  $mail = new PHPMailer();

  $mail->isSMTP();                                            // Send using SMTP
  $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
  $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
  $mail->Username   = 'd.parvizi1996@gmail.com';                     // SMTP username
  $mail->Password   = '';                               // SMTP password
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
  $mail->Port       = 587;  

  
  $mail ->setFrom("d.parvizi1996@gmail.com", "Dara");
  $mail ->addAddress($email , $fullnavn);
  $mail->addReplyTo('d.parvizi1996@gmail.com', "Dara");
  $mail->Subject = "Velkommen til Danpanel";
  $mail ->isHTML(true);
  
  $mail ->Body =' Hej '.$fullnavn."<br> din konto er  blevet oprettet nu og du kan logge ind på din konto nu!<br> Email aktivation linket er <br>
  <a href='http://localhost/Dara/confirm.php?email=$email&token=$token'>Klik her<a/> ";
if($mail->send()){
    echo "Email er blevet sendt";
    header("Location: Login.php");
    
}else{
    echo "Email kan ikke sendes. Mailer Error: {$mail->ErrorInfo}";
}



}


?>





 