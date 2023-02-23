<?php

interface CrudApp
{

    function create();
    function read();
    function update();
    function delete();
}
abstract  class Book
{

    public $name, $pages, $author, $price;


    function show()
    {

        echo  $this->name;
        echo  $this->pages;
        echo  $this->author;
        echo  $this->price;
    }

    function __construct($name, $pages, $author, $price)
    {

        $this->name =  $name;
        $this->pages = $pages;
        $this->author = $author;
        $this->price = $price;
    }

    protected abstract function abs();
}



class Horror extends Book
{
    function abs()
    {

        echo "Horror Book";
    }
}


class User implements CrudApp
{


    function create()
    {

        echo "Create Record";
    }
    function read()
    {

        echo "Read";
    }
    function update()
    {

        echo "update";
    }
    function delete(){

        echo "delete";
    }


function all()
{
   $this->create(); 
   $this->read(); 
   $this->update(); 
   $this->delete(); 
}

}



// $b1 = new Horror("Ajab Kahani","150","Hunain",550);

// $b1->name = "Hello";

// echo  $b1->name;

// $b1->abs();

// $b1->show();
$u1 = new User();
$u1->all();

class Animal{
    static $animalName;
}




 Animal :: $animalName = "Hen";

echo  Animal :: $animalName;

$a1 = new Animal();
Animal :: $animalName = "Tiger";
echo  Animal :: $animalName;


echo  Animal :: $animalName;

 ?>