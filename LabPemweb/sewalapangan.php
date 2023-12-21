
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href ="assets/css/sparing.css" rel ="stylesheet">
    <head>
    <!-- ... existing head content ... -->
    <style>
        /* Body style */
        body {
            padding: 0;
            margin: 0;
            height: 100%;
        }
        .card img {
            object-fit: cover; /* Agar logo tim tetap proporsional dan mempertahankan rasio aspek */
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            height: 200px; /* Sesuaikan dengan kebutuhan Anda */
        }

        .card {
            border: 2px solid black; /* Warna garis tepi */
            border-radius: 10px; /* Sudut melengkung */
            height: 100%; /* Set tinggi card agar semua card memiliki tinggi yang sama */
        }

        .card:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Efek bayangan ketika dihover */
        transform: scale(1.05); /* Efek perbesar ketika dihover */
        transition: box-shadow 0.3s, transform 0.3s; /* Animasi efek */
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
        footer {
        background-color: red; /* Dark footer background color */
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
    </style>
</head>
  <body style="padding:0; margin:0; height:100%;">
    <!-- Navbar -->
    
    <div id="navbarNav" class ="bg-light position-fixed mb-5 d-flex justify-content-center" style ="width: 100%; z-index: 1000;">
    <nav class="navbar navbar-expand-lg" >
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src ="Assets/image/images/Logo WS.png" class ="gambarlogo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-3">
                  <li class="nav-item mx-3">
                    <a class="nav-link" href="sparingafterlogin.php">Sparing</a>
                  </li>
                  <li class="nav-item mx-3">
                    <a class="nav-link" href="mainbareng.php">Main Bareng</a>
                  </li>
                  <li class="nav-item mx-3">
                    <a class="nav-link fw-bold" href ="#">Sewa Lapangan</a>
                  </li>
                </ul>
                
                <div style = "padding-left:393px;" class ="bg-light">
                  <nav class="navbar bg-body-tertiary">
                  <form class="container-fluid justify-content-start">
                    <ul class="navbar-nav mx-3">
                  <li class="nav-item mx-3">
                    <a href ="gantipassword.php" class="btn btn-danger">Ganti Password</a>
                  </li>
                  <li class="nav-item mx-3">
                    <a a href ="log-out.php" class="btn btn-danger">Log out</a>
                  </li>
                  <li class="nav-item mx-3">
                    <a class="btn btn-danger" href ="hapusakun.php">Delete Acc</a>
                  </li>
                </ul>
              </form>
                          </nav>
                        </div>
              </div>
            </div>
          </nav>
        </div>
        
        
        <!-- Navbar -->

    <!-- Book Lapangan -->
    <div class ="bg-danger fw-bold text-white fst-normal" style="height:270px; text-align:center;">
        <div style ="padding-top:120px;" class ="fs-1"> BOOKING LAPANGAN ONLINE TERBAIK </div>
        <a href = "insertlapangan.php"class ="btn btn-warning text-white"> Daftarkan Lapangan </a>
    </div>
    <!-- Book Lapangan -->
      
      <!-- Modal Login-->
      <div id ="login_modal">
      <div class ="containerlogin_modal">
        <div class ="containerlogin_modal_isi">
            <div class ="headerlogin_modal">
              <p class ="plogin_modal"> Login </p>
                <div class ="headerlogin_x">
                  <p id ="x_button_login" type="button">X</p>
                </div>
            </div>
                  <p class = "mt-0 text-center">Belum Punya akun? <a id ="masuk_daftar"class ="text-danger" >Daftar</a></p>
            <form action ="login.php" method ="post" id ="form_modal" style ="display:row; justify-content:center; align-items:center;" class ="modallogin_form">
                <label for ="gmail"> Gmail :</label></br> 
                  <input type ="text" name = "gmail" id ="username_login" placeholder="Gmail"><br/>
                <label for ="password"> Password :</label>
                  <input type ="password" name ="password" id ="password_login" placeholder="Password"><br/>
                    <a class ="text-danger">Lupa Kata Sandi?</a>
                    <input type ="submit" values = "Login" style ="width:80%; height:40px;"></input>
            </form>
              <div class ="footermodal_loginn">
                  <button>Masuk Dengan G-MAIL<img src ="assets/image/Gmail-Logo.png"></button>
              </div>
          </div>
        </div>
      </div>
    
      <!-- Modal Login-->

      <!-- Modal Daftar -->

      <div id ="daftar_modal">
      <div class ="containerdaftar_modal">
        <div class ="containerdaftar_modal_isi">
            <div class ="headerdaftar_modal">
              <p class ="pdaftar_modal"> Daftar </p>
                <div class ="headerdaftar_x">
                  <p id ="x_button_daftar" type="button">X</p>
                </div>
            </div>
                  <p class = "mt-0 text-center">Sudah Punya Akun? <a id ="masuk_login"class ="text-danger" >Masuk</a></p>
            <form action ="register.php" method ="post" id ="form_modal" style ="display:row; justify-content:center; align-items:center;" class ="modallogin_form">
                <label for ="gmail"> Gmail </label></br>
                  <input type ="text" name = "gmail" id ="gmail" placeholder="Masukkan G-Mail Anda" required><br/>
                <label for ="nama"> Nama </label></br>
                  <input type ="text" name ="nama" id ="nama" placeholder="Masukkan Nama Anda" required><br/>
                <label for ="username">Username</label></br>
                  <input type ="text" name="username" id="username_daftar" placeholder="Masukkan Username Anda" required></br>
                <label for ="password">Password</label></br>
                  <input type ="password" name ="password" id ="password_daftar" placeholder ="Masukkan Password Anda" required>
              <input type ="submit" values = "Register" style ="width:80%; height:40px;"></input>
            </form>
              <div class ="footermodal_daftar">
                  <button>Daftar Dengan G-MAIL<img src ="assets/image/Gmail-Logo.png"></button>
              </div>
          </div>
        </div>
      </div>

      <!-- Modal Daftar -->
      
      <!-- Overlay -->
      <div class="overlay" id="overlay" onclick="closePopup()" style="display: none; position: fixed; top: 0; left: 0;  width: 100%;  height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 9000;"></div>
      
      <!-- container -->
    <form method ="get" action ="sewalapangan.php">
      <div class="container text-center my-4 pt-2 mx-auto     EXXXQ3RXQE3x    ew">
        <div class="row d-flex flex-nowrap">
          <div class="input-group" style = "width: 20%;">
            <input type="text" class="form-control" name = "lokasiLapangan"placeholder="Lokasi Lapangan" aria-label="Username" aria-describedby="basic-addon1" value="<?php if(isset($_GET['lokasiLapangan'])){ echo $_GET['lokasiLapangan'];}?>">
          </div>
          <div style = "width: 20%; display:flex; align-items:flex-end;" class ="ms-auto">
            <button class ="btn btn-danger" type = "submit"> Cari Lapangan </button>
          </div>
        </div>
      </div>
      </div>
  </form>
    <!-- container -->



    <!-- Cari Lokasi -->
    <div class="container-header container my-4 pt-2 mx-auto">
    <div class="row"> 
        <?php
        include "koneksi.php";

         if(isset($_GET['lokasiLapangan'])){
            $lokasi = $_GET['lokasiLapangan'];
            $query  = "SELECT * FROM info_lapangan WHERE lokasiLapangan LIKE '%$lokasi%'";
        } else{
            $query = "SELECT * FROM info_lapangan";
        }

        $koneksi = mysqli_connect('localhost', 'root', '', 'db_register');
        $tampil = mysqli_query($koneksi, $query);

        if ($tampil) {
            $jumlah_tim = mysqli_num_rows($tampil);
            echo '<div class="col">Menampilkan <strong>' . $jumlah_tim . ' Lapangan </div> </strong>';
        } else {
            echo '<div class="col">Error fetching data from database</div>';
        }
        ?>
    </div>
</div>
    <!-- Cari Mabar -->

    <!-- card -->
    <div class="container-tim container mt-5">
        <div class="row">
            <?php
            include "koneksi.php";
            if (isset($_GET['lokasiLapangan'])){
                $lokasi = $_GET['lokasiLapangan'];
                $query  = "SELECT * FROM info_lapangan WHERE lokasiLapangan LIKE '%$lokasi%'";
            } else{
              $query = "SELECT * FROM info_lapangan";
              }
              
            $koneksi = mysqli_connect('localhost', 'root', '', 'db_register');
            $tampil = mysqli_query($koneksi, $query);
            while($data = mysqli_fetch_array($tampil)): 
            ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="uploads/gambar_lapangan/<?php echo $data['gambarLapangan']; ?>" class="card-img-top" alt="Logo Tim" id="logo_tim">
                    <div class="card-body">
                      <h3 class="card-title text-uppercase"><?php echo $data['namaLapangan']; ?></h3>
                      <h5 class="card-title text-uppercase"><?php echo $data['lokasiLapangan']; ?></h5>
                        <p class="card-text"><?php echo $data['olahragaLapangan']; ?></p>
                        <p class="card-text">Rp <?php echo number_format($data['biayaLapangan'], 0, ',', '.'); ?>.000,00/<strong>JAM</strong></p>
                        <button class ="btn btn-danger btn-danger-card">Sewa Lapangan</button>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
    <!-- card -->

    <footer style = "position:static;">
        <p>&copy; 2023 WarehouseSport. All rights reserved.</p>
        <p class="motivational-phrase">"Don't stop when you're tired. Stop when you're done."</p>
    </footer>
    <script src ="assets/js/mainbareng.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>