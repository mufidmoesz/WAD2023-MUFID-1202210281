<!-- Pada file ini kalian membuat coding untuk logika delete / menghapus data mobil pada showroom sesuai id-->
<?php 
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include "connect.php";

// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
$id = $_GET['id'];
    // (3) Buatkan perintah SQL DELETE untuk menghapus data dari tabel berdasarkan id mobil
$delete = mysqli_query($conn, "DELETE FROM showroom_mobil WHERE id=$id");
    // (4) Buatkan perkondisi jika eksekusi query berhasil
if ($delete) {
    echo "
    <script>
        alert('Data berhasil dihapus!');
        document.location.href = 'list_mobil.php';
    </script>
    ";
} 
    // (5) Jika terdapat kesalahan, buatkan eksekusi query gagalnya 
else {
    die("Gagal menyimpan perubahan...");
}
// Tutup koneksi ke database setelah selesai menggunakan database

?>