<?php
include('koneksiMVC.php');

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$email = $_POST['email'];

$stmt = $mysqli->prepare("INSERT INTO mahasiswa (nim, nama, prodi, email) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nim, $nama, $prodi, $email);
$result = $stmt->execute();
$stmt->close();

header("Location: ../controller/invoke.php");
exit();
