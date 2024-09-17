<?php
// Inisialisasi sesi (session)
session_start();

// Hapus semua variabel sesi
session_unset();

// Hancurkan sesi
session_destroy();

// Redirect ke halaman login atau halaman lain yang sesuai
header("Location: administrator.php");
exit;
?>
