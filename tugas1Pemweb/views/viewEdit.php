<?php 

session_start();
if (!isset($_SESSION['status']) || $_SESSION['status'] != 'admin') {
    header('Location: ../index.php');
    exit;
}

require "../model/edit_data.php";
?>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link rel="stylesheet" type="text/css" href="../style/style_edit_data.css">

</head>

<body>
    <h2>Edit Data Mahasiswa</h2>
    <form action="" method="post">
        <!-- <label for="no">No :</label>
        <input type="text" name="no" id="no" value="<?php echo $row['no']; ?>" required><br> -->
        <label for="nim">NIM :</label>
        <input type="text" name="nim" id="nim" value="<?php echo $row['nim']; ?>" readonly><br>
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" value="<?php echo $row['nama']; ?>" required><br>
        <label for="prodi">Program Studi:</label>
        <input type="text" name="prodi" id="prodi" value="<?php echo $row['prodi']; ?>" required><br>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" value="<?php echo $row['email']; ?>" required><br>
        <input type="submit" value="Simpan">
    </form>

</body>

</html>