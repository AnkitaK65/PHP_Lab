<?php
/**
 * Q2: Write a function to calculate the factorial of a number (non-negative integer).
 * The function should accept the number as an argument and return the factorial.
 */

// Function to calculate factorial
function factorial($num) {
    // Check if the number is negative
    if ($num < 0) {
        return "Factorial is not defined for negative numbers.";
    }

    // Base case: factorial of 0 is 1
    if ($num == 0) {
        return 1;
    }

    $result = 1; // Initialize result variable

    // Loop to calculate factorial
    for ($i = 1; $i <= $num; $i++) {
        $result *= $i; // Multiply result with current number
    }

    return $result; // Return final factorial value
}

// Test values
//$testNumber = 5;

// Taking user input from CLI
echo "Enter a non-negative integer: ";
$testNumber = trim(fgets(STDIN)); // Read input and remove extra spaces

$factorialValue = factorial($testNumber);

// Displaying the result
echo "The factorial of $testNumber is: $factorialValue\n";

// ? >
/*
Expected Output:
The factorial of 5 is: 120

Enter a non-negative integer: 4
The factorial of 4 is: 24
*/