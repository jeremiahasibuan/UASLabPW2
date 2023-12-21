<?php
require "koneksi.php";

$gmail      = $_POST['gmail'];
$password   = $_POST['password'];
$pesanlogin = "Anda Berhasil Login";
$pesangagal = "Email Atau Password Anda Salah.Silahkan Coba Kembali";

$query_sql = "SELECT * FROM data_register 
              WHERE gmail = '$gmail' AND password = '$password'";

$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result) > 0) {
    session_start();
    $data_pengguna = mysqli_fetch_assoc($result);
    $_SESSION['status'] = "login";
    $_SESSION['username'] = $data_pengguna['username'];
    echo "<script>alert('$pesanlogin'); window.location.href='sparingafterlogin.php';</script>";

} else {
    
    echo "<script>alert('$pesangagal'); window.location.href='dashboard.php';</script>";
    exit();
}
?>
