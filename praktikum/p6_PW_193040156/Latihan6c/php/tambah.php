<?php
require 'function.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
          alert('Data Berhasil ditambahkan! ');
          document.location.href = 'admin.php';
          </script>";
  } else {
    "<script>
          alert('Data Gagal ditambahkan! ');
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
  <title>Tambah Data</title>
</head>

<body>
  <h3>Form Tambah Data Barang</h3>
  <form action="" method="post">
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
        <input type="text" name="harga" id="harga" required><br><br>
      </li>
      <br>
      <button type="submit" name="tambah">Tambah Data!</button>
      <button type="submit">
        <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
      </button>
    </ul>
  </form>
</body>

</html>