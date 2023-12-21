<?php
require "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $logo = $_FILES['logo']['name'];
    $cabangOlahraga = $_POST['cabangOlahraga'];
    $namaClub = $_POST['namaClub'];
    $lokasi = $_POST['lokasi'];
    $biaya = $_POST['biaya'];

    $target_dir = "uploads/logo_tim/";  // Adjust this to your desired directory
    $target_file = $target_dir . basename($_FILES["logo"]["name"]);

    // Upload file
    move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file);

    $query_sql = "INSERT INTO info_tim (logo, cabangOlahraga, namaClub, lokasi, biaya) 
                  VALUES ('$logo','$cabangOlahraga','$namaClub', '$lokasi', '$biaya')";

    if (mysqli_query($conn, $query_sql)) {
        echo '<h1><strong><center>Data Tim Anda Berhasil Dimasukkan
             <a class="btn btn-danger" href="sparingafterlogin.php">LANJUTKAN</a></h1></strong></center>';
        exit();
    } else {
        echo "Ganti Nama Tim Anda" . mysqli_error($conn);
    }

    // Tutup koneksi
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
