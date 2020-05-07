<?php
if (!isset($_GET['id'])) {
  header("location: ../index.php");
  exit;
}
require 'functions.php';
$id = $_GET['id'];
$elektronik = query("SELECT * FROM elektronik WHERE id + $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <div class="gambar">
      <img width="200" src="../assets/img/<?= $elektronik["foto_produk"]; ?>" alt="">
    </div>
    <div class="keterangan">
      <p><?= $elektronik["jenis_elektronik"]; ?></p>
      <p><?= $elektronik["merk"]; ?></p>
      <p><?= $elektronik["type"]; ?></p>
      <p><?= $elektronik["harga"]; ?></p>
    </div>
    <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
  </div>
</body>

</html>