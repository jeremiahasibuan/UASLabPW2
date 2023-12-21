<?php
require "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gambarLapangan = $_FILES['gambarLapangan']['name'];
    $namaLapangan = $_POST['namaLapangan'];
    $olahragaLapangan = $_POST['olahragaLapangan'];
    $lokasiLapangan = $_POST['lokasiLapangan'];
    $biayaLapangan = $_POST['biayaLapangan'];

    $target_dir = "uploads/gambar_lapangan/"; 
    $target_file = $target_dir . basename($_FILES["gambarLapangan"]["name"]);

    // Upload file
    move_uploaded_file($_FILES["gambarLapangan"]["tmp_name"], $target_file);

    $query_sql = "INSERT INTO info_lapangan (gambarLapangan, lokasiLapangan, namaLapangan, olahragaLapangan, biayaLapangan) 
                  VALUES ('$gambarLapangan','$lokasiLapangan','$namaLapangan','$olahragaLapangan', '$biayaLapangan')";

    if (mysqli_query($conn, $query_sql)) {
        echo '<h1><strong><center>Data Lapangan Anda Berhasil Dimasukkan
             <a class="btn btn-danger" href="sewalapangan.php">LANJUTKAN</a></h1></strong></center>';
        exit();
    } else {
        echo " " . mysqli_error($conn);
    }

    // Tutup koneksi
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
