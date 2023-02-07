<?php

// Parent or Base Class
class Vehicles
{

    private $company;
    protected $name, $model, $engine;


    function __construct($name, $model, $company, $engine)
    {
        echo "Vehicles Constructor";
        $this->name = $name;
        $this->model = $model;
        $this->company = $company;
        $this->engine = $engine;
    }



    function getCompany()
    {


        echo "<br>" . $this->company . "<br>";
    }
}


// Child or Derived Class 

class Aircraft extends Vehicles
{
    public  $capacity, $crewMembers;

    function storeData($capacity, $crewMembers)
    {


        $this->capacity = $capacity;
        $this->crewMembers = $crewMembers;
    }

    function getData()
    {
        echo "<h1> Aircraft Info </h1>";
        echo "Name " . $this->name  . "<br>";
        echo  "Model " . $this->model  . "<br>";
        echo "Company" .  $this->company . "<br>";
        echo "Engine " . $this->engine . "<br>";
        echo  "Capacity " .    $this->capacity . "<br>";
        echo "Crew Members " .  $this->crewMembers . "<br>";
    }
}









$v1 = new Vehicles("Honda 125", "2020", "honda", "125CC");
$v1->getCompany();
$a1 = new Aircraft("PIA", "1990", "Pakistan Air", "IDK");

$a1->storeData("360", "10");
$a1->getData();

// echo $v1->name;
// print_r($v1);
