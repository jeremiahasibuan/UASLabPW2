<?php
session_start();

$host = "localhost";
$dbname = "db_register";
$user = "root";
$password = "";

// Create a MySQL connection
$connection = mysqli_connect($host, $user, $password, $dbname);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['delete_account'])) {
    $gmail = $_POST['gmail'];
    $password = $_POST['password'];

    // Validasi pengguna (gantilah dengan metode otentikasi yang sesuai)
    // Contoh: Pengecekan apakah username dan password cocok dengan data di database
    $query = "SELECT * FROM data_register WHERE gmail = '$gmail' AND password = '$password'";
    $result = mysqli_query($connection, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        // Hapus akun dari database
        $deleteQuery = "DELETE FROM data_register WHERE gmail = '$gmail'";
        $deleteResult = mysqli_query($connection, $deleteQuery);

        if ($deleteResult) {
            echo "<script>window.location.href='dashboard.php';</script>";
        } else {
            echo "Failed to delete account. Please try again.";
        }
    } else {
        echo "Invalid username or password. Please try again.";
    }
}

// Tutup koneksi ke database
mysqli_close($connection);
?>
