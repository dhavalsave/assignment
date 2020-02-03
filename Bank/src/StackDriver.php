<?php

use Dystack,FixStack;
$input=100;
$input = fgets(STDIN);
while ($input!=0)
{
    echo "Enter 1 for fixed stack\n";
    echo "Enter 2 for Dynamic stack\n";
    echo "enter 0 for exit\n";
    switch ($input)
    {
        case 1:
        {
            $fixStack=new \FixStack(10);

            $fix_input=100;
            while($fix_input!=0)
            {
                echo "Enter 1 to push";
                echo "Enter 2 to pop";
                echo "Enter 3 to print srack";
                echo "Enter 0 to Exit";
                $fix_input = fgets(STDIN);
                switch ($fix_input)
                {
                    case 1:
                    {

                        echo "Enter Data \n ";
                        $item=fgets(STDIN);
                        $data=$fixStack->push($item);
                        break;
                    }
                    case 2:
                    {
                        $data=$fixStack->pop();
                        echo $data." is poped from stack";
                        break;
                    }
                    case 3:
                    {
                        $fixStack->printStack();
                        break;
                    }
                    case 0:
                    {
                        $fix_input=0;
                        break;
                    }

                }
            }
            break;
        }
        case 2:
        {
            $dyStack=new \DyStack();
            $dy_input=100;
            while($dy_input!=0)
            {
                echo "Enter 1 to push";
                echo "Enter 2 to pop";
                echo "Enter 3 to print srack";
                echo "Enter 0 to Exit";
                $dy_input = fgets(STDIN);
                switch ($dy_input)
                {
                    case 1:
                    {

                        echo "Enter Data \n ";
                        $item=fgets(STDIN);
                        $data=$dyStack->push($item);
                        break;
                    }
                    case 2:
                    {
                        $data=$dyStack->pop();
                        echo $data." is poped from stack";
                        break;
                    }
                    case 3:
                    {
                        $dyStack->printStack();
                        break;
                    }
                    case 0:
                    {
                        $dy_input=0;
                        break;
                    }

                }
            }
            break;
        }
        case 3:
        {
            $input=0;
            break;
        }
    }
}