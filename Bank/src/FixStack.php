<?php

interface StackOprations
{
    public function push($item);

    public function pop();

    public function printStack();

}

class FixStack implements StackOprations
{
    private $size;
    private $stack = array();

    public function __construct($size)
    {
        $this->size = $size;

    }

    public function push($item)
    {
        // TODO: Implement push() method.

        if (count($this->stack) < $this->size) {

            array_unshift($this->stack, $item);
            return $this->stack;
        } else {
            throw new RunTimeException('Stack is full........');
        }

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
            return array_shift($this->stack);
        }
    }

    public function printStack()
    {
        // TODO: Implement print() method.
        print_r($this->stack);
    }
}

