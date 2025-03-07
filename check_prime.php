<?php
/**
 * Q3: Write a PHP program to check whether a given number is prime or not.
 * The program should take user input and check if the number is prime.
 */

// Function to check if a number is prime
function isPrime($num) {
    // Negative numbers, 0, and 1 are not prime
    if ($num < 2) {
        return false;
    }

    // Check divisibility from 2 to sqrt($num)
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false; // If divisible, it's not prime
        }
    }
    
    return true; // If no divisors found, it's prime
}

// Taking user input from CLI
echo "Enter a positive integer: ";
$input = trim(fgets(STDIN)); // Read input and remove extra spaces

// Validate input: Ensure it's a positive integer
if (!is_numeric($input) || $input < 1 || strpos($input, '.') !== false) {
    echo "Invalid input! Please enter a positive integer.\n";
} else {
    $input = (int) $input; // Convert to integer
    if (isPrime($input)) {
        echo "$input is a Prime number.\n";
    } else {
        echo "$input is NOT a Prime number.\n";
    }
}
//? >
/*
Example Runs & Outputs:

Enter a positive integer: 7
7 is a Prime number.

Enter a positive integer: 10
10 is NOT a Prime number.

Enter a positive integer: -5
Invalid input! Please enter a positive integer.

Enter a positive integer: 3.5
Invalid input! Please enter a positive integer.
*/
