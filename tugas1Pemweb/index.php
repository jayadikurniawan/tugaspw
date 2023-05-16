<?php
require('model/login.php');
?>


<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="style/style_index.css">

</head>

<body>
    <br><br><br>
    <form method="POST" action="controller/controller.php">
        <label>Lihat data sebagai Tamu?</label>
        <input type="submit" name="view" value="Lihat">
        <?php
        $_SESSION['status'] = 'guest';
        ?>
    </form>


    <h2>Atau</h2>
    <form method="POST">
        <h2>Login as an Admin</h2>
        <label>Username:</label><br>
        <input type="text" name="username"><br>
        <label>Password:</label><br>
        <input type="password" name="password"><br>
        <br>
        <input type="submit" name="submit" value="Login">

        <?php if (isset($error)) : ?>
            <p style="color: red;"><?php echo "Username atau password salah!"; ?></p>
        <?php endif; ?>
    </form>


</body>

</html>