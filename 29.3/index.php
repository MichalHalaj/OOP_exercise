<?php

class Customer{
    public function getBillingInfo(): array {
        return $this->billingInfo();
    }
}

class Invoice{
    public function __construct(Customer $customer){

    }

    public function process(float $amount): void{
        
        if($amount < 0) {
            throw new \Exception('Invalid amount');
        }
        
        echo 'Processing $ ' . $amount . 'inovoice - ';
        sleep(1);

        echo 'OK';
    }
}



$invoice = new Invoice(new Customer());

$invoice -> process(27);

