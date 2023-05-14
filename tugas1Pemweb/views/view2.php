<?php

if (!isset($_SESSION['status']) || $_SESSION['status'] != 'guest') {
    header('Location: ../index.php');
    exit;
}
?>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tamu</title>
    <link rel="stylesheet" type="text/css" href="../style/style_view.css">
</head>

<body>
    <div class="container">
        <h2>Daftar Data Mahasiswa</h2>
        <table>
            <tbody>
                <tr>
                    <td>No</td>
                    <td>NIM</td>
                    <td>Nama</td>
                    <td>Program Studi</td>
                    <td>Email</td>
                </tr>
            </tbody>
            <?php
            $counter = 1;
            foreach ($proker as $row) {
                echo '<tr>',
                '<td>', $counter++, '</td>',
                // '<td>', $row['no'], '</td>',
                '<td>', $row['nim'], '</td>',
                '<td>', $row['nama'], '</td>',
                '<td>', $row['prodi'], '</td>',
                '<td>', $row['email'], '</td>',
                '</tr>';
            }
            ?>
        </table>
        <form method="POST" action="../model/logout.php">
            <input type="submit" name="submit" value="back?">
        </form>


    </div>

</body>