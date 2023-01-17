<?php

include "config.php";
$sName = $_POST['sname'];
$sGender = $_POST['sgender'];
$sContact =  $_POST['scontact'];
$sCity = $_POST['scity'];
$insertQuery = "INSERT INTO STUDENTS(studentName , studentGender ,studentContact, studentCity ) VALUES 
 ('$sName' ,'$sGender' , '$sContact','$sCity')";

if (isset($_POST['insert'])) {

    if (mysqli_query($conn, $insertQuery)) {


        echo "record insert !";
    } else {


        echo "error";
    }
}






// if (isset($_GET["fetch"])) {

//     $fetch = "SELECT * FROM STUDENTS";

//     print_r(mysqli_query($conn, $fetch));
// }
