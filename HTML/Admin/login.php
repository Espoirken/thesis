<?php
require_once "config.php"; // Use require_once to include config.php

if (isset($_POST['username']) && isset($_POST['password'])) { // Corrected checking for both username and password
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if (empty($username)) {
        header("Location: admin-sign.php?error=Username is required.");
        exit();
    } elseif (empty($password)) { // Corrected elseif
        header("Location: admin-sign.php?error=Password is required.");
        exit();
    } else {
        // Prepared statement to prevent SQL injection
        $sql = "SELECT * FROM user_form WHERE username=? AND password=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: admin-sign.php?error=SQL error.");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $username, $password);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if (mysqli_num_rows($result) > 0) { // Checking if there are rows returned
                // Redirect to dashboard.php
                header("Location: dashboard.php");
                exit();
            } else {
                header("Location: admin-sign.php?error=Invalid username or password.");
                exit();
            }
        }
    }
} else {
    header("Location: admin-sign.php");
    exit();
}
