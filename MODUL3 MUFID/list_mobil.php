<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>List Mobil</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <h1>List Mobil</h1>

            <?php
            include("connect.php");

            // Buatlah query untuk mengambil data dari database (gunakan query SELECT)
            $sql = "SELECT * FROM showroom_mobil";
            $result = mysqli_query($conn, $sql);

            
            

            // Buatlah perkondisian dimana: 
            // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan dalam bentuk tabel 
            //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
            //    b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke halaman 
            //       form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkan id
            // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel'

            //<!--  **********************  1  **************************     -->
            if(mysqli_num_rows($result)>0){
                echo "<table class='table table-bordered'>";
                echo "<tr>";
                echo "<th>Nama Mobil</th>";
                echo "<th>Brand Mobil</th>";
                echo "<th>Warna Mobil</th>";
                echo "<th>Tipe Mobil</th>";
                echo "<th>Harga Mobil</th>";
                echo "<th>Action</th>";
                echo "</tr>";
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$row['nama_mobil']."</td>";
                    echo "<td>".$row['brand_mobil']."</td>";
                    echo "<td>".$row['warna_mobil']."</td>";
                    echo "<td>".$row['tipe_mobil']."</td>";
                    echo "<td>".$row['harga_mobil']."</td>";
                    echo "<td><a href='form_detail_mobil.php?id=".$row['id']."' class='btn btn-primary'>Detail</a></td>";
                    echo "</tr>";
                }
                echo "</table>";
            }else{
                echo "Tidak ada data dalam tabel";
            }

            
            







            //<!--  **********************  1  **************************     -->

            //<!--  **********************  2  **************************     -->

            
            

            
            
            //<!--  **********************  2  **************************     -->
            ?>
        </div>
    </center>
</body>
</html>
