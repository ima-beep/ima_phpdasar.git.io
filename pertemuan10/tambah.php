<?php 
require 'functions.php';  
// koneksi ke dbms
// $conn = mysqli_connect("localhost","root", "", "phpdasar");

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
   // ambil data dari tiap elemen dalam form
    // $nama = $_POST["nama"];
    // $nrp = $_POST["nrp"];
    // $email = $_POST["email"];
    // $jurusan = $_POST["jurusan"];
    // $gambar = $_POST["gambar"];
    // ini ditambahkan ke function.php

   // query insert data
//    $query = "INSERT INTO mahasiswa
//         VALUES
//         ('', '$nrp','$nama','$email','$jurusan','$gambar')
//         ";
//    mysqli_query($conn, $query);
// dipindahkan ke function.php

    // cek apakah data berhasil di tambahkan atau tidak
    // if( mysqli_affected_rows($conn) > 0 ) {
    //     echo "berhasil";
    // } else {
    //     echo "gagal";
    //     echo "<br>";
    //     echo mysqli_error($conn);
    // }
   if( tambah($_POST) > 0 ) {
        echo "
             <script>
                alert('data gagal ditambahkan!');
                document.location.href = 'index.php';
            </script>
    ";
   }else {
        echo "
         <script>
                alert('data berhasil ditambahkan!');
              document.location.href = 'index.php';
        </script>
   ";
   }

}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nrp">NRP :</label>
                <input type="text" name="nrp" id="nrp">
            </li>
            <li>
                <label for="nama">Nama  :</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan">
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
    <button type="submit" name="submit">Tambah Data!</button>
</li>
</form>

</body>
</html>