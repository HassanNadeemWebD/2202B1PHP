<?php
// $cookieName = "user";
// $cookieValue = "umer";
// setcookie($cookieName, $cookieValue, time() + 3600, "/");
// setcookie($cookieName, $cookieValue, time() - 3600, "/");
session_start();
$_SESSION["name"] = "Umer";
$_SESSION["email"] = "umer@gmail.com"


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h2 style="text-align: center"> User :
        <?php

// echo $_SESSION["name"]


        // if (isset($_COOKIE["user"])) {
        //     echo $_COOKIE["user"];
        // } else {

        //     echo "Cookie is not set";
        // }

        ?>
    </h2>





</body>

</html>