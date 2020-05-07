<?php
if (!isset($_GET['id'])) {
  header("location: ../index.php");
  exit;
}

require 'function.php';

$id = $_GET['id'];

$laptop = query("SELECT * FROM elektronik WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <img src="../assets/gambar/<?= $laptop['foto_produk']; ?>" alt="" width="250px">
    <div class="keterangan">
      <p><?= $laptop['jenis_elektronik']; ?></p>
      <p><?= $laptop['merk']; ?></p>
      <p><?= $laptop['type']; ?></p>
      <p><?= $laptop['harga']; ?></p>
    </div>

    <a href="../index.php"><button class="tombol_kembali">Kembali</button></a>
  </div>

</body>

</html>