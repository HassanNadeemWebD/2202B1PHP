<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP</title>
</head>

<body>


<?php  print_r($_COOKIE['user'])  ?>
    <!-- <h2> Username : <?php

                    echo $_POST["fname"] . $_POST["lname"] . $_POST["gender"];
                    // echo $_GET["fname"].$_GET["lname"].$_GET["gender"];



                    ?> </h2> -->


    <h2>
        <?php
        $Num1 = $_POST['fnum'];
        $Num2 = $_POST['snum'];
        $op = $_POST['op'];
        switch ($op) {
            case 'add':
                echo "Sum of $Num1 and $Num2 = " . $Num1 + $Num2;
                break;
            case 'sub':
                echo "Sub of $Num1 and $Num2 = " . $Num2 - $Num1;
                break;

            default:
                echo "invalid operator name";
                break;
        }
        ?>
    </h2>
    <h1>PHP Operators</h1>


</body>

</html>


<?php



// define("pi" , 3.142);
// $firstName = 10236;
// $lastName = "Hasan";

// echo "Rameez  "  , " Hasan";
// echo "<br/>";
// echo "Hello World";
// print $firstName . $lastName;   

// $modulus = 17 % 2;
// echo "<br/>";
// // echo $modulus;

$age = 17;

//  $true =  "True";
//  $false = "False";

// $res =  ($age == "18")? "true"  : "false";

// echo $res;
// $age.= "abc";
// echo $age;

// if($age == "18"){echo "True";}else{echo "False";}
// echo 21-4*4;

// echo "<br/>" , pi;
$gender = "ale";
function hello()
{
    static $var1 = 1;
    ++$var1;
    echo $var1 . "<br>";
}

if ($age >= 18) {


    echo "Eligible";
} else if ($gender == "Male") {

    echo " Gender Eligible ";
} else {

    echo "not eligible";
}

$day = 12365;
switch ($day) {
    case 0:
        echo "Sunday";
        break;

    case 1:
        echo "Monday";





        break;

    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    default:
        echo "Invalid";
        break;
}

echo "<br>";

// echo var_dump($day);


// echo $var1;
// hello();

// hello();
// hello();


// Loops

// for ($i=10; $i >=1 ; $i--) { 
// echo $i;
// echo "<br>";
// }

$j = 11;
// while($j <= 1000){

//     echo $j;
//     echo "<br>";
// $j += 2;

// }

// echo 81 % 2 ;
// for ($num = 1; $num <=10; $num++) {


// }

do {

    echo $j;
    echo "<br/>";

    $j++;
} while ($j <= 10);

$userInput = readline("Enter Your Name");

$arr = ["Apple", "mango", "banana", "Pineapple", "Grapes"];
$assArray = ["name" => "Umer", "grade" => "A", "GPA" => 3.2];
// echo $arr[0];
// echo $arr[1];
// echo $arr[2];
// echo $arr[3];
// echo $assArray["grade"];
// echo "<pre>";
// print_r($assArray);
// // print_r($arr);
// echo "<pre/>";
echo "<ul>";

foreach ($arr as $value) {
    // echo "<br/>"; 
    echo "<li>" . $value . "</li>";
    # code...
}
echo "</ul>";

// foreach ($assArray as $key => $value) {
//     // echo "<br/>"; 
//     echo $key. " =>" . $value;
//     # code...
// }

$multiArr = [
    "student1" => ["Hassan", "male", "2202B1"],
    "student2" => ["Rameez", "male", "2204C1"],
    "student3" => ["Hunain", "male", "2203B1"],
    "student4" => ["Maryam", "female", "2206B1"]
];


echo "<h1>" . $multiArr["student2"][0] . "</h1>";
echo "<table border= 1 cellpadding=15 >";

echo "<th>" . "Keys" . "</th>";
echo "<th>" . "Name" . "</th>";
echo "<th>" . "Gender" . "</th>";
echo "<th>" . "Batch" . "</th>";

foreach ($multiArr as $key => $value) {
    echo "<tr>";
    echo "<th>" . $key . "</th>";
    foreach ($value as $val) {

        echo "<td>" . $val . "</td>";
    }

    echo "</tr>";
    // echo $value[0];
}

echo "</table>"



?>