<?php
// Retrieve the form input
$username = $_POST['username'];
$password = $_POST['password'];

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Database connection settings
$servername = "localhost";
$username_db = "root";
$password_db = "";
$dbname = "japanese";

// Create a new database connection
$conn = new mysqli($servername, $username_db, $password_db, $dbname);

// Check the database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the username already exists
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Username already exists
    echo "Username already exists. Please choose a different username.";
    exit;
}

// Prepare the SQL statement to insert the user record into the database
$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $hashed_password);

// Execute the SQL statement
if ($stmt->execute()) {
    // User registration successful, redirect to login.php
    header("Location: login.php");
    exit;
} else {
    // Error occurred during user registration
    echo "Error: " . $stmt->error;
}

// Close the database connection
$stmt->close();
$conn->close();
?>
