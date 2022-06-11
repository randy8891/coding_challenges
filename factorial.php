<?php

/**
 * Program Name: Factorial of a number
 * Description: This is a structured program to find the factorial of a number given from the terminal.
 * Author: Randika Nonis
 * Pubished Date: 2022/06/12
 */

$x = (int)readline("Enter a number to be factorialized:");

$fact = 1;

for($i=$x; $i>0; $i--){
    $fact = $fact*$i;
}

echo "Factorial of $x is " . $fact;