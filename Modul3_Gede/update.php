<!-- Pada file ini kalian membuat coding untuk logika update / meng-edit data mobil pada showroom sesuai id-->
<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include "connect.php";
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
$id_mobil = $_GET['id'];
$nama_mmobil = $_POST['nama_mobil'];
$brand_mmobil = $_POST['brand_mobil'];
$warna_mmobil = $_POST['warna_mobil'];
$tipe_mmobil = $_POST['tipe_mobil'];
$harga_mmobil = $_POST['harga_mobil'];

// (3) Buatkan fungsi "update" yang menerima data sebagai parameter
if (isset($_POST['update'])) {

    $update = mysqli_query($koneksi, "UPDATE showroom_mobil SET
                                    nama = '$_POST[nama_mobil]',
                                    brand = '$_POST[brand_mobil]',
                                    warna = '$_POST[warna_mobil]',
                                    tipe = '$_POST[tipe_mobil]',
                                    harga = '$_POST[harga_mobil]' WHERE id = '$_POST[id]'
                                                        ");
}

// Dapatkan data yang dikirim sebagai parameter dan simpan dalam variabel yang sesuai.

// Buatkan perintah SQL UPDATE untuk mengubah data di tabel, berdasarkan id mobil

// Eksekusi perintah SQL

// Buatkan kondisi jika eksekusi query berhasil
// Jika terdapat kesalahan, buatkan eksekusi query gagalnya
if ($update($koneksi)) {
    echo "<script>
    alert('Update Data Berhasil!');
    document.location='list_mobil.php';
</script>";
} else {
    echo "<script>
    alert('Update Data Gagal!');
    document.location='list_mobil.php';
</script>";
}
// Panggil fungsi update dengan data yang sesuai
$data = mysqli_fetch_array($update);
$id++;
$data['nama'];
$data['harga'];
$data['kategori'];
$data['vendor'];
// Tutup koneksi ke database setelah selesai menggunakan database
mysqli_close($koneksi);
?>