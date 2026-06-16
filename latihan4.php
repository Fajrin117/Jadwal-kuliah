<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "toko mysql";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "SELECT * FROM barang";
$result = $conn->query($sql);

echo "<h2>Latihan 4: Tampilkan Data Barang</h2>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id_barang"] . " | ";
        echo "Nama: " . $row["nama_barang"] . " | ";
        echo "Tgl Masuk: " . $row["tgl_masuk"] . " | ";
        echo "Harga: Rp " . number_format($row["harga"]) . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>