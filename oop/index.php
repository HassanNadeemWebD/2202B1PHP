<?php

class Car
{

    protected $name, $model, $company, $color;

    // function  set_data($Name, $model, $company, $color)
    // {

    //     $this->name = $Name;
    //     $this->model = $model;
    //     $this->company = $company;
    //     $this->color = $color;
    // }

    function getData()
    {

        echo $this->name . "<br>";
        echo $this->model . "<br>";
        echo $this->company . "<br>";
        echo  $this->color . "<br>";
    }


    function __construct($Name, $model, $company, $color)
    {

        $this->name = $Name;
        $this->model = $model;
        $this->company = $company;
        $this->color = $color;
    }

    function __destruct()
    {
        echo "Destruct Function";
    }
}



// $alto = new Car();
// $alto->set_data("Alto", "2021", "Suzuki", "Red");
// $alto->getData();
// $alto->name = "Alto";
// $alto->model = "2021";
// $alto->company = "Suzuki";
// $alto->color = "red";

// echo $alto->name;
// echo "<pre>";
// print_r($alto);
// echo "</pre>";




// $civic = new Car();

// $civic->name = "Civic";
// $civic->set_data("Civic", "2021", "Honda", "black");

// echo $civic->name;
// print_r($civic);

// $civic->getData();

$mehran = new Car("Mehran", "1999", "Suzuki", "grey");

$mehran->getData();
$mehran->getData();
$mehran->getData();

$mehran->getData();
$mehran->getData();


var_dump($mehran instanceof Car);
