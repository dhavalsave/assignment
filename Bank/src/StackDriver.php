<?php

interface StackOprations
{
    public function push($item);

    public function pop();

    public function printStack();

}

class StackDriver
{
    public function callFixStack()
    {  $fixStack=new FixStack(10);
       $fix_input=100;
        while ($fix_input != 0) {

            echo "Enter 1 to push\n";
            echo "Enter 2 to pop\n";
            echo "Enter 3 to print srack\n";
            echo "Enter 0 to Exit\n";
            $fix_input = fgets(STDIN);
            switch ($fix_input) {
                case 1:
                {

                    echo "Enter Data \n ";
                    $item = fgets(STDIN);
                    $data = $fixStack->push($item);
                    break;
                }
                case 2:
                {
                    $data = $fixStack->pop();
                    echo $data . " is poped from stack \n";
                    break;
                }
                case 3:
                {
                    $fixStack->printStack();
                    break;
                }
                case 0:
                {
                    $fix_input = 0;
                    break;
                }
                default:
                {
                    if ($fix_input==0)
                    {
                        break;
                    }
                }

            }


        }
        return;
    }

    public function DynamicStack()
    {
        $dyStack = new DyStack();
        $dy_input = 100;
        while ($dy_input != 0) {
            echo "Enter 1 to push\n";
            echo "Enter 2 to pop\n";
            echo "Enter 3 to print stack\n";
            echo "Enter 0 to Exit\n";
            $dy_input = fgets(STDIN);
            switch ($dy_input) {
                case 1:
                {

                    echo "Enter Data \n ";
                    $item = fgets(STDIN);
                    $data = $dyStack->push($item);
                    break;
                }
                case 2:
                {
                    $data = $dyStack->pop();
                    echo $data . " is poped from stack";
                    break;
                }
                case 3:
                {
                    $dyStack->printStack();
                    break;
                }
                case 0:
                {
                    $dy_input = 0;
                    break;
                    return;
                }

            }
        }
    }
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
        $size=sizeof($this->stack);
        if ($size<=0) {
            throw new RunTimeException('Stack is empty........');
        } else {
            return array_shift($this->stack);
        }
    }

    public function printStack()
    {
        // TODO: Implement print() method.
        print_r($this->stack);
    }
}


class Dystack implements StackOprations
{
    // private $size;
    private $stack = array();


    public function push($item)
    {
        // TODO: Implement push() method.
        array_push($this->stack, $item);

    }

    public function pop()
    {
        // TODO: Implement pop() method.
        $size=sizeof($this->stack);
        if ($size<=0)  {
            throw new RunTimeException('Stack is empty........');
        } else {
            return array_pop($this->stack);
        }
    }

    public function printStack()
    {
        // TODO: Implement print() method.
        print_r($this->stack);
    }
}
$objDriver=new StackDriver();
$input = 123;
while ($input != 0) {

    echo "Enter 1 for fixed stack\n";
    echo "Enter 2 for Dynamic stack\n";
    echo "enter 0 for exit\n";

    $input = fgets(STDIN);


    //    echo "Enter 1 for fixed stack\n";
//    echo "Enter 2 for Dynamic stack\n";
//    echo "enter 0 for exit\n";

    switch ($input) {
        case 1:
        {
           $objDriver->callFixStack();
            break;
        }
        case 2:
        {
           $objDriver->DynamicStack();
            break;
        }
        case 0:
        {
            $input = 0;
            ldap_list();
           exit();
        }
    }
}