<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$host = "localhost:3306";
$user = "root";
$password = "";
$database = "modul3_wad";

$koneksi = new mysqli($host, $user, $password, $database);

if (!$koneksi) {
    die("Cannot connect" . mysqli_connect_error());
}

// 

// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya

// 
?>