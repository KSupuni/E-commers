<?php
session_start();

// Database connection parameters
$host = "localhost";
$username = "root";
$password = "";
$database = "fairy";

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    // Get the username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Hash the password (use a stronger hashing algorithm in production)
    $hashedPassword = md5($password);

    // SQL query using prepared statements
    $sql = "SELECT * FROM login WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $hashedPassword);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the query returned any rows
    if ($result->num_rows > 0) {
        // Login successful
        $_SESSION["username"] = $username;
        header("Location: Home.html"); // Redirect to a welcome page
        exit();
    } else {
        // Login failed
        echo "Invalid username or password";
    }

    // Close the prepared statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
