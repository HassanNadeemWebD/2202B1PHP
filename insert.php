<?php

include "config.php";
$sName = $_POST['sname'];
$sGender = $_POST['sgender'];
$sContact =  $_POST['scontact'];
$sCity = $_POST['scity'];
$fileName = $_FILES['spicture']['name'];
$tmpName = $_FILES['spicture']['tmp_name'];
// $sCity = $_POST['scity'];
// if (isset($_FILES['spicture'])) {

//     // print_r($_FILES['pic']);

//     $fileName = $_FILES['spicture']['name'];
//     $tmpName = $_FILES['spicture']['tmp_name'];
//     // echo $fileName;

//     if (move_uploaded_file($tmpName, "uploads/" . $fileName)) {



//     } else {

//         echo "error";
//     }
// }

$insertQuery = "INSERT INTO `users`( `userName`, `Gender`, `userContact`, `City`, `Picture`) VALUES 
 ('$sName' ,'$sGender' , '$sContact','$sCity','$fileName')";

if (isset($_POST['insert'])) {

    if (mysqli_query($conn, $insertQuery)) {
        move_uploaded_file($tmpName, "uploads/" . $fileName);

        echo "record insert !";
    } else {


        echo "error";
    }
}






// if (isset($_GET["fetch"])) {

//     $fetch = "SELECT * FROM STUDENTS";

//     print_r(mysqli_query($conn, $fetch));
// }
