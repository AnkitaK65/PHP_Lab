<?php
/**
 * Q1: Create a PHP page using functions for comparing three integers 
 * and print the largest number.
 */

// Function to find the largest number among three
function findLargest($num1, $num2, $num3) {
    if ($num1 >= $num2 && $num1 >= $num3) {
        return $num1; // num1 is the largest
    } elseif ($num2 >= $num1 && $num2 >= $num3) {
        return $num2; // num2 is the largest
    } else {
        return $num3; // num3 is the largest
    }
}

/*
// Test values (You can modify these or take user input)
$num1 = 25;
$num2 = 78;
$num3 = 62;
*/

// Taking user input from CLI
echo "Enter the first number: ";
$num1 = (int) trim(fgets(STDIN)); // Read input and convert to integer

echo "Enter the second number: ";
$num2 = (int) trim(fgets(STDIN));

echo "Enter the third number: ";
$num3 = (int) trim(fgets(STDIN));

// Calling the function and displaying the largest number
$largest = findLargest($num1, $num2, $num3);
echo "The largest number among $num1, $num2, and $num3 is: $largest\n";


/*
Output:
Enter the first number: 76
Enter the second number: 98
Enter the third number: 12
The largest number among 76, 98, and 12 is: 98
*/

// If your file is pure PHP, closing  "? >" can be avoided 