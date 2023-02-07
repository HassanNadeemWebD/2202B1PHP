<?php


class Employee{
    public $employeeId, $employeeName, $employeeSalary, $employeeDept;


    // function set_data($id, $name, $salary, $dept){
    //     $this->employeeId = $id;
    //     $this->employeeName = $name;
    //     $this->employeeSalary = $salary;
    //     $this->employeeDept = $dept;

    // }

    function get_data(){
        echo $this->employeeId . "<br>";
        echo $this->employeeName . "<br>";
        echo $this->employeeSalary . "<br>";
        echo $this->employeeDept . "<br>";
    }

    function __construct($id, $name, $salary, $dept){
        $this->employeeId = $id;
        $this->employeeName = $name;
        $this->employeeSalary = $salary;
        $this->employeeDept = $dept;

    }

    function __destruct(){
        echo 'destruction';
    }
}

// $ahmed = new Employee();
// $ahmed -> set_data(1, 'ahmed', 50000, 'sales');


$mohammad = new Employee(2, 'mohammad', 60000, 'marketing');
$osija = new Employee(3, 'osija', 80000, 'finance');
print_r($mohammad);

// print_r($ahmed);

// $ahmed->get_data();





?>