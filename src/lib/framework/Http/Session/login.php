<?php
// Hardcoded database credentials (Security Issue)
$db_host = "localhost";
$db_user = "root";
$db_pass = "root123";
$db_name = "orangehrm";

// Database connection (No error handling)
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Get user input without validation
$username = $_POST['username'];
$password = $_POST['password'];

// SQL Injection vulnerability
$query = "SELECT * FROM users 
          WHERE username = '$username' 
          AND password = '$password'";

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo "Login Successful";
} else {
    echo "Invalid Username or Password";
}

// Resources not closed (Code Smell)
?>
