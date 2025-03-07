<?php
/**
 * Q4: Create a PHP page that accepts a string from the user.
 * After submission, the page displays the reversed string.
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse String</title>
</head>
<body>

    <h2>Reverse a String</h2>
    
    <!-- Form to accept user input -->
    <form method="POST">
        <label>Enter a String:</label>
        <input type="text" name="user_string" required>
        <button type="submit">Reverse</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputString = $_POST["user_string"]; // Get user input

        // Reverse the string using strrev() function
        $reversedString = strrev($inputString);

        // Display the reversed string
        echo "<h3>Original String: $inputString</h3>";
        echo "<h3>Reversed String: $reversedString</h3>";
    }
    ?>

</body>
</html>

<!--
Output:
php -S localhost:8000 --- server starts
http://localhost:8000/reverse_string.php
Reverse a String
Enter a String:  Hello World!   Reverse
Original String: Hello World!
Reversed String: !dlroW olleH
-->