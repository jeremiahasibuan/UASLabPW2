let login_button = document.getElementById("login_button");
let daftar_button = document.getElementById("daftar_button");
let masuk_sistem = document.getElementById("masuk_sistem");
let login_modal = document.getElementById("login_modal");
let daftar_modal = document.getElementById("daftar_modal");
let x_button_login = document.getElementById("x_button_login");
let x_button_daftar = document.getElementById("x_button_daftar");
let masuk_login = document.getElementById("masuk_login");
let masuk_daftar = document.getElementById("masuk_daftar");
let overlay = document.getElementById("overlay");


function closeModal(){
    login_modal.style.display = "none";
    overlay.style.display = "none";
    daftar_modal.style.display = "none";
}

function overlayModal(){
    overlay.style.display = "block";
}

login_button.addEventListener('click', function() {
    login_modal.style.display = "block";
    overlayModal();
});

x_button_login.addEventListener('click', function() {
    closeModal();
});

x_button_daftar.addEventListener('click', function() {
    closeModal();
});

daftar_button.addEventListener('click', function() {
    daftar_modal.style.display = "block";
    overlayModal();
});

masuk_daftar.addEventListener('click', function(){
    daftar_modal.style.display ="block";
    login_modal.style.display ="none";
});

masuk_login.addEventListener('click', function(){
    daftar_modal.style.display ="none";
    login_modal.style.display ="block";
    userLoggedIn();
});




  // Menangkap elemen tombol
  var tombolMasukkanTim = document.getElementById("masukkan_tim");

  // Menambahkan event listener untuk menangani klik pada tombol
  tombolMasukkanTim.addEventListener("click", function() {
    // Mengarahkan ke halaman insertteam.php
    window.location.href = "insertteam.php";
  });
