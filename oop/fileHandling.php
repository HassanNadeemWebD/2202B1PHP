<?php

// $readfile = readfile("new.txt");
$fopen =  fopen("new1.txt" , "r+");
// echo fread($fopen, filesize("new.txt"));
// echo  fgetc($fopen);
// echo fread($fopen, filesize("new.txt"));

fwrite($fopen , "akdjahdajkdhadkasdhakldahdklas");

// fclose($fopen);




?>