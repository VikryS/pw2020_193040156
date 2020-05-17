<?php
require 'function.php';
$id = $_GET['id'];
$lp = query("SELECT * FROM elektronik WHERE id = $id")[0];
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('data berhasil diubah!');
            document.location.href = 'admin.php';
            </script>";
  } else {
    echo "<script> 
              alert('data gagal diubah!');
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
  <link rel="stylesheet" href="../css/style5.css">
</head>

<body>

  <div class="container">
    <form method="POST">
      <ul align="center">
        <p>
          <input type="hidden" name="id" id="id" value="<?= $lp['id']; ?>">
        </p>
        <p>
          <label for="foto_produk">foto_produk :</label><br>
          <input type="text" name="foto_produk" id="foto_produk" value="<?= $lp['foto_produk']; ?>" autofocus required><br>
        </p>
        <p>
          <label for="jenis_elektronik">jenis_elektronik :</label><br>
          <input type="text" name="jenis_elektronik" id="jenis_elektronik" value="<?= $lp['jenis_elektronik']; ?>" autofocus required><br>
        </p>
        <p>

          <label for="merk">merk :</label><br>
          <input type="textarea" name="merk" id="merk" value="<?= $lp['merk']; ?>" autofocus required>
        </p>
        <p>
          <label for="type">type :</label><br>
          <input type="text" name="type" id="type" value="<?= $lp['type']; ?>" autofocus required>
        </p>
        <p>
          <label for="harga">harga :</label><br>
          <input type="text" name="harga" id="harga" value="<?= $lp['harga']; ?>" autofocus required>
        </p>
        <br>
        <button type="submit" name="ubah" id="s">Ubah data</button>
        <button type="submit" id="k">
          <a href="admin.php">Kembali</a>
        </button>
      </ul>

    </form>
  </div>

</body>

</html>