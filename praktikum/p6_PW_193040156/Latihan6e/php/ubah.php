<?php
require 'function.php';

$id = $_GET['id'];

$e = query("SELECT * FROM elektronik WHERE id = $id")[0];


if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
          alert('Data Berhasil diubah!');
          document.location.href = 'admin.php';
          </script>";
  } else {
    "<script>
          alert('Data Gagal diubah!');
          document.location.href = 'admin.php';
          </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Ubah Data Barang</title>
</head>

<body>
  <h3>Form Ubah Data Barang</h3>
  <form action="" method="post">
    <input type="hidden" name="id" id="id" value="<?= $e['id']; ?>">
    <ul>

      <li>
        <label for="foto_produk">Foto Produk :</label><br>
        <input type="text" name="foto_produk" id="foto_produk" required><br><br>
      </li>

      <li>
        <label for="jenis_elektronik">Jenis Elektronik :</label><br>
        <input type="text" name="jenis_elektronik" id="jenis_elektronik" required><br><br>
      </li>

      <li>
        <label for="type">Type :</label><br>
        <input type="text" name="type" id="type" required><br><br>
      </li>

      <li>
        <label for="merk">Merk :</label><br>
        <select type="text" name="merk" id="merk" required><br>
          <option value="">---Merk Yang Tersedia---</option>
          <option value="MSI">MSI</option>
          <option value="ACER">ACER</option>
          <option value="ASUS">ASUS</option>
          <option value="ALIEN">ALIEN</option>
        </select>
      </li>

      <li>
        <label for="harga">Harga :</label><br>
        <input type="text" name="harga" id="harga" required value="<?= $e['harga']; ?>"><br><br>
      </li>
      <br>
      <button type="submit" name="ubah">Ubah Data!</button>
      <button type="submit">
        <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
      </button>
    </ul>
  </form>
</body>

</html>