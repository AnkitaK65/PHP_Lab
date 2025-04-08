<?php
/**
 * Q7: Write a PHP script to sort an array.
 * The user will input an array of numbers, and the program will sort it in ascending order.
 */

function sortArray($arr) {
    sort($arr); // Sorts the array in ascending order
    return $arr;
}

// Prompt user for input
echo "Enter numbers separated by spaces: ";
$input = trim(fgets(STDIN)); // Read input from user

// Convert input string into an array
$numbers = array_map('intval', explode(' ', $input)); // Convert string elements to integers

// Sort the array
$sortedNumbers = sortArray($numbers);

// Display the sorted array
echo "Sorted array: " . implode(' ', $sortedNumbers) . "\n";

/*
Output:
Enter numbers separated by spaces: 34 65 09 12 65 8 34 
Sorted array: 8 9 12 34 34 65 65
*/
?>
