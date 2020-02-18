<?php
// // user tidak bisa langsung masuk ke halaman 2, jadi harus melewati halaman 1 dulu karena
// // tidak ada datanya.. dan datanya itu dikirimkan oleh halaman 1
// // untuk mengakalinya maka user harus dipaksa kembali atau diarahkan ke halaman 1
// // dengan cara redirect menggunakan fungisi isset
// fungsi isset adalah fungsi yang berguna untuk mengecek suatu variabel apakah variabel tersebut sudah digunakan atau belum
// redirect berguna untuk membuat sistem login

if (!isset ($_GET["name"]) ||
    !isset ($_GET["year"]) ||
    !isset ($_GET["genre"]) ||
    !isset ($_GET["label"])) {
        header("Location:latihan1.php");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Larihan GET 2</title>
</head>
<body>
    <ul>
        <li><?= $_GET["name"]; ?></li>
        <li><?= $_GET["year"]; ?></li>
        <li><?= $_GET["genre"]; ?></li>
        <li><?= $_GET["label"]; ?></li>
    </ul>
    <a href="latihan1.php">Kembali ke Latihan 1</a>
</body>
</html>