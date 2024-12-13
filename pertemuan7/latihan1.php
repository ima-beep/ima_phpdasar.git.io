<?php 
// $_GET
$mahasiswa =[
    [
    "nama" => "Lee Heeseung",
    "nrp" => "043040022",
    "email" => "heeseunglee@gmail.com",
    "jurusan" => "rekayasa perangkat lunak",
    "gambar" => "heeseung.jpg"
    ],
    [
        "nama" => "Park Sunghoon",
        "nrp" => "043040023",
        "email" => "sunghoonpark@gmail.com",
        "jurusan" => "teknik informatika",
        "gambar" => "sunghoon.jpg"
        ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>    <?php foreach( $mahasiswa as $mhs ): ?>
        <li>
          <a href="latihan2.php?nama=<?=$mhs["nama"];?>%nrp=<?= $mhs["nrp"];?>&email=<?= $mhs["email"];?>&jurusan=<?= $mhs["jurusan"];?>"><?= $mhs["nama"]; ?></a>
        </li>
        <?php endforeach; ?>
    
    </ul>

</body>
</html>