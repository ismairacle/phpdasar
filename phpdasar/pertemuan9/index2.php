<?php 
//koneksi ke database dengan function mysqli_connect("host", "username", "password", "nama database")

$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// mengamil/data dari tabel mahasiswa dengan function mysqli_query() dengan memasukan koneksi
// dengan mengubah koneksi menjadi variabel
// hati hati dengan menggunakan function mysqli_query tidak diperlihatkan letak kesalahannya
// cara mengakalinya diubah dulu kedalam $result dan menggunakan kondisi if

// create connection
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// check connection
if (!$result) {
    echo mysqli_error($conn);
}



?>












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
    <?php while( $row = mysqli_fetch_assoc($result)) : ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td>
            <a href="">ubah</a>
            <a href="">hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"]; ?>" alt="Gambar <?= $row["nama"]; ?>"></td>
        <td><?= $row["nrp"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endwhile; ?>

</table>
    
</body>
</html>