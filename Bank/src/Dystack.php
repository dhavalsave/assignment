<?php


class Dystack implements StackOprations
{
    // private $size;
    private $stack = array();



    public function push($item)
    {
        // TODO: Implement push() method.
        array_push($this->stack,$item);

    }

    public function pop()
    {
        // TODO: Implement pop() method.
        if ($this->isEmpty())
        {
            throw new RunTimeException('Stack is empty........');
        }
        else
        {
            return array_pop($this->stack);
        }
    }

    public function printStack()
    {
        // TODO: Implement print() method.
        print_r($this->stack);
    }
}