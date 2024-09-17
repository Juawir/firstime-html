<?php 
require_once "function.php";

$id = $_GET["Noid"];

$mhs = query("SELECT * FROM tb_mhs WHERE id = $id") [0];

if(ISSET($_POST['submit'])) 
{
    if(ubah($_POST) > 0) {
        echo "<script>
        alert('data berhasil diubah');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
        alert('data gagal diubah');
        document.location.href = 'index.php';
        </script>";
    }
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menambahkan data</title>
</head>
<body>
    <form action="" method="post">
        <ul>
            <li>
            <input type="hidden" name="id" value="<?= $mhs["id"];?>">
            </li>
            <li>
                <label for="nama">nama</label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"];?>">
            </li>
            
            <li>
                <label for="nim">NAMA</label>
                <input type="text" name="nim" id="nim" required value="<?= $mhs["nim"];?>">
            </li>

            <li>
                <label for="email">EMAIL</label>
                <input type="text" name="email" id="email" required value="<?= $mhs["email"];?>">
            </li>

            <li>
                <label for="jurusan">JURUSAN</label>
                <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"];?>">
            </li>

            <li>
                <button type="submit" name ="submit" value ="submit">TAMBAH DATA</button>
            </li>
        </ul>
    </form>
</body>
</html>