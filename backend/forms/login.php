<?php
session_start();


include('../database/config.php');
include('../methods.php');

if (isset($_POST['login'])) {
  
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

   
    if (empty($email)) {
        $_SESSION['errors'][] = "Email is required.";
    }
    if (empty($password)) {
        $_SESSION['errors'][] = "Password is required.";
    }

  
    if (empty($_SESSION['errors'])) {
        // Query to retrieve user from the database based on email
        $query = "SELECT * FROM users WHERE email = ?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, 's', $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        // Check if user exists and password matches
        if ($result && mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);

            if (password_verify($password, $user['password'])) {
               
                setUserDetails($user['id']);
                redirectTo('../../frontend/home.php');
                
            } else {
                
                $_SESSION['errors'][] = "Invalid email or password.";
                redirectTo('../../index.php');
            }
        } else {
       
            $_SESSION['errors'][] = "Invalid email or password.";
            redirectTo('../../index.php');
        }

      
        mysqli_stmt_close($stmt);
    } else {
       
        redirectTo('../../index.php');
    }
}


mysqli_close($conn);
?>
