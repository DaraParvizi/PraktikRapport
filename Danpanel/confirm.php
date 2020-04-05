<?php
require_once('connection.php');



$email = $_GET['email'];
$token = $_GET['token'];

$sql = " SELECT id FROM users WHERE email='$email' AND token='$token' AND emailConfirmed=0 ";

$result = mysqli_query($conn, $sql);

if(!$result){
    header("Login.php");
    exit();
}else{
    if(mysqli_num_rows($result) > 0){
        $sql = " UPDATE users SET emailConfirmed=1 , token='' WHERE email='$email'";
       
        echo "din email er blevet verified!";
       
    }
    else{
        header("Login.php");
    }
}

?>