<?php
require 'koneksi.php';
// Tangkap data login dari formulir atau sumber lainnya
$gmail    = $_POST['gmail'];
$nama     = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$pesan = "Anda Berhasil Daftar";


// Buat query SQL untuk menyimpan data login ke dalam database
$query_sql = "INSERT INTO data_register (gmail, nama, username, password) VALUES ('$gmail','$nama','$username', '$password')";

// Jalankan query
if (mysqli_query($conn,$query_sql)) {
?> 
<script>
    var pesan ="<?php echo $pesan;?>"
    alert(pesan)
</script>
<?php 
header("location: dashboard.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}

// Tutup koneksi
$conn->close();
?>
