<?php



class LessBalanceException extends Exception
{
    public function errorMessage($amount)
    {
        return "having balance less than Rs.".$amount;
    }
}