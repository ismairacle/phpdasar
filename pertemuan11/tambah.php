<?php 
   require 'functions.php';

    if ( isset($_POST["submit"]) ) {
        if (tambah($_POST) > 0) { //data yang diinputkan ditambah dan diambil oleh $data
            echo "
                <script>
                    alert('data berhasil ditambahkan!');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('data gagal ditambahkan!');
                </script>
            ";
        }
    
   
    
   
    }
    // 1. koneksi ke database
    // 2. cek apakah tombol tambah data sudah di tekan apa belum
    // 3. ambil data dari tiap element kedalam form (menyiapkan data dari tiap element kedalam tiap tiap variabel)
    // 4. query insert data (menyiapkan query datanya kedalam variabel query)
    // 5. ambil/query data, dari data yang diinputkan kedalam database
    // 6. cek apakah data berhasil ditambahkan atau tidak
    // 7. pindahkan logicnya kedalam funtions.php
    // 8. user harus mengisi seluruh form agar data tidak ada yang kosong caranya menambahkan atribut required pada setiap form
    // 9. function htmlspecialchars() sangat penting supaya website kita tidak mudah di hack




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post">
        <table>
            <tr>
                <td><label for="nama">Nama  </label></td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama" required></td>
            </tr>
            <tr>
                <td><label for="nrp">NRP  </label></td>
                <td>:</td>
                <td><input type="text" name="nrp" id="nrp" required></td>
            </tr>
            <tr>
                <td><label for="email">Email  </label></td>
                <td>:</td>
                <td><input type="text" name="email" id="email" required></td>
            </tr>
            <tr>
                <td><label for="jurusan">Jurusan  </label></td>
                <td>:</td>
                <td><input type="text" name="jurusan" id="jurusan" required></td>
            </tr>
            <tr>
                <td><label for="gambar">Gambar  </label></td>
                <td>:</td>
                <td><input type="text" name="gambar" id="gambar"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit" name="submit">Tambah Data</button></td>
            </tr>
        </table>
    </form>

    <a href="index.php">Kembali ke Halaman Utama</a>

</body>
</html>