<?php
session_start();

// Fungsi untuk melakukan autentikasi
function authenticate($username, $password, $conn) {
    $sql = "SELECT * FROM administrator WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows == 1) {
            return true; // Autentikasi berhasil
        }
    }
    return false; // Autentikasi gagal
}

// Buat koneksi ke database
$db_host = 'localhost'; // Ganti dengan host database Anda
$db_user = 'root'; // Ganti dengan username database Anda
$db_password = ''; // Ganti dengan password database Anda
$db_name = 'kopi_db'; // Ganti dengan nama database Anda

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

// Cek apakah ada data POST yang dikirimkan
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (authenticate($username, $password, $conn)) {
        // Login berhasil, arahkan pengguna ke halaman beranda
        header("Location: indexlogadmin.html");
        exit();
    } else {
        $message = "Login gagal. Silakan coba lagi.";
        echo json_encode(array('message' => $message));
    }
}

// Tutup koneksi database
$conn->close();
?>
