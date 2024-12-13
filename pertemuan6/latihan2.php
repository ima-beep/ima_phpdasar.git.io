<?php
$mahasiswa =[
    [
    "nama" => "Lee Heeseung",
    "nrp" => "042272356",
    "email" => "heeseunglee@gmail.com",
    "jurusan" => "rekayasa perangkat lunak",
    "gambar" => "heeseung.jpg"
],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
<?php foreach( $mahasiswa as $mhs ) :?>
    <ul>
        <li>
            <img src="img/heeseung.jpg">
        <li>Nama:<? $mhs ["nama"] ;?></li>
        <li>NRP:<? $mhs ["nrp"] ;?></li>
        <li>Jurusan:<? $mhs ["jurusan"] ;?></li>
        <li>Email:<? $mhs ["email"] ;?></li>
</ul>
<?php endforeach; ?>

</body>
</html>