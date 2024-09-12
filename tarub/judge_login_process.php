<?php
session_start();
require 'db_config.php'; // Include database connection

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Validate input
    if (empty($username) || empty($password)) {
        $_SESSION['error'] = 'Username and Password are required.';
        header('Location: judge_login.php');
        exit();
    }

    // Prepare SQL query to prevent SQL injection
    $sql = "SELECT * FROM judges WHERE username = ?";

    if ($stmt = $mysqli->prepare($sql)) {
        // Bind parameters
        $stmt->bind_param("s", $username);
        
        // Execute statement
        $stmt->execute();
        
        // Store result
        $stmt->store_result();
        
        // Check if username exists
        if ($stmt->num_rows == 1) {
            // Bind result variables
            $stmt->bind_result($judgeid, $judgename, $db_username, $db_password);
            
            // Fetch the result
            $stmt->fetch();

            // Verify password
            if (password_verify($password, $db_password)) {
                // Password is correct
                $_SESSION['judge_id'] = $judgeid;
                $_SESSION['judge_name'] = $judgename;
                $_SESSION['username'] = $db_username;
                
                // Redirect to judge dashboard or main page
                header('Location: judge_dashboard.php');
                exit();
            } else {
                // Password is incorrect
                $_SESSION['error'] = 'Invalid password.';
                header('Location: judge_login.php');
                exit();
            }
        } else {
            // Username does not exist
            $_SESSION['error'] = 'No account found with that username.';
            header('Location: judge_login.php');
            exit();
        }
        
        // Close statement
        $stmt->close();
    } else {
        // SQL preparation failed
        $_SESSION['error'] = 'Database error. Please try again later.';
        header('Location: judge_login.php');
        exit();
    }

    // Close connection
    $mysqli->close();
} else {
    // Redirect if accessed directly
    header('Location: judge_login.php');
    exit();
}
?>
