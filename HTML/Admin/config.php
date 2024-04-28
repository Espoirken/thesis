<?php
$sname = "localhost"; // Server name
$username = "root";
$password = "";
$db_name = "user_db";

$conn = mysqli_connect($sname, $username, $password, $db_name);

if (!$conn) {
    echo "Connection Failed!";
}
