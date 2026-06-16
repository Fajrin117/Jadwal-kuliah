<?php
$servername = "localhost";
$username = "root";
$password = ""; // default XAMPP kosong
$dbname = "toko mysql";

// Bikin koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
echo "Koneksi sukses";

// Tutup koneksi
$conn->close();
?>