<?php
session_start();

$host = "localhost";
$dbname = "db_register";
$user = "root";
$password = "";

// Create a MySQL connection
$connection = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['update_password'])) {
    $gmail = $_POST['gmail'];
    $newPassword = $_POST['new_password'];

    // Hash the new password

    // Replace 'your_users_table' with your actual table name
    $sql = "UPDATE data_register SET password = '$newPassword' WHERE gmail = '$gmail'";
    
    // Execute the query
    $execQuery = mysqli_query($connection, $sql);

    if ($execQuery) {
        echo "Password updated successfully!";
        echo "<script>window.location.href='dashboard.php';</script>";

    } else {
        echo "Failed to update password. Please try again.";
    }
}

// Close the database connection at the end of the script
mysqli_close($connection);
?>
