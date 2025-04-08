<?php
// 11. Write a simple PHP program to check that emails are valid

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Validate the email address
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<h3 style='color: green;'>✅ '$email' is a valid email address.</h3>";
    } else {
        echo "<h3 style='color: red;'>❌ '$email' is not a valid email address.</h3>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Email Validator</title>
</head>
<body>
    <h2>Check Email Validity</h2>
    <form method="POST">
        Enter Email: <input type="email" name="email" required>
        <input type="submit" value="Validate">
    </form>
</body>
</html>
