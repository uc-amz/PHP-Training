<?php

// Working on class and object.
declare(strict_types=1);

class Transaction
{
    private float $amount;
    private string $description;

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
}

// Creating object.
$obj1 = new Transaction();

$obj1->setValues(15, "Transaction 1");
echo $obj1->getAmount();