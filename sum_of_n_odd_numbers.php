<?php
// 9. Write a PHP script that finds out the sum of first n odd numbers.

// Function to calculate the sum of first n odd numbers
function sumOfOddNumbers($n) {
    $sum = 0; // Initialize sum
    $count = 0; // Counter for counting odd numbers
    $num = 1; // Start with the first odd number

    while ($count < $n) { 
        $sum += $num; // Add the odd number to sum
        $num += 2; // Move to the next odd number
        $count++; // Increase the counter
    }
    return $sum;
}

// Taking user input from command line
echo "Enter the value of n: ";
$n = intval(trim(fgets(STDIN))); // Read input and convert it to integer

// Check if input is a valid positive integer
if ($n > 0) {
    $result = sumOfOddNumbers($n);
    echo "The sum of the first $n odd numbers is: $result\n";
} else {
    echo "Please enter a positive integer.\n";
}

/*
Sample Output:
Enter the value of n: 5
The sum of the first 5 odd numbers is: 25
(Explanation: 1 + 3 + 5 + 7 + 9 = 25)
*/
?>
