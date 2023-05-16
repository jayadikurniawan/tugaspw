<?php
session_start();
include('koneksiMVC.php');

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sanitized_username = mysqli_real_escape_string($mysqli, $username);
    $sanitized_password = mysqli_real_escape_string($mysqli, $password);

    $query = "SELECT * FROM user WHERE username = '$sanitized_username' AND password = '$sanitized_password'";
    $result = mysqli_query($mysqli, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        // Login berhasil
        $_SESSION['status'] = 'admin';
        header('Location: controller/controller.php');
        exit;
    } else {
        // Login gagal
        $error = "";
    }
}
?>