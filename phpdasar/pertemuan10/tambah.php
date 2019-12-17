<?php 
    require'functions.php';

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
                    alert('data berhasil ditambahkan!');
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
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp" required>
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>

    <a href="index.php">Kembali ke Halaman Utama</a>

</body>
</html>