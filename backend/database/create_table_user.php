<?php 
include('config.php');

$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
)";

// Execute SQL command
if (mysqli_query($conn, $sql)) {
    echo "Users table created successfully";
} else {
    echo "Error creating users table: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>