<?php


$num = -1;
$divide = 10/ $num;



try{

if($num >= 0){


    echo $divide;



}else{

throw new Exception("Invalid Number");
echo "Else Block";

}

}
catch(Exception $e ){

echo $e->getMessage();
echo $e->getLine();
echo $e->getFile();


}finally{

echo "Finally Try catch ends !";



}


