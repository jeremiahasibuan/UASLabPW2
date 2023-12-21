<?php
// Koneksi ke database
$servername = "localhost"; // Ganti dengan nama server database Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "db_register"; // Ganti dengan nama database Anda

$conn = mysqli_connect($servername, $username, $password, $dbname);


// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect());
}
?>