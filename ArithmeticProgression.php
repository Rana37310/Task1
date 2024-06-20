<?php
// Class Description: to compute the arithmetic progression
// Author: Rana Albedaiwi
// Date : 6/19/2024

require_once 'ProgressionAbstract.php';
require_once 'ProgressionInterface.php';

class ArithmeticProgression extends ProgressionAbstract implements ProgressionInterface
{
    private $increment;

     // Constructor to initialize the first and increment value
    public function __construct($increment)
    {
        parent::__construct(0);
        $this->increment = $increment;
    }

    // Returns the next value of the progression
    protected function nextValue()
    {
        $this->current += $this->increment;
        return $this->current;
    }
    // Set the increment the progression
    public function SetIncrement($int)
    {
        $this->increment=$int;
    }
    // Reset the progression
    public function reset()
    {
        $this->current = $this->first;
        echo"reset the series to start from 0! \n";
    }

    // Printing the values of the progression
    public function printProgression($number)
    {
        echo  "Incrementing series of numbers: ". $number ." by ". $this->increment. "\n";
        echo $this->firstValue() . ",";

        for ($i = 2; $i <= $number; $i++) {
          
            echo $this->nextValue();
            if($i<$number)
            echo  ",";
        }
        echo "\n";
    }
}


?>
