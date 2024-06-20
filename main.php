<?php
// Class Description: to present the arithmetic progression
// Author: Rana Albedaiwi
// Date : 6/19/2024
/*
 What is the main difference between an abstract class and an interface in PHP?
 
  An abstract class is more flexible than an interface. This is because an abstract class allows both
  concrete and abstract functions, with various encapsulation options, while an interface requires all
  functions to be abstract and public. In the progression example, I used an abstract class to handle
  both concrete and abstract functions, which allows me to inherit these functions in the  
  ArithmeticProgression subclasses.
*/

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