<?php
// Start session
session_start();
include('config.php');
// Process form submission

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];


    

    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // Verify password
        if (password_verify($password, $row['password'])) {
            // Password is correct, set session variables
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            // Redirect to dashboard or any other page
            header("Location: ../frontend/home.html");
            exit;
        } else {
            // Password is incorrect
            echo "Invalid password.";
        }
    } else {
        // User not found
        echo "User not found.";
    }

}

?>
