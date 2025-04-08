<?php
/**
 * Q6: Write a PHP script that checks whether a given string is a palindrome or not.
 * A palindrome reads the same backward as forward (e.g., madam, nurses run).
 */

function isPalindrome($str) {
    // Remove spaces and convert to lowercase for case-insensitive check
    $cleanedStr = str_replace(' ', '', strtolower($str));

    // Reverse the cleaned string
    $reversedStr = strrev($cleanedStr);

    // Check if original and reversed strings are the same
    return $cleanedStr === $reversedStr;
}

// Prompt user for input
echo "Enter a string: ";
$inputString = trim(fgets(STDIN)); // Read input from user

// Check if the string is a palindrome
if (isPalindrome($inputString)) {
    echo "The string '$inputString' is a palindrome\n";
} else {
    echo "The string '$inputString' is NOT a palindrome\n";
}

/*
Sample Output:
Enter a string: madam
The string 'madam' is a palindrome
Enter a string: Nurses Run
The string 'Nurses Run' is a palindrome
Enter a string: abcda
The string 'abcda' is NOT a palindrome
*/
?>
