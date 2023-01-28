<?php

include "conn.php";

if(isset($_POST['signup'])){

$userName = $_POST['username'];
$userEmail = $_POST['email'];
$userPassword = sha1( $_POST['password']);

$insert = "INSERT INTO USERDETAILS(userName , userEmail , userPassword) 
VALUES 
('$userName' , '$userEmail','$userPassword')";



if (mysqli_query($conn, $insert)) {
   
    echo "User Registered !";
    echo "<script>window.location.href = 'loginform.php';</script>"; 

} else 
{

    echo "<script>window.location.href = 'signupform.php';</script>"; 
    echo "sigup failed !";
}
}
