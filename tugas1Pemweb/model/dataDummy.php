<?php

require "koneksiMVC.php";
for ($x = 1; $x <= 10; $x++) {
    $nim = "Data NIM " . $x;
    $nama = "Data Nama " .  $x;
    $prodi = "Data Prodi " .  $x;
    $email = "Data Email " .  $x;

    $stmt = $mysqli->prepare("INSERT INTO mahasiswa (nim, nama, prodi, email) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nim, $nama, $prodi, $email);
    $result = $stmt->execute();
    $stmt->close();
}

header("Location: ../controller/controller.php");
exit();
 