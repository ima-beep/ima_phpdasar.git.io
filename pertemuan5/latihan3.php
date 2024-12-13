<?php
$mahasiswa = [
    ["heeseung", "2341564251", "teknik informatika", "heeseung@gmail.com"],
    ["sunghoon", "2341564251", "tenik sepeda motor", "sunghoon6@gmail.com"],
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar mahasiswa</title>
</head>
</html>
<h1>daftar mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
    <li>Nama :<?= $mhs[0]; ?></li>
    <li>NRP : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li> Email : <?= $mhs[3]; ?></li>
    
</ul>
<?php endforeach; ?>