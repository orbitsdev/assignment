<?php

session_start();

// Check if the user is not logged in (i.e., session variable is not set)
if (isset($_SESSION['user_id'])) {
    echo "yow";
    // Redirect the user to the login page
    redirectTo("frontend/home.php");
   
    
}



?>
