<?php
// Database connection
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "blood_donors_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get username and password from the form
$username = $_POST['email'];
$password = $_POST['password'];

// SQL query to check if the username and password exist in the database
$sql = "SELECT * FROM users WHERE email='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User authenticated, redirect to a new page or do something else
    header("Location: blooddatabase.php");
    exit();
} else {
    // Invalid credentials, show error message
    echo "Invalid username or password";
}

$conn->close();
?>
