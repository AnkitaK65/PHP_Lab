<?php
// 10. Create a login page having user name and password.
// On clicking submit, a welcome message should be displayed if the user is already registered (i.e. name is present in the database)
// otherwise, an error message should be displayed.

/*
  Setup Instructions to Run this PHP + MySQL Script Without XAMPP:

  1. Install PHP (Windows):
     - Download from https://windows.php.net/download
     - Choose "Thread Safe" ZIP version, extract to C:\php
     - Add C:\php to the system PATH environment variable

  2. Install MySQL Server:
     - Download MySQL Installer from https://dev.mysql.com/downloads/mysql/
     - Install "MySQL Server" and set root password
     - Add MySQL's 'bin' folder to PATH (e.g., C:\Program Files\MySQL\MySQL Server 8.0\bin)

  3. Configure PHP to enable MySQL extensions:
     - In C:\php\php.ini (or rename php.ini-development to php.ini)
     - Ensure the following lines are uncommented (remove semicolons):
         extension_dir = "ext"
         extension=mysqli
         extension=pdo_mysql
     - Make sure php_mysqli.dll and php_pdo_mysql.dll exist in C:\php\ext

  4. Create MySQL Database and Table:
     - Run in terminal: mysql -u root -p
     - Then execute:
         CREATE DATABASE users_db;
         USE users_db;
         CREATE TABLE users (
             id INT AUTO_INCREMENT PRIMARY KEY,
             username VARCHAR(50) NOT NULL UNIQUE,
             password VARCHAR(255) NOT NULL
         );
         INSERT INTO users (username, password) VALUES ('testuser', 'testpass');

  5. Start PHP Server:
     - Navigate to your project folder
     - Run: php -S localhost:8000
     - Open browser and go to: http://localhost:8000/login.php
*/

session_start();

// Database connection details
$host = "localhost";
$user = "root";
$password = "root";
$database = "users_db";

// Create a connection to MySQL database
$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve input values from the form
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Prepare SQL statement to check if the username exists in the database
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    // Check if user exists
    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        echo "<h2>Welcome, $username!</h2>";
    } else {
        echo "<h2>Error: User not found. Please register.</h2>";
    }
    
    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <h2>Login</h2>
    <!-- Login form to take user input -->
    <form method="POST">
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>