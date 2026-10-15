<?php
// Sesuaikan host, user, password, dan nama database dengan Laragon Anda
$conn = mysqli_connect('127.0.0.1', 'root', 'root', 'paw_modul2_showroom');

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

mysqli_set_charset($conn, 'utf8mb4');
?>