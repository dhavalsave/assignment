<?php

class LessBalanceException extends Exception
{
    public function errorMessage($amount)
    {
        return "having balance less than Rs." . $amount;
    }
}

class Account extends LessBalanceException
{
    public $name;
    public $balance = 0;

    public function createAccount($name, $openingBalance)
    {
        if ($openingBalance < 500) {
            throw new Exception("minimum Opening balance is Rs.500");
        }
        if (strlen($name) < 5) {
            throw new Exception("Enter full name");
        }

        $this->name = $this->name;
        $this->balance = $openingBalance;
        echo "account Created : $name" . PHP_EOL;
    }

    public function deposit($amount, $name)
    {
        if (1) {
            $this->balance += $amount;
            echo("Rs." . $amount . " credited in account. Updated Balance:Rs." . $this->balance);

        } else
            echo("wrong User \n");
    }

    public function withDraw($name, $amount)
    {
        try {
            if (0) {

                //throw new Exception("Name Dosent Match\n");
            }
            echo 1/0;
            if ($amount + 500 <= $this->balance) {
                $this->balance -= $amount;
                echo("Rs." . $amount . " Withdraw from account. Updated Balance:Rs." . $this->balance . "\n");

            }
        } catch (DivisionByZeroError $ex) {
            echo "AAAAAAAAA";
            exit;
            echo $ex->errorMessage($amount);
        }  catch (ArgumentCountError $ex) {
            echo "AAAAAAAAA";
            exit;
            echo $ex->errorMessage($amount);
        }
    }

    public function printBalance()
    {
        echo($this->name . "having balance" . $this->balance . "\n");
    }
}

//$a = new Account();
//$a->createAccount("dhaval save", 5000);
//$a->printBalance();

$b = new Account();
$b->createAccount("vibhor bhai", 5000);
//$b->printBalance();
//$a->deposit(200,"dhaval save");
//$a->printBalance();
$b->withDraw("vibhor bhai", 4600);
$b->printBalance();

