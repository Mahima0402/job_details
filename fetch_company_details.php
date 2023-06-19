<?php
// Get the category parameter from the request
$category = $_GET['category'];

// Connect to your database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "company";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute a SQL query to fetch company details based on the category
$stmt = $conn->prepare("SELECT company_details FROM your_table_name WHERE category = ?");
$stmt->bind_param("s", $category);
$stmt->execute();
$stmt->bind_result($companyDetails);
$stmt->fetch();
$stmt->close();

// Close the database connection
$conn->close();

if ($companyDetails) {
    // Return the company details as a JSON response
    echo json_encode(['status' => 'OK', 'data' => $companyDetails]);
} else {
    // Return an error message
    echo json_encode(['status' => 'ERROR', 'message' => 'Failed to fetch company details.']);
}
?>
