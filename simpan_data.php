<?php
// Cek apakah data dikirimkan melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir pendaftaran
    $nama = $_POST["nama"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $nomor_handphone = $_POST["nomor_handphone"];
    $alamat = $_POST["alamat"];

    // Sekarang Anda bisa melakukan apa pun dengan data ini,
    // seperti menyimpannya ke database atau menyimpan ke file, dll.
    // Contoh penyimpanan ke database:
    
    // Buat koneksi ke database
    $db_host = 'localhost'; // Ganti dengan host database Anda
    $db_user = 'root'; // Ganti dengan username database Anda
    $db_password = ''; // Ganti dengan password database Anda
    $db_name = 'kopi_db'; // Ganti dengan nama database Anda

    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    if ($conn->connect_error) {
        die("Koneksi database gagal: " . $conn->connect_error);
    }

    // Lakukan penyimpanan data ke database
    $sql = "INSERT INTO users (nama, username, email, password, nomor_handphone, alamat) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $nama, $username, $email, $password, $nomor_handphone, $alamat);

    if ($stmt->execute()) {
        echo "Pendaftaran berhasil. Silakan login.";
        header("Location: index.html");
    } else {
        echo "Pendaftaran gagal. Silakan coba lagi.";
    }

    // Tutup koneksi database
    $conn->close();
}
?>
