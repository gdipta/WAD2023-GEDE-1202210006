<!-- Pada file ini kalian membuat coding untuk logika create / menambahkan mobil pada showroom -->

<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include "connect.php";

// 

// (2) Buatlah perkondisian untuk memeriksa apakah permintaan saat ini menggunakan metode POST
// (3) Jika sudah coba deh kalian ambil data dari form (CLUE : pakai POST)
if (isset($_POST['create'])) {
}
// 
$nama_mmobil = $_POST['nama_mobil'];
$brand_mmobil = $_POST['brand_mobil'];
$warna_mmobil = $_POST['warna_mobil'];
$tipe_mmobil = $_POST['tipe_mobil'];
$harga_mmobil = $_POST['harga_mobil'];

// (4) Kalau sudah, kita lanjut Query / Menambahkan data pada SQL (Disini ada perintah untuk SQL), Masukkan ke tabel showroom_mobil (include setiap nama column)
$create = mysqli_query($koneksi, "INSERT INTO modul3_wad (nama , brand, warna, tipe, harga)
VALUES '$_POST[nama_mobil]',
'$_POST[brand_mobil]',
'$_POST[warna_mobil]',
'$_POST[tipe_mobil]',
'$_POST[harga_mobil]");

// (5) Buatkan kondisi jika eksekusi query berhasil
// (6) Jika terdapat kesalahan, buatkan eksekusi query gagalnya 
if ($create($koneksi)) {
    echo "Berhasil Tambah data";
} else {
    echo "Gagal tambah data";
}

// (7) Tutup koneksi ke database setelah selesai menggunakan database
mysqli_close($koneksi);
?>