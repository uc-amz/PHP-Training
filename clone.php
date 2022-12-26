<?php

class Transaction{
    private string $id;

    public function getId(){
        return $this->id;
    }

    public function setId(){
        $this->id = uniqid('uc_');
    }

    public function __clone()
    {
        // This function is invoked when a clone of the object is created.
        $this->setId();
    }
}

// creating object:-
$obj = new Transaction;
$obj->setId();
echo $obj->getId();

// cloning this object.
$cloneobj = clone $obj;
echo $cloneobj->getId();