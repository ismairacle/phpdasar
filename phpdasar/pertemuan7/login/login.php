<?php 
// 1. cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
// 2. cek username dan password
    if ($_POST["username"] == "admin" && $_POST["password"] =="123" ) {
    // 3. jika usernmae dan password benar maka arahkan ke page admin.php
        header("Location: admin.php");
        exit;
    }
    else {
        // 4. jika password dan usernam salah maka beritahu user bahwa data yang dimasukan salah
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Login Admin</h1>

    <?php if(isset($error)) : ?>
    <p>password atau username salah!!</p>
    <?php endif; ?>
    
    <ul>
    <form action="" method="post"></form>
        <li>
            <label for="username"> Username :</label>
            <input type="text" name="username" id="username">
        </li>
        <br>
        <li>
            <label for="Password"> Password :</label>
            <input type="password" name="password" id="password">
        </li>
        <br>
        <li>
            <button type="submit">Login</button>
        </li>
    </ul>
</body>
</html>