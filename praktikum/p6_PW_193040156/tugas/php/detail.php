<?php

//mengecek apakah ada id yang dikirimkan
//jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
  header("location: ../index.php");
  exit;
}

require 'function.php';

//mengambil id dari url
$id = $_GET['id'];

//melakukan query dengan parameter id yang diambil dari url
$elektronik = query("SELECT * FROM elektronik WHERE id = $id")[0];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail</title>
  <style>
    h3,
    .isi {
      text-align: center;
    }
  </style>
</head>
<h3>Detail elektronik</h3>

<body>

  <div class="isi">
    <div class="gambar">
      <img width="150px" src="../assets/Gambar/<?= $elektronik['foto_produk']; ?>" alt="">
    </div>
    <div class=" keterangan">
      <p><?= $elektronik["jenis_elektronik"] ?></p>
      <p><?= $elektronik["merk"] ?></p>
      <p><?= $elektronik["type"] ?></p>
      <p><?= $elektronik["harga"] ?></p>
    </div>

    <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
  </div>
</body>

</html>