<?php
require_once "function.php";
$mahasiswa = query ("SELECT * FROM tb_mhs");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pelatihan PhP</title>
</head>
<body>
    <a href="a"></a>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">TAMBAH MAHASISWA</a>
    
    <br><br>
    <!-- input pencarian -->
    <form action="" method="post">
    <input type="text" name="keyword" size="40" autofocus
    placeholder="masukkan keyword pencarian"
    autocomplete="off">
    <button type="submit" name="cari">CARI</button>
    <br><br>
    </form>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>nim</th>
            <th>email</th>
            <th>jurusan</th>
            <th>aksi</th>
        </tr>

        <?php $id = 1; ?>
        <?php foreach ($mahasiswa as $mhs):?>
    <tr>
            <td><?= $id; ?></td>
            <td><?= $mhs["nama"]; ?></td>
            <td><?= $mhs["nim"]; ?></td>
            <td><?= $mhs["email"]; ?></td>
            <td><?= $mhs["jurusan"]; ?></td>
        
        <td>
        <a href="update.php?Noid=<?=$mhs["id"]?> ">Update</a>
        <a href="hapus.php?Noid=<?=$mhs['id']?>">Hapus</a>
        </td>
    </tr>
    <?php $id++; endforeach; ?>
    </table>
</body>
</html>