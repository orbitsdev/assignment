<?php

$db['host'] = "localhost"; // Host name
$db['user'] = "root"; // Mysql username
$db['pass'] = ""; // Mysql password
$db['name'] = "mydb"; // Database name

// Create connection
$conn = mysqli_connect($db['host'], $db['user'], $db['pass']);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the database exists
if (!mysqli_select_db($conn, $db['name'])) {
    // If the database doesn't exist, create it
    $create_db_query = "CREATE DATABASE " . $db['name'];
    if (mysqli_query($conn, $create_db_query)) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . mysqli_error($conn);
        die();
    }
}

?>
