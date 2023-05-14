<?php
include('koneksiMVC.php');

$nim = $_GET['nim'];

$stmt = $mysqli->prepare("SELECT * FROM mahasiswa WHERE nim=?");
$stmt->bind_param("s", $nim);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$stmt->close();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $email = $_POST['email'];

    $stmt = $mysqli->prepare("UPDATE mahasiswa SET nama=?, prodi=?, email=? WHERE nim=?");
    $stmt->bind_param("ssss", $nama, $prodi, $email, $nim);
    $stmt->execute();
    $stmt->close();

    header("Location: ../controller/invoke.php");
    exit();
}


?>
