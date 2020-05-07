<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
}

require 'function.php';
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'admin.php';
            </script>";
  } else {
    echo "<script> 
              alert('data gagal ditambahkan!');
              document.location.href = 'admin.php';
              </script> ";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style4.css">
</head>

<body>

  <div class="container">
    <h1>Data Laptop <br><img src="../assets/gambar/"> Isi disini ya!!</h1>
    <form method="POST">
      <ul align="center">
        <p>
          <label for="foto_produk">foto_produk :</label><br>
          <input type="text" name="foto_produk" id="foto_produk" autofocus required><br>
        </p>
        <p>
          <label for="jenis_elektronik">jenis_elektronik :</label><br>
          <input type="text" name="jenis_elektronik" id="jenis_elektronik" autofocus required><br>
        </p>
        <p>

          <label for="merk">merk :</label><br>
          <input type="textarea" name="merk" id="merk" autofocus required>
        </p>
        <p>
          <label for="type">type :</label><br>
          <input type="text" name="type" id="type" autofocus required>
        </p>
        <p>
          <label for="harga">harga :</label><br>
          <input type="text" name="harga" id="harga" autofocus required>
        </p>
        <br>
        <button type="submit" name="tambah" id="s">Tambah Data</button>
        <button type="submit" id="k">
          <a href="admin.php">Kembali</a>
        </button>
      </ul>

    </form>
  </div>

</body>

</html>