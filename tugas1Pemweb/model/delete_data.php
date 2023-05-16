<?php
include('koneksiMVC.php');

$nim = $_GET['nim'];

$stmt = $mysqli->prepare("DELETE FROM mahasiswa WHERE nim=?");
$stmt->bind_param("s", $nim);
$stmt->execute();
$stmt->close();

header("Location: ../controller/controller.php");
exit();
?>
