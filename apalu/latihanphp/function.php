<?php

    $koneksi = mysqli_connect('localhost','root','','belajarphp');

    function query($query){
        global $koneksi;

        $result = mysqli_query($koneksi,$query);
        $tempatKosong = [];
        while ($row = mysqli_fetch_assoc($result)){
            $tempatKosong []= $row;
        }
        return $tempatKosong;
    }

function tambah($data)
{
    global $koneksi;

    $nama = htmlspecialchars($data ["nama"]);
    $nim = htmlspecialchars($data ["nim"]);
    $email = htmlspecialchars($data ["email"]);
    $jurusan = htmlspecialchars($data ["jurusan"]);

    $query = "INSERT INTO tb_mhs (nama,nim,email,jurusan) VALUES
    ('$nama','$nim','$email','$jurusan')";

    mysqli_query($koneksi,$query);

    return mysqli_affected_rows($koneksi);
}

function ubah($data){
    global $koneksi;

    $id = $data ["id"];
    $nama = htmlspecialchars($data ["nama"]);
    $nim = htmlspecialchars($data ["nim"]);
    $email = htmlspecialchars($data ["email"]);
    $jurusan = htmlspecialchars($data ["jurusan"]);

    $query = "UPDATE tb_mhs SET 
                nama = '$nama',
                nim = '$nim',
                email = '$email',
                jurusan = '$jurusan' 
                WHERE id = '$id'";

    mysqli_query($koneksi,$query);
    
    return mysqli_affected_rows($koneksi);
}

?>