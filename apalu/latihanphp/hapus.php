<?php 
// koneksi database
include 'function.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['Noid'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from tb_mhs where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>