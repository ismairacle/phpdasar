<?php 

    $mahasiswa = [["Ismail", "12345678", "Teknik Informatika", "ismairacle@gmail.com" ],
    ["Jancok", "896873475", "Teknik Geodesi", "apaajar@gmail.com" ],
    ["Roni", "8736287634", "Teknik Mesin", "dflajdhflajdhf@gmail.com"]]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
</head>
<body>

    <h1>Data Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li><?= $mhs[0]; ?></li>
        <li><?= $mhs[1]; ?></li>
        <li><?= $mhs[2]; ?></li>
        <li><?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
<!-- 
    1. membuat array
    2. menampilkan array dengan var_dump dan print_r
    3. menampilkan 1 element pada array menggunakan echo, tapi didalamnya dikasih index
    4. menampilkan array menggunakan looping dengan for dan foreach
    5. menampilkan array didalam array atau array multi dimension dengan array numerik -->






















</body>
</html>