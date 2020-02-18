<?php
    //jika argumen nya kosong atau lebih sedikit dari parameter maka kita bisa menggunakan 
    //parameter default, karena untuk di php jumlah parameter dan argumen harus sama
    // jika argumennya kosong akan menampilkan parameter default ($waktu="Pagi", $nama="Ismail")
    // tapi jika argumennya diisi maka akan mengikiti argumen yang diisi
    function salam ($waktu="Pagi", $nama="Ismail") {
        return "Selamat $waktu, $nama";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan User Defined Function</title>
</head>
<body>
    <h1><?php echo salam();?><h1>

</body>
</html>
