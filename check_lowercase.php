<?php
/**
 * Q5: Write a PHP function that checks if a string is all lowercase.
 */

function isAllLowerCase($str) {
    return ctype_lower(str_replace(' ', '', $str)); // Removes spaces and checks only letters
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Lowercase String</title>
</head>
<body>

    <h2>Check if String is All Lowercase</h2>

    <!-- Form to accept user input -->
    <form method="POST">
        <label>Enter a String:</label>
        <input type="text" name="user_string" required>
        <button type="submit">Check</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputString = $_POST["user_string"]; // Get user input
        
        // Check if the string is all lowercase
        if (isAllLowerCase($inputString)) {
            echo "<h3>The string '$inputString' is all lowercase ✅</h3>";
        } else {
            echo "<h3>The string '$inputString' is NOT all lowercase ❌</h3>";
        }
    }
    ?>

</body>
</html>

<!--
Check if String is All Lowercase
Enter a String: i am all lower case  Check
The string 'i am all lower case' is all lowercase ✅
-->