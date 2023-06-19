<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // User is not logged in, redirect to login.php
    header("Location: login.php");
    exit;
}

// Retrieve the username from the session
$username = $_SESSION['username'];

// You can fetch additional user information from the database if needed

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <h2>Welcome, <?php echo $username; ?>!</h2>
    <!-- Display additional user information here if needed -->
    <p>This is your profile page.</p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>

