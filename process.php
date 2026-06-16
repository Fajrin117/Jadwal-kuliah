<?php

if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "username" && $password == "password") {

        $_SESSION['username'] = $username;

        echo "Selamat Datang, " . $_SESSION['username'];

    } else {
        echo "<script>alert('Username atau Password Salah!')</script>";
    }

} else {
    echo "<script>alert('Username atau Password Kosong!')</script>";
}

?>