<?php
session_start();

if ($_SESSION['status']=="login"){

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel ="stylesheet" href ="assets/css/sparing.css">
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
                    <a class="nav-link fw-bold" href="#">Sparing</a>
                  </li>
                  <li class="nav-item mx-3">
                    <a class="nav-link" href="mainbareng.php">Main Bareng</a>
                  </li>
                  <li class="nav-item mx-3">
                    <a class="nav-link" href ="sewalapangan.php">Sewa Lapangan</a>
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
  
  
  <!-- Main Bareng -->
  <div class ="bg-danger" style="width:100%; height:270px;">
            <div class = "text-center text-white fw-bold fst-normal fs-1">
              <div style = "padding-top:120px;">Cari Lawan Sparing</div>
            </div>
          </div>
          <!-- Main Bareng -->
          
           <?php 
    // Cek apakah pengguna sudah login
    if (!isset($_SESSION['status']) || $_SESSION['status'] !== "login") {
      exit();
    }
    
    // Ambil username dari session
    $username = isset($_SESSION['username']) ? $_SESSION['username'] : "Pengguna";
    ?>
   <li class="nav-item mx-3">
    <p style="font-size: 1.2rem; text-align: center; color: #3498db; font-weight: bold;" class="mb-0">Selamat Datang, <?php echo $username; ?>!</p>
    </li>


          <?php include "body.php";?>
          
         
          <script>
            </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>

<?php
}else {
    echo'<h1>Password Anda Salah</h1>';
    include "sparingbeforelogin.php";
}
?>