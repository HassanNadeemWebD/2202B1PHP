<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  print_r($_COOKIE['user'])  ?>

<!-- <button  >Enter User Name</button> -->
    <h1></h1>
</body>
</html>
<?php
// echo "Hello <br>";

// function welcome($username , $age){

// echo "WELCOME !  $username Age is  $age <br>";


// }

// $a = -14;
// echo abs($a);
// welcome("Hunain",17);
// welcome("Saif" , 20);
// // welcome();
// // welcome();
// // welcome();

// function calculate($num1 , $num2){

// echo "Addition is  " . $num1 + $num2 . "<br>";
// echo "Multiplication is  " . $num1 * $num2 ;


// }



// calculate(6 , 50);

// Pre-Defined Functions 
// Array Functions
$arr = ["a"=>"Apple" , "b"=>"Banana" , "p"=>"Pineapple" , "g" => "Grapes","t"=>"tomato"];
$arr2 = [1 , 2 , 3 ,4];
// print_r( array_change_key_case($arr , CASE_UPPER));

// array_combine($arr , $arr2);
echo "<pre>";
// print_r(array_combine($arr , $arr2));
// print_r(array_chunk($arr,3));
function cube($n)
{
    return ($n * $n * $n);
}

$a = [1, 2, 3, 4, 5];

$b = array_map('cube', $a);
print_r($b);



echo "</pre>";




?>