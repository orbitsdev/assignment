<?php
/* 
Create config.php file and add the configuration code in it
<?php
$db['host'] = "localhost"; // Host name
$db['user'] = "root"; // Mysql username
$db['pass'] = "YourPassword"; // Mysql password
$db['name'] = "YourDBname"; // Database name
?>
*/
// Include configuration
// include('config.php');

// Create connection


// Process form submission
if (isset($_POST['send'])) {

    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $pass = htmlspecialchars($_POST['password']);
    $hash = password_hash($pass, PASSWORD_BCRYPT);

    
    $stmt = mysqli_prepare($conn, "INSERT INTO users (name, phone, email, password) VALUES (?, ?, ?, ?)");

    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, 'ssss', $name, $phone, $email, $hash);
    
    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        header("Location: ../frontend/home.html");
    } else {
        echo "Error: " . mysqli_stmt_error($stmt);
    }
    
    // Close the statement
}

// Close MySQL connection
mysqli_close($conn);

?>

