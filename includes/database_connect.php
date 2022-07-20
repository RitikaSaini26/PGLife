<?php
$conn = mysqli_connect("127.0.0.1:3307", "root", "", "pglife");

if (mysqli_connect_error()) {
    // Throw error message based on ajax or not
    echo "Failed to connect to MySQL! Please contact the admin.";
    return;
}
?>