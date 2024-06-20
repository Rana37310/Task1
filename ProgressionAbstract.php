<?php
// Class Description: to handle the some  progression functions
// Author: Rana Albedaiwi
// Date : 6/19/2024

abstract class ProgressionAbstract
{
    
    protected $first;
    protected $current;

    // Constructor to initialize the first value
    public function __construct($first)
    {
        $this->first = $first;
        $this->current = $first;
    }

    // Returns the first value of the progression
    protected function firstValue()
    {
        return $this->current;
    } 
    // Implementation needed in subclasses to compute the next value of the progression
    abstract protected function nextValue();
}
?>
