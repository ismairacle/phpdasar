<?php 
require 'functions.php';

$id = $_GET['id'];


$mhs = query("SELECT * FROM mahasiswa WHERE id=$id")[0];

if (isset($_POST["submit"])) {

    // cek data apakah berhasil diubah atau tidak
    if (update($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diupdate!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diupdate!');
            </script>
        ";
    }
}
    





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Data Mahasiswa</title>
</head>
<body>
    <h1>Update Data Mahasiswa</h1>

    <form action="" method="post">
        <table>
            <tr>
                <td></td>
                <td></td>
                <td><input type="hidden" name="id" id="id" required value="<?= $mhs["id"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="nama">Nama  </label></td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="nrp">NRP  </label></td>
                <td>:</td>
                <td><input type="text" name="nrp" id="nrp" required value="<?= $mhs["nrp"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="email">Email  </label></td>
                <td>:</td>
                <td><input type="text" name="email" id="email" required value="<?= $mhs["email"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="jurusan">Jurusan  </label></td>
                <td>:</td>
                <td><input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="gambar">Gambar  </label></td>
                <td>:</td>
                <td><input type="text" name="gambar" id="gambar" value="<?= $mhs["gambar"]; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit" name="submit">Update Data</button></td>
            </tr>
        </table>
    </form>

    <a href="index.php">Kembali ke Halaman Utama</a>

</body>
</html>