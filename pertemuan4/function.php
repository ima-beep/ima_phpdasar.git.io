<?php
function salam($waktu = "datang",  $nama = "heeseung") {
    return "selamat $waktu, $nama!";
}

?>
<!DOCTYPE html>
<html>
<head>
    
    <title>latihan function</title>
</head>
<body>
    <h1><?= salam(); ?></h1>
</body>
</html>