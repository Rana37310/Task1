<?php
// Class Description: to present the arithmetic progression
// Author: Rana Albedaiwi
// Date : 6/19/2024


require_once 'ArithmeticProgression.php';

// Initialization of the arithmetic series object with an increment of 1
$arithmetic = new ArithmeticProgression(1); 

// Calling to print the first 3 values of the progression
$arithmetic->printProgression(3); 

//Setting the increment to 5
$arithmetic->SetIncrement(5);
// Calling to print the first 4 values of the progression
$arithmetic->printProgression(4);
//Calling to reset the progression to starts with 0
$arithmetic->reset();
// Calling to print the first 7 values of the progression
$arithmetic->printProgression(7);

?>
