<?php
//pengulangan array menggunakan for dan foreach

$angka = [3, 2, 37, 8, 98, 76, 32, 29, 98, 99];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MPengulangan Pada Array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            float: left;
            margin: 3px;
        }
        .clear {
            clear: both;
        }
    </style>
</head>

<!-- 
fungsi count() digunakan untuk menghitung elemen yang ada dalam array secara otomatis apabila 
ditambahkan menggantikan $i < 7 ( jumlah element/angka didalam array) -->

<body>


    <!-- 1. for -->
    <?php for( $i = 0; $i < count($angka); $i++) { ?>
    <div class="kotak"><?= $angka[$i]; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <!-- 2 foreach -->
    <?php foreach ( $angka as $a) { ?>
        <div class="kotak"><?php echo $a; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <!-- memperbaiki syntax dengan templating agar lebih ringkas (ini cara yang terbaik) -->
    <?php foreach ( $angka as $a ) : ?>
        <div class="kotak"><?= $a; ?></div>
    <?php endforeach; ?>














</body>
</html>