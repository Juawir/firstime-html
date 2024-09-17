<?php
require_once "function.php";

if(ISSET($_POST["submit"]))
{
    if(tambah($_POST) > 0)

    echo "<script>
    alert('data berhasil ditambahkan');
    document.location.href='index.php';
    </script>";
}else{
    $error_message = mysqli_connect_error();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menambahkan Data</title>
</head>
<body>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama"> NAMA</label>
                <input type="text" name="nama" id="nama">
            </li>
        
        
            <li>
                <label for="nim"> NIM</label>
                <input type="text" name="nim" id="nim">
            </li>
        
        
            <li>
                <label for="email">EMAIL</label>
                <input type="text" name="email" id="email">
            </li>
        
        
            <li>
                <label for="jurusan">JURUSAN</label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
            <button type="submit" name="submit" value="submit">ADD DATA</button>
            </li>
        </ul>
    </form>
</body>
</html>
