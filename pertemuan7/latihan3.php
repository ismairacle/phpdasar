<!-- perbedaan get dan post adalah
get => mengirimkan data lewat url sehingga user dapat melihat data yang kita kirimkan
post => mengirimkan data lewat form dan tidak ditampilkan di url sehingga user tidak bisa melihat data yang kita kirimkan -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan POST</title>
</head>
<body>
<!-- atribut action dan method harus diisi karena untuk menentukan kemana data itu akan dikirim
dan akan menggunakan metode seperti apa untuk mengirimkan data tersebut -->

<!-- <?php if (isset($_POST["submit"])) : ?> 
    <h1>Hallo, Selamat Datang<?= $_POST["nama"]; ?></h1>

<?php endif; ?> -->

<form action="latihan4.php" method="post">
    Masukan Nama :
    <input type="text" name="nama">
    <br>
    <button type="submit" name="submit">Kirim!!!</button>
</form>
    
</body>
</html>