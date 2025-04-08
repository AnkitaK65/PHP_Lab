<?php
/**
 * Q8: Write a PHP script that removes all whitespaces from a string.
 *
 * Sample Input: 'The quick        brown 
 * fox'
 * Expected Output: 'Thequickbrownfox'
 */

// Function to remove all whitespace characters from a string
function removeWhitespace($str) {
    return str_replace(' ', '', preg_replace('/\s+/', ' ', $str)); // Removes all spaces, tabs, and newlines -> preg_replace(pattern, replacement, subject)
}

// Prompt user for input
echo "Enter a string: ";
$input = trim(fgets(STDIN)); // Read user input

// Remove whitespace from the string
$result = removeWhitespace($input);

// Display the modified string
echo "String after removing whitespace: " . $result . "\n";

/*
Output:
Enter a string: The quick         brown                                                                                                                                                                                   
                    fox
String after removing whitespace: Thequickbrownfox
*/
?>
