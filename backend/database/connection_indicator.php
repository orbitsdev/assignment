<?php 
include('config.php');

// Check if the database connection is successful
if (!$conn) {
    // Display red indicator and connection error message
    echo "<div style='display:flex; align-items:center; justify-content:end; padding:10px;'>
            <span style='color:red; font-size:10px; margin-right:8px; display:inline-block;'>
                Connection failed: " . mysqli_connect_error() . "
            </span>
            <span style='display:inline-block; width:20px; height:20px; border-radius:40px;background-color:red; border: 1px solid white'></span>
          </div>";
} else {
    // Display green indicator and success message
    echo "<div style='display:flex; align-items:center; justify-content:end; padding:10px;'>
            <span style='color:green; font-size:10px; margin-right:8px;display:inline-block;'>
                Connected successfully
            </span>
            <span style='display:inline-block; width:20px; height:20px; border-radius:40px;background-color:green; border: 1px solid white'></span>
          </div>";

    // SQL command to create users table
   
}

// Connection will be automatically closed at the end of script execution
?>
