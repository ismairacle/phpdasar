<?php 
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
        ],
        [
            "name" => "Absolution",
            "year" => "2003",
            "genre" => "Art Rock",
            "label" => "Warner Bros",
            "singles" => [ "Stockholm Syndrome", "Time is Running Out", "Hysteria"],
            "cover" => "absolution.jpg"
        ],
        [
            "name" => "Black Holes & Revelations",
            "year" => "2006",
            "genre" => "Space Rock",
            "label" => "Helium 3",
            "singles" => [ "Starlight", "Supermassive Black Hole", "Knights of Cydonia"],
            "cover" => "blackholes.jpg"
        ],
        [
            "name" => "Resistance",
            "year" => "2009",
            "genre" => "Hard Rock",
            "label" => "EMI Records",
            "singles" => [ "The Resistance", "Uprising", "United States of Eurasia"],
            "cover" => "resistance.jpg" 
        ]
        
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Muse Dischography</title>
</head>
<body>
    <h1>Muse Dischography</h1>
    <?php foreach ($muses as $muse) : ?>
        
        <ul>
            <img src="img/<?= $muse["cover"]; ?>" alt="">
            <li><?= $muse["name"]; ?></li>
            <li><?= $muse["year"]; ?></li>
            <li><?= $muse["genre"]; ?></li>
            <li><?= $muse["label"]; ?></li>
            <li><?= $muse["singles"][0]; ?></li>
            <br>
        </ul>
    <?php endforeach; ?>








</body>
</html>