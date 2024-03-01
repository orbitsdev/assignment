<?php



function setUserDetails($user_id, ){

    $_SESSION['user_id'] = $user_id;
}


function redirectTo($file) {
    header("Location: " . $file);
    exit; // Stop further execution
}
// function getUserDetails($user_id) {
//     global $conn; // Access the global database connection form config

//     // Sanitize it to make it safer from injection
//     $user_id = mysqli_real_escape_string($conn, $user_id);

//     // Prepare and execute the SQL query to retrieve user details
//     $query = "SELECT * FROM users WHERE id = '$user_id'";
//     $result = mysqli_query($conn, $query);

//     // Check if query was successful
//     if ($result && mysqli_num_rows($result) > 0) {
//         // Fetch user details
//         $user_details = mysqli_fetch_assoc($result);
//         return $user_details;
//     } else {
//         // If user is not found or query fails, return false
//         return false;
//     }
// }

?>