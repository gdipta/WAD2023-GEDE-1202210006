<!-- Pada file ini kalian membuat coding untuk logika delete / menghapus data mobil pada showroom sesuai id-->
<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include "connect.php";
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
$id_mobil = $_GET['id'];
// (3) Buatkan perintah SQL DELETE untuk menghapus data dari tabel berdasarkan id mobil
$del = mysqli_query($koneksi, "DELETE FROM tstock WHERE id = '$_POST[id]'");
// (4) Buatkan perkondisi jika eksekusi query berhasil
function delete($id_mobil)
{
    global $koneksi;
    $erase = mysqli_query($koneksi, "DELETE FROM showroom_mobil WHERE id = '$_POST[id]");
    if ($erase) {
        return "Data Gagal Dihapus";
    } else {
        return "Gagal Gagall DIhapus";
    }
}
// Tutup koneksi ke database setelah selesai menggunakan database
mysqli_close($koneksi);
?>