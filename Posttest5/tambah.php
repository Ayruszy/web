<?php
require "koneksi.php";

if (isset($_POST["tambah"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $discord = $_POST["discord"];

    $result = mysqli_query($conn, "insert into akun 
        (id, password, email, discord) 
        values ('', '$password', '$email', '$discord')");

    if ($result) {
        echo "
                <script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'index.php';
                </script>
            ";
    } else {
        echo "
            <script>
            alert('Data Gagal Ditambahkan!');
            document.location.href = 'tambah.php';
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
    <title>Selamat Datang Di Puskesemas</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="input">
        <h1>Masukkan Data</h1>
        <form action="" method="post">
            <div class="box-input">
                <i class="fa fa-envelope-open-text"></i> 
                <input type="email" placeholder="Email" name="email" id="">
            </div>
            <div class="box-input">
                <i class="fa fa-lock"></i>
                <input type="password" placeholder="Password" name="password" id="">
            </div>
            <div class="box-input">
                <i class="fa-brands fa-discord"></i>
                <input type="discord" placeholder="Discord" name="discord" id="">
            </div>
            <button type="submit" name="tambah" class="btn-input">Tambahkan</button>
            <div class="bottom">
                <p>Perlu Terdaftar
                    <a href="#">Nggak Ya? Yaudah</a>
                </p>
            </form>
    </div>
</body>
</html>
