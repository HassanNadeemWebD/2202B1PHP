<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
</head>

<body>
    <div class="container mt-3">
        <h2>Sign Up</h2>
        <form action="signup.php" method="post">
            <div class="mb-3 mt-3">
                <label for="email">User Name</label>
                <input type="Text" class="form-control" id="email" placeholder="Enter User Name" name="username">
            </div>
            <div class="mb-3 mt-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
            </div>

            <button type="submit" name="signup" class="btn btn-primary">ADD USER</button>
        </form>
    </div>

</body>


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
   
    echo "User Added !";
    echo "<script>window.location.href = 'loginform.php';</script>"; 

} else 
{

    echo "<script>window.location.href = 'signupform.php';</script>"; 
    echo "sigup failed !";
}
}



?>

</html>