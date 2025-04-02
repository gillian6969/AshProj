<?php
// Headers for JSON response
header('Content-Type: application/json');

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "freedom_wall_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    echo json_encode(["success" => false, "message" => "Database connection failed"]);
    exit();
}

// Check if post_id is provided
if (isset($_GET["post_id"]) && is_numeric($_GET["post_id"])) {
    $post_id = intval($_GET["post_id"]);
    
    // Update the likes count for the post
    $sql = "UPDATE posts SET likes = likes + 1 WHERE id = $post_id";
    
    if ($conn->query($sql) === TRUE) {
        // Get the updated likes count
        $get_likes_sql = "SELECT likes FROM posts WHERE id = $post_id";
        $result = $conn->query($get_likes_sql);
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo json_encode(["success" => true, "likes" => $row["likes"]]);
        } else {
            echo json_encode(["success" => false, "message" => "Post not found"]);
        }
    } else {
        echo json_encode(["success" => false, "message" => "Error updating likes"]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Invalid post ID"]);
}

$conn->close();
?> 