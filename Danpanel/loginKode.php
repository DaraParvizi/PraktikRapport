<?php
require_once('connection.php');

$email = $_POST['email'];
$pws = $_POST['password'];

$password =md5($pws);

$sql = "SELECT * FROM users WHERE email='$email' AND password= '$password'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result)){
        $id = $row["id"];
        $email = $row["email"];

        session_start();

        $_SESSION["id"] = $id;
        $_SESSION['email'] = $email;
    }
    header("Location: startside.php");
}
else{
    echo "ugyldigt email eller adganskode";
}

?>