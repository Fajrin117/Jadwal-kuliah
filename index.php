<!DOCTYPE html>
<html>
<head>
    <title>Background Color Dinamis </title>
</head>

<?php
$warna = "white";

if(isset($_POST['ubah'])){
    $warna = $_POST['warna'];
}
?>

<body style="background-color: <?php echo $warna; ?>;">

    <h2>Membuat Background Color Dinamis  </h2>

    <form method="POST">
        <label>Pilih Warna:</label>

        <select name="warna">
            <option value="white">Putih</option>
            <option value="red">Merah</option>
            <option value="blue">Biru</option>
            <option value="green">Hijau</option>
            <option value="yellow">Kuning</option>
            <option value="pink">Pink</option>
        </select>

        <input type="submit" name="ubah" value="Ubah Warna">
    </form>

</body>
</html>