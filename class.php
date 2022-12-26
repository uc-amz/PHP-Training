<?php

// Working on class and object.
declare(strict_types=1);

use transact\Transaction as TransactTransaction;
use Transaction as GlobalTransaction;

abstract class Money{
    // All your properties and methods goes here.
    public function __construct(private int $x)
    {
        // Constructor code Here...
    }

    // Abstract Function declaration.
    abstract public function send();
}

// Ananomous class
$obj2 = new class {
    // Class code here...
};

class Transaction extends Money
{
    private float $amount;
    private string $description;

    // Class Constant
    public const STATUS_PAID = "PAID";
    public const STATUS_PENDING = "PENDING";
    public const STATUS_DONE = "DONE";

    // Static member variable and function

    public static function static_function_name(){
        // Your  Code Goes here.
    }

    public static int $count = 0;
    public static string $status = "Pending";

    public function __construct()
    {
        $this->amount = 0;
        $this->description = '';
    }
    public function __destruct()
    {
        // This is destructor.
    }

    // You can define multiple functions inside a class.
    public function setValues(float $amount, string $description){
        $this->amount = $amount;
        $this->description = $description;
    }
    public function getAmount(){
        return $this->amount;
    }
    public function getDescription(){
        return $this->description;
    }

    // Implementing Abstract method.
    public function send()
    {
        // Code goes here...
    }


    // You can also define ananomous class inside a class

    public $anomobj = new class {
        // Class code here...
    };
}

class Child extends Transaction{

    // Here your child class code...
    public static function childfun(){
        self::$count++;
    echo self::$count;
    }
}

// Creating object.
$obj1 = new Transaction();

$obj1->setValues(15, "Transaction 1");
echo $obj1->getAmount();
echo "<br>";


// Accessing class constant.
echo Transaction::STATUS_PAID;

echo "<br>";

echo Transaction::STATUS_DONE;

echo "<br>";
echo Transaction::STATUS_PENDING;

// Accessing static variable.
echo "<br>";
echo Transaction::$count;
echo Transaction::static_function_name();

echo "<br>";
echo Child::childfun();