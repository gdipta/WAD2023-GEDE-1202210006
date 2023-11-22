<!-- File ini berisi koneksi dengan database MySQL -->
<?php

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$host = "localhost";
$user = "root";
$password = "";
$database = "modul4_wad";

$koneksi = new mysqli($host, $user, $password, $database);
// 

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if (!$koneksi) {
    die("Cannot connect" . mysqli_connect_error());
}
// 

?>