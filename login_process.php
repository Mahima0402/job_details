<?php
// Start the session
session_start();

// Check if the user is already logged in
if (isset($_SESSION['username'])) {
    // User is already logged in, redirect to home.php
    header("Location: home.php");
    exit;
}

// Check if the login form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form input
    $username = $_POST['username'];
    $password = $_POST['password'];

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

    // Prepare the SQL statement to retrieve the user record from the database
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the user record exists
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        // Verify the password
        if (password_verify($password, $hashed_password)) {
            // Password is correct, set session variables and redirect to home.php
            $_SESSION['username'] = $username;
            header("Location: home.php");
            exit;
        } else {
            // Incorrect password, display error message
            $error_message = "Incorrect password.";
        }
    } else {
        // User does not exist, display error message
        $error_message = "Username does not exist.";
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php
    // Display error message if it exists
    if (isset($error_message)) {
        echo "<p style='color: red;'>$error_message</p>";
    } elseif (isset($_SESSION['username'])) {
        // Display success message if user is logged in
        echo "<p style='color: green;'>Login successful!</p>";
    }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>
        <input type="submit" value="Login">
    </form>
    <p>Don't have an account? <a href="signup.php">Sign up</a></p>
</body>
</html>
