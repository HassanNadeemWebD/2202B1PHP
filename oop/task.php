<!-- 3.	Create a class called "BankAccount" that has properties for the account balance and owner. 
Add methods for depositing and withdrawing money from the account.
 -->
<?php

class BankAccount
{
    public $balance = 0, $owner;


    function __construct($owner)
    {
        $this->owner = $owner;
    }

    function deposite($deposite)
    {
        $this->balance += $deposite;
    }
    function withdraw($withdraw)
    {


        $this->balance -= $withdraw;
    }


    function getBalance()
    {

        echo $this->balance;
    }
}

$Moiz = new  BankAccount("Moiz");

$Moiz->deposite(5000);

// $Moiz->getBalance();

$Moiz->withdraw(1500);
$Moiz->getBalance();






?>