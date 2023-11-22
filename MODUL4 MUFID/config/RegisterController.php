<?php

require 'connect.php';

// (1) Mulai session
session_start();
//

// (2) Ambil nilai input dari form registrasi
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // a. Ambil nilai input email
    // b. Ambil nilai input name
    // c. Ambil nilai input username
    // d. Ambil nilai input password
    // e. Ubah nilai input password menjadi hash menggunakan fungsi password_hash()

//

// (3) Buat dan lakukan query untuk mencari data dengan email yang sama dari nilai input email
$sql1 = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $sql1);

//

// (4) Buatlah perkondisian ketika tidak ada data email yang sama ( gunakan mysqli_num_rows == 0 )
if(mysqli_num_rows($result) == 0) {

    // a. Buatlah query untuk melakukan insert data ke dalam database
    $sql = "INSERT INTO users (name, username, email, password) VALUES ('$name', '$username', '$email', '$password')";
    $query = mysqli_query($conn, $sql);
    // b. Buat lagi perkondisian atau percabangan ketika query insert berhasil dilakukan
    //    Buat di dalamnya variabel session dengan key message untuk menampilkan pesan penadftaran berhasil
    if($query) {
        $_SESSION['message'] = 'Pendaftaran berhasil!, Silahkan Login';
        $_SESSION['color'] = 'success';
        header('Location: ../views/login.php');
    } else {
        die('Query Error : '.mysqli_errno($conn).' - '.mysqli_error($conn));
    
    }
    
// 
} else {
    $_SESSION['message'] = 'Email sudah terdaftar!';
    $_SESSION['color'] = 'danger';
    header('Location: ../views/register.php');

}
// (5) Buat juga kondisi else
//     Buat di dalamnya variabel session dengan key message untuk menampilkan pesan error karena data email sudah terdaftar

//

?>