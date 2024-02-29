<?php

$db['host'] = "localhost"; // Host name
$db['user'] = "root"; // Mysql username
$db['pass'] = ""; // Mysql password
$db['name'] = "mydb"; // Database name
$conn = mysqli_connect($db['host'], $db['user'], $db['pass'], $db['name']);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}
?>