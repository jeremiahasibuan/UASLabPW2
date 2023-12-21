<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa; /* Warna latar belakang */
            color: black;
        }

        #form-container {
            margin-top: 20px; /* Jarak antara form dengan elemen di atasnya */
        }

        #div-container {
            max-width: 800px;
            margin: auto;
        }

        #container2 {
            display: flex;
            flex-wrap: nowrap;
            justify-content: space-between;
            align-items: center;
        }

        #container-input {
            width: 90%;
            display: flex;
            align-items: center;
            padding: 10px;
            border: 1px solid black; /* Warna garis tepi */
            border-radius: 5px; /* Sudut melengkung */
        }

        #cari-input, #lokasi-input {
            flex: 1;
            margin-right: 10px;
            padding: 5px; /* Padding di dalam input */
            border: 1px solid black; /* Warna garis tepi */
            border-radius: 3px; /* Sudut melengkung */
        }

        .form-control, select {
            padding: 5px; /* Padding di dalam input dan select */
            border: 1px solid black; /* Warna garis tepi */
            border-radius: 3px; /* Sudut melengkung */
        }

        .btn-danger {
            background-color: #dc3545; /* Warna latar belakang tombol */
            color: #fff; /* Warna teks tombol */
        }

        .btn-container {
            width: 30%;
            display: flex;
            align-items: flex-end;
        }

        .btn-container a {
            text-decoration: none;
        }

        .container-header {
            margin: 40px 0;
        }

        .container-header .row {
            justify-content: space-between;
            align-items: center;
        }

        .container-tim {
            margin-top: 50px;
        }

        .container-tim .row {
            margin-bottom: 20px;
        }

        .card {
            border: 2px solid black; /* Warna garis tepi */
            border-radius: 10px; /* Sudut melengkung */
            height: 100%; /* Set tinggi card agar semua card memiliki tinggi yang sama */
        }

        .card img {
            object-fit: cover; /* Agar logo tim tetap proporsional dan mempertahankan rasio aspek */
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            height: 200px; /* Sesuaikan dengan kebutuhan Anda */
        }

        .card-body {
            padding: 1rem;
            text-align: center;
        }

        .card-title {
            color: black; /* Warna teks judul card */
            font-weight:bold;
        }

        .btn-danger-card {
            background-color: #dc3545; /* Warna latar belakang tombol card */
            color: #fff; /* Warna teks tombol card */
        }
        .card:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Efek bayangan ketika dihover */
        transform: scale(1.05); /* Efek perbesar ketika dihover */
        transition: box-shadow 0.3s, transform 0.3s; /* Animasi efek */
        }

        .btn-danger-card:hover {
        background-color: #c82333; /* Warna latar belakang tombol card saat dihover */
        color: #fff; /* Warna teks tombol card saat dihover */
        }

        footer {
    color: white;
    text-align: center;
    padding: 20px;
    bottom: 0;
    width: 100%;
        }

.motivational-phrase {
    margin-top: 20px;
    font-style: italic;
    color: #555; /* Darker text color */
}
    </style>
</head>
<body>

    <form id="form-container" method="get" action="body.php">
        <div id="div-container" class="container text-center my-4 pt-2 mx-auto">
            <div id="container2" class="row d-flex flex-nowrap">
                <div id="container-input" class="input-group">
                    <input id="lokasi-input" name="lokasi" type="text" class="form-control" placeholder="Masukkan Lokasi" aria-label="Lokasi" value="<?php if(isset($_GET['lokasi'])){ echo $_GET['lokasi'];}?>">
                    <div class="btn-container ms-auto">
                        <button class="btn btn-danger m-3" type="submit">Cari Mabar</button>
                        <a href="insertteam.php" class="btn btn-danger m-3">Masukkan Tim Anda</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
        


    <div class="container-header container my-4 pt-2 mx-auto">
    <div class="row"> 
        <?php
        include "koneksi.php";

         if(isset($_GET['lokasi'])){
            $lokasi = $_GET['lokasi'];
            $query  = "SELECT * FROM info_tim WHERE lokasi LIKE '%$lokasi%'";
        } else{
            $query = "SELECT * FROM info_tim";
        }

        $koneksi = mysqli_connect('localhost', 'root', '', 'db_register');
        $tampil = mysqli_query($koneksi, $query);

        if ($tampil) {
            $jumlah_tim = mysqli_num_rows($tampil);
            echo '<div class="col">Menampilkan <strong>' . $jumlah_tim . ' Tim Mabar</div> </strong>';
        } else {
            echo '<div class="col">Error fetching data from database</div>';
        }
        ?>
    </div>
</div>
    <div class="container-tim container mt-5">
        <div class="row">
            <?php
            include "koneksi.php";
            if (isset($_GET['lokasi'])){
                $lokasi = $_GET['lokasi'];
                $query  = "SELECT * FROM info_tim WHERE lokasi LIKE '%$lokasi%'";
            } else{
                $query = "SELECT * FROM info_tim";
            }
            $koneksi = mysqli_connect('localhost', 'root', '', 'db_register');
            $tampil = mysqli_query($koneksi, $query);
            while($data = mysqli_fetch_array($tampil)):
            ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="uploads/logo_tim/<?php echo $data['logo']; ?>" class="card-img-top" alt="Logo Tim" id="logo_tim">
                    <div class="card-body">
                        <h3 class="card-title text-uppercase"><?php echo $data['cabangOlahraga']; ?></h3>
                        <p class="card-text"><?php echo $data['namaClub']; ?></p>
                        <p class="card-text"><?php echo $data['lokasi']; ?></p>
                        <p class="card-text">Rp <?php echo number_format($data['biaya'], 0, ',', '.'); ?>.000,00</p>
                        <button class ="btn btn-danger btn-danger-card">Hubungi Tim</button>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>

          <footer class = "btn-danger" style = "position:static;">
            <p>&copy; 2023 WarehouseSport. All rights reserved.</p>
            <p class="motivational-phrase">"Don't stop when you're tired. Stop when you're done."</p>
          </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
