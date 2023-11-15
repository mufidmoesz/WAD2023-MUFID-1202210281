<!-- Pada file ini kalian membuat coding untuk logika update / meng-edit data mobil pada showroom sesuai id-->
<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include "connect.php";

// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
$id = $_GET['id'];

    // (3) Buatkan fungsi "update" yang menerima data sebagai parameter
    function update($data) {
        // Panggil variabel koneksi dari luar fungsi
        global $conn;
        global $id;

        // Dapatkan data yang dikirim sebagai parameter dan simpan dalam variabel yang sesuai.
        $namamobil = $data["nama_mobil"];
        $brandmobil = $data["brand_mobil"];
        $warnamobil = $data["warna_mobil"];
        $tipemobil = $data["tipe_mobil"];
        $hargamobil = $data["harga_mobil"];
        
        $sql = "UPDATE showroom_mobil SET nama_mobil='$namamobil', brand_mobil='$brandmobil', warna_mobil='$warnamobil', tipe_mobil='$tipemobil', harga_mobil='$hargamobil' WHERE id=$id";

        $query = mysqli_query($conn, $sql);

        if ($query) {
            echo "
            <script>
                alert('Data berhasil diupdate!');
                document.location.href = 'form_detail_mobil.php?id=$id';
            </script>
            ";
        } 
        else {
            die("Gagal menyimpan perubahan...");
        }
    }

        // Dapatkan data yang dikirim sebagai parameter dan simpan dalam variabel yang sesuai.
        
        // Buatkan perintah SQL UPDATE untuk mengubah data di tabel, berdasarkan id mobil

        // Eksekusi perintah SQL

        // Buatkan kondisi jika eksekusi query berhasil
        // Jika terdapat kesalahan, buatkan eksekusi query gagalnya

    // Panggil fungsi update dengan data yang sesuai
    update($_POST);

// Tutup koneksi ke database setelah selesai menggunakan database

?>