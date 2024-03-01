<?php
session_start();
include('../database/config.php');
include('../methods.php');
if (isset($_POST['send'])) {

    // Get form data
    $fullname = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $pass = htmlspecialchars($_POST['password']);
    $hash = password_hash($pass, PASSWORD_BCRYPT);

    
    $stmt = mysqli_prepare($conn, "INSERT INTO users (fullname, email, password) VALUES (?, ?, ?)");

    mysqli_stmt_bind_param($stmt, 'sss', $fullname, $email, $hash);
    
   
    if (mysqli_stmt_execute($stmt)) {
        $user_id = mysqli_insert_id($conn);
        setUserDetails($user_id);
        redirectTo('../../frontend/home.php');
        // header("Location: ../frontend/home.php");
    } else {
        echo "Error: " . mysqli_stmt_error($stmt);
    }
    
   
}


mysqli_close($conn);

?>
