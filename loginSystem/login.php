<?php

include "conn.php";
session_start();
if (isset($_POST['login'])) {

    $useremail = $_POST['email'];
    $password = $_POST['password'];

    $login = "SELECT * FROM USERDETAILS WHERE userEmail = '$useremail' AND  userPassword = '$password' ";

    $data = mysqli_query($conn, $login);
    $row = mysqli_fetch_assoc($data);
    // $userID = $row['UserID']
    $userName = $row['userName'];




    if ($row == 0) {

        echo "Login Failed";

    echo "<script>window.location.href = 'loginform.php';</script>";
        
        
    }else{
    $_SESSION['user'] = $userName;


    echo "<script>window.location.href = 'profile.php';</script>";
}
}
