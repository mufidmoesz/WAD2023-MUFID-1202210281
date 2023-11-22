<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$server = 'localhost';
$user = 'root';
$password = '';
$db = 'modul4';

$conn = mysqli_connect($server, $user, $password, $db);
// 

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if (!$conn) {
    die('Koneksi Error : '.mysqli_connect_errno()
    .' - '.mysqli_connect_error());
}

// 
 
?>