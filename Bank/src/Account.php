<?php

class LessBalanceException extends Exception {

    public function __construct($message = "", $code = 0, Throwable $previous = null) {
        $message = "Cannot withdraw Rs. " . $message . ". Account has less balance";
        parent::__construct($message, $code, $previous);
    }
}

class Account extends LessBalanceException {

    public $name;
    public $balance = 0;

    public function createAccount($name, $openingBalance) {
        if ($openingBalance < 500) {
            throw new Exception("Minimum Opening Balance is Rs. 500");
        }

        if (strlen($name) < 5) {
            throw new Exception("Enter full name");
        }

        $this->name = $name;
        $this->balance = $openingBalance;
        echo "Account Created : $name" . PHP_EOL;
    }

    public function deposit($amount) {
        $this->balance += $amount;
        echo "Rs." . $amount . " Credited in account. Updated Balance: Rs. " . $this->balance . PHP_EOL;
    }

    public function withDraw($amount) {
        if ($this->balance - $amount < 500) {
            throw new LessBalanceException($amount);
        }

        $this->balance -= $amount;
        echo "Rs." . $amount . " debited from account. Updated Balance: Rs." . $this->balance . PHP_EOL;
    }

    public function printBalance() {
        echo $this->name . "having balance" . $this->balance . PHP_EOL;
    }
}

try {
    $b = new Account();
    $b->createAccount("vibhor bhai", 5000);
    $b->withDraw(4600);
    $b->printBalance();
} catch (Exception $exception) {
    echo $exception->getMessage();
}