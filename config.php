<?php
// include 'header.php';
$localhost = "localhost";
$username = "root";
$password = "";
$db = "class";
$conn = mysqli_connect($localhost, $username, $password, $db);
// echo "<pre>";

// print_r($conn);
// echo "</pre>";
if ($conn) {



    echo "connection established !";
} else {


    echo "error";
}

// $name = $_POST["fname"];

// $query = `insert into students(studentName,studentGender,studentContact,studentCity) values 
// ($name , "Male" , "03102659874","Khi")`;

// if(mysqli_query($conn , $query)){


// echo "Record Inserted !";


// }else{
// echo "error";
// }
