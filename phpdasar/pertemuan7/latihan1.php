<?php 
// 1. metode request get adalah metode pengiriman data melalui url dan data tersebut bisa diambil atau ditangkap oleh
// variabel superglobal $_GET

$muses = [
    [
        "name" => "Showbizz",
        "year" => "1999",
        "genre" => "Alternative Rock",
        "label" => "Mushroom",
        "singles" => [ "Unintended", "Uno", "Cave"],
        "cover" => "showbizz.jpg"
    ],
    [
        "name" => "Origin of Symmetry",
        "year" => "2001",
        "genre" => "Progressive Rock",
        "label" => "Taste",
        "singles" => [ "New Born", "Plug in Baby", "Dark Shines"],
        "cover" => "origin.jpg"
    ]
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan GET</title>
</head>
<body>
<h1>Muse Dischography</h1>
<ul>
<?php foreach($muses as $muse) : ?>
    <li>
        <a href="latihan2.php?name=<?= $muse["name"];?>&year=<?= $muse["year"];?>&genre=<?= $muse["genre"]; ?>&label=<?= $muse["label"]; ?>">
        <?= $muse["name"]; ?>
        </a>
    </li>
<?php endforeach; ?>
</ul>
    
</body>
</html>