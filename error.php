<?php

class Invoice{
    public function __construct()
    {
        // Code...
    }

    private function getBillingInfo(){
        // Code
    }

    public function process(float $amount){
        if($amount <=0)
            throw new \InvalidArgumentException("Invalid Amount! Please enter a valid amount");
        
        if(empty($this->getBillingInfo()))
            throw new \Exception("Set Billing Information First and Then Try Again...");
    }
}