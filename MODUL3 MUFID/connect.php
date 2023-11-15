<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin

// 
$server = "localhost";
$username = "root";
$password = "";
$dbname = "modul3-mufid";

$conn = mysqli_connect($server, $username, $password, $dbname);
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// 
?>