<?php 
require 'functions.php'; //menghubungkan ke file function.php

$mahasiswa = query("SELECT * FROM mahasiswa");




?>
<!-- 
1. koneksi data ke database
2. mengambil data dalam table
3. menampilkan data yang ada di dalam database
4. memisahkan fungsi ke functions.php
 -->

<!-- analogi lemari
index2.php = teman mengambilkan lemari dan kita yang memilih
index.php = teman mengambilkan wadah yang isinya sudah ada baju yang dipilih -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Admin</title>
</head>
<body>

<!-- halaman index ini akan dipakai oleh admin untuk membuka dan mengedit database -->
<h1>Halaman Admin</h1>

<a href="tambah.php">Tambah data Mahasiswa</a><br>
<br>
<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($mahasiswa as $row) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="">ubah</a> |
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"]; ?>" alt="Gambar <?= $row["nama"]; ?>"></td>
        <td><?= $row["nrp"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

</table>
    
</body>
</html>