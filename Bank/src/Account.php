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
    $input=1;
    while ($input!=4)
    {
        echo "Enter 1 for Create Account\n";
        echo "Enter 2 for Withdrow from  Account\n";
        echo "Enter 3 for Deposit in  Account\n";
        echo "Enter 4 to Exit \n";
        $input = fgets(STDIN);

        switch ($input)
        {
            case 1:
            {
                echo "Enter Name\n";
                $name=fgets(STDIN);
                echo "Enter Amount\n";
                $amount=fgets(STDIN);
                $b->createAccount($name, $amount);
                break;
            }
            case 2:
            {
                echo "Enter Amount u want to withdrow \n";
                $amount=fgets(STDIN);
                $b->withDraw($amount);
                break;
            }
            case 3:
            {
                echo "Enter Amount u want to Deposit \n";
                $amount=fgets(STDIN);
                $b->deposit($amount);
                break;
            }
            case 4:
            {
                echo "Exit...";
                $input=0;
                exit;


            }
        }
    }





} catch (Exception $exception) {
    echo $exception->getMessage();
}