<?php

declare(strict_types=1);

require_once "Transaction.php";

$transaction = (new Transaction(100, "description 1"))
->addTax(8)
->aplyDiscount(10);

$amount = $transaction->getAmount();

var_dump($amount);