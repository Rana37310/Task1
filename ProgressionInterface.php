<?php
// Class Description: to handle the some abstract progression functions
// Author: Rana Albedaiwi
// Date : 6/19/2024

interface ProgressionInterface
{
    // Implementation needed in subclasses to reset the progression
    public function reset();
    // Implementation needed in subclasses to print values of the progression
    public function printProgression($int);

}


?>