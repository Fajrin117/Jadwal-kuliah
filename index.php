<?php
$title = "Login";
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
</head>
<body>

<form action="process.php" method="post">
    <table align="center" border="1">
        <caption>Silahkan Login Terlebih Dahulu</caption>

        <tr>
            <td><label for="username">Username</label></td>
            <td>
                <input type="text" placeholder="Masukkan Username"
                       id="username" name="username">
            </td>
        </tr>

        <tr>
            <td><label for="password">Password</label></td>
            <td>
                <input type="password" placeholder="Masukkan Password"
                       id="password" name="password">
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="login" value="Login">
            </td>
        </tr>

    </table>
</form>

</body>
</html>