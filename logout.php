<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="logout.php" method="post">
<button name="logout">Logout</button>
    </form>
<?php if(isset($_POST["logout"])){

session_start();
session_unset();
session_destroy();
echo "Logout Successful";


}
  ?>



</body>

</html>