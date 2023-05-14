<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" type="text/css" href="../style/style_view.css">
  </head>
  <body>
    <div class="container">
      <h2>Daftar Data Mahasiswa</h2>
      <table>
        <tbody>
          <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Program Studi</th>
            <th>Email</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </tbody>
        <?php
        $counter = 1;
        foreach ($proker as $row) {
          echo '<tr>',
          '<td>', $counter++, '</td>',
          '<td>', $row['nim'], '</td>',
          '<td>', $row['nama'], '</td>',
          '<td>', $row['prodi'], '</td>',
          '<td>', $row['email'], '</td>',
          '<td>', '<a href="viewEdit.php?nim=' . $row['nim'] . '" class="button">Edit</a>', '</td>',
          '<td>', '<a href="../model/delete_data.php?nim=' . $row['nim'] . '" class="button">Delete</a>', '</td>',        '</tr>';
        }
        ?>
      </table>
      <a onclick="showForm()" class="tambah-data">Klik untuk tambah Data Mahasiswa</a>

      <form id="form-tambah-data" action="../model/add_data.php" method="post">
        <label for="nim">NIM :</label>
        <input type="text" name="nim" id="nim" required><br>
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" required><br>
        <label for="prodi">Program Studi :</label>
        <input type="text" name="prodi" id="prodi" required><br>
        <label for="email">Email :</label>
        <input type="text" name="email" id="email" required><br>
        <input type="submit" value="Submit">
      </form>

      <form method="POST" action="../model/dataDummy.php">
        <input type="submit" name="submit" value="Tambah Data Dummy">
      </form>

      <form method="POST" action="../model/logout.php">
        <input type="submit" name="submit" value="Logout">
      </form>
    </div>

    <script>
      function showForm() {
        var formTambahData = document.getElementById("form-tambah-data");
        formTambahData.classList.add("show");
      }
    </script>
  </body>
</html>
