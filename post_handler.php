<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "freedom_wall_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data and sanitize
    $author = !empty($_POST["author"]) ? $conn->real_escape_string($_POST["author"]) : "Anonymous";
    $message = $conn->real_escape_string($_POST["message"]);
    $category = $conn->real_escape_string($_POST["category"]);
    
    // Validate data
    if (empty($message)) {
        header("Location: freedom_wall.php?error=Message cannot be empty");
        exit();
    }
    
    // Insert post into database
    $sql = "INSERT INTO posts (author, message, category, created_at, likes) 
            VALUES ('$author', '$message', '$category', NOW(), 0)";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: freedom_wall.php?success=Message posted successfully");
    } else {
        header("Location: freedom_wall.php?error=Error posting message: " . $conn->error);
    }
} else {
    // Redirect if accessed directly without POST
    header("Location: freedom_wall.php");
}

$conn->close();
?> 