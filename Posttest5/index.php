<?php
require "koneksi.php";

$result = mysqli_query($conn, "select * from akun");

$akun = [];

while ($row = mysqli_fetch_assoc($result)) {
    $akun[] = $row;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seluruh Data Pengunjung</title>
    <link rel="stylesheet" href="crud.css">

</head>

<body>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Email</th>
            <th>Password</th>
            <th>Discord</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php $i = 1;
        foreach ($akun as $akn) : ?>
            <tr>
                <td> <?= $i; ?> </td>
                <td> <?php echo $akn["email"] ?> </td>
                <td> <?= $akn["password"] ?> </td>
                <td> <?= $akn["discord"] ?> </td>
                <td><a href="edit.php?id=<?=$akn["id"];?>">Edit Coy</a></td>
                <td><a href="hapus.php?id=<?=$akn["id"];?>">Hapus Coy</a>
                </td>
            </tr>
        <?php $i++;
        endforeach; ?>
        <tr class=home>
        <th colspan="6 "><a href="index.html">Kembali Ke Beranda </a></th>
        </tr>
    </table>
</body>

</html>