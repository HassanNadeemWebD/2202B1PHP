<?php 
session_start();

include "conn.php";
//  echo $GLOBALS[$row];




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body><form action="logout.php" method="post">

<button type="submit" name="logout">logout</button>
</form>

    <h1>
        welcome <?php echo $_SESSION['user'] ?>
         

    </h1>
</body>

</html>