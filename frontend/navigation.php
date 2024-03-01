<div class="header">
    <div class="user-details">
        <?php

        if (isset($_SESSION['user_id'])) {
            $user_id = $_SESSION['user_id'];
            $query = "SELECT fullname, email FROM users WHERE id = ?";
            $stmt = mysqli_prepare($conn, $query);
            mysqli_stmt_bind_param($stmt, 'i', $user_id);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $user_details = mysqli_fetch_assoc($result);

            echo '<span class="user-name"> ' . $user_details['fullname'] . '</span>';
            echo '<span class="user-email">' . $user_details['email'] . '</span>';
        }
        ?>
    </div>
    <div class="logout-btn-container">
        <button class="logout-btn" onclick="location.href='../backend/forms/logout.php';">Logout</button>
    </div>
</div>
