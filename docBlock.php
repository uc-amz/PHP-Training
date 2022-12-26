<?php

// This is a single line comment.


/*
    This is 
    a multi line
    comment.
*/


// Using docblock comments:-

class Customer{
    // Class Code here...
}

class Transaction{

    /**
     * Here you can write some description.
     * This is a DocBlock comment.
     * @param Customer $cust
     * @param float $amount
     * 
     * @return bool 
     */

    public function process(Customer $cust, float $amount){
        // Process Transaction.

        // If transaction fails return false

        // If transaction success return true.
    }
}