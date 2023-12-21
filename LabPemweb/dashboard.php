<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AyoOlahraga Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel ="stylesheet" href ="assets/css/sparing.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa; /* Light background color */
        }

        header {
            background-color: #dc3545; /* Red header */
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav {
            display: flex;
            justify-content: space-between;
            background-color: #343a40; /* Dark navbar background color */
            padding: 10px;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 10px;
            margin: 0 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #555; /* Darker background color on hover */
        }

        .container {
            display: flex;
            justify-content: space-around;
            align-items: center; /* Center items vertically */
            padding: 20px;
            flex-wrap: wrap;
        }

        .card {
            width: 300px;
            height: 300px;
            background-color: white;
            margin: 20px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s;
            text-align: center;
            display: flex;
            flex-direction: column;
        }

        .card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        h2 {
            color: #dc3545; /* Red heading color */
        }

        .btn {
            background-color: #dc3545;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin-top: auto; /* Align the button to the bottom */
        }

        .login-btn, .logout-btn {
            background-color: #dc3545;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .login-btn:hover, .logout-btn:hover {
            background-color: #555;
        }

        footer {
            background-color: #343a40; /* Dark footer background color */
            color: white;
            text-align: center;
            padding: 20px;
            position: fixed;
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
    <header>
        <h1>WarehouseSport Dashboard</h1>
    </header>

    <nav>
        <div>
        <button id="login_button" class="btn btn-outline" type="button">Login</button>
        <button id ="daftar_button" class="btn btn-danger" type="button">Daftar</button>
        </div>
    </nav>

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
            <form action ="login.php" method ="post" id ="form_modallogin" style ="display:row; justify-content:center; align-items:center;" class ="modallogin_form">
                <label for ="gmail"> Gmail :</label></br> 
                  <input type ="text" name = "gmail" id ="username_login" placeholder="Gmail"><br/>
                <label for ="password"> Password :</label>
                  <input type ="password" name ="password" id ="password_login" placeholder="Password"><br/>
                  <a class ="text-danger">Ganti Kata Sandi? Login Dulu</a>
                  <input type ="submit" values = "Login" style ="width:80%; height:40px;" id ="masuk_sistem"></input>
                </form>
                <div class ="footermodal_loginn">
                  <button>Masuk Dengan G-MAIL<img src ="assets/image/images/Gmail-Logo.png"></button>
              </div>
          </div>
        </div>
      </div>
    
      <!-- Modal Login-->

      <!-- Modal Daftar -->

      <div id ="daftar_modal">
      <div class ="containerdaftar_modal mt-5">
        <div class ="containerdaftar_modal_isi">
            <div class ="headerdaftar_modal">
              <p class ="pdaftar_modal"> Daftar </p>
                <div class ="headerdaftar_x">
                  <p id ="x_button_daftar" type="button">X</p>
                </div>
            </div>
                  <p class = "mt-0 text-center">Sudah Punya Akun? <a id ="masuk_login"class ="text-danger" >Masuk</a></p>
            <form action ="register.php" method ="post" id ="form_modaldaftar" style ="display:row; justify-content:center; align-items:center;" class ="modallogin_form">
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
                  <button>Daftar Dengan G-MAIL<img src ="assets/image/images/Gmail-Logo.png"></button>
              </div>
          </div>
        </div>
      </div>

      <!-- Modal Daftar -->

      <!-- OverLay -->
      <!-- Overlay -->
      <div class="overlay" id="overlay" onclick="closePopup()" style="display: none; position: fixed; top: 0; left: 0;  width: 100%;  height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 9000;"></div>
      <!-- OverLay -->

    <div class="container">
        <div class="card">
            <h2>Cari Lawan Sparing</h2>
            <p>Temukan lawan sparing untuk meningkatkan kemampuan olahragamu.</p>
            <a href="#" class="btn" id="cariLawanBtn">Cari Lawan</a>
        </div>

        <div class="card">
            <h2>Teman Mabar</h2>
            <p>Temukan teman untuk bermain bersama dalam game favoritmu.</p>
            <a href="#" class="btn" id="cariTemanBtn">Cari Teman</a>
        </div>

        <div class="card">
            <h2>Sewa Lapangan</h2>
            <p>Sewa lapangan untuk olahraga favoritmu sekarang juga.</p>
            <a href="#" class="btn" id="sewaLapanganBtn">Sewa Lapangan</a>
        </div>
    </div>

    <footer>
        <p>&copy; 2023 WarehouseSport. All rights reserved.</p>
        <p class="motivational-phrase">"Don't stop when you're tired. Stop when you're done."</p>
    </footer>

     <script src ="assets/js/index.js"></script>
     <script>
        let cariLawanBtn = document.getElementById('cariLawanBtn');
        let cariTemanBtn = document.getElementById('cariTemanBtn');
        let sewaLapanganBtn = document.getElementById('sewaLapanganBtn');

        document.getElementById('cariLawanBtn').addEventListener('click', function() {
            // Implement logic for 'Cari Lawan' button
            alert('Fitur ini hanya tersedia untuk pengguna yang sudah login.');
        });

        document.getElementById('cariTemanBtn').addEventListener('click', function() {
            // Implement logic for 'Cari Teman' button
            alert('Fitur ini hanya tersedia untuk pengguna yang sudah login.');
        });

        document.getElementById('sewaLapanganBtn').addEventListener('click', function() {
            // Implement logic for 'Sewa Lapangan' button
            alert('Fitur ini hanya tersedia untuk pengguna yang sudah login.');
        });
     </script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
