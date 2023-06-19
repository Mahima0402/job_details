<?php
// Process the login form submission

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Establish database connection
    $servername = "localhost"; // Replace with your server name
    $usernameDB = "root"; // Replace with your MySQL username
    $passwordDB = ""; // Replace with your MySQL password
    $dbname = "japanese"; // Replace with your database name

    $conn = new mysqli($servername, $usernameDB, $passwordDB, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the SQL query to retrieve the user data from the database
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a user with the given username exists
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Password is correct, user is logged in
            echo "Login successful!";
        } else {
            // Password is incorrect
            echo "Incorrect username or password.";
        }
    } else {
        // No user with the given username found
        echo "Incorrect username or password.";
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>
