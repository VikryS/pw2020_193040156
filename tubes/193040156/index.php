<?php
require 'php/function.php';

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $laptop = query("SELECT * FROM elektronik WHERE 
                          jenis_elektronik LIKE '%$keyword%' OR
                          merk LIKE '%$keyword%' OR
                          type LIKE '%$keyword%' OR
                          harga LIKE '%$keyword%'");
} else {
  $laptop = query("SELECT * FROM elektronik");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style2.css">
  <title>ELEKTRONIK</title>
</head>

<body>
  <div class="container">
    <h1><img width="150px" src="assets/gambar/" alt="" width="150px">Laptop </h1>
    <div class="daftar">
      <form action="" method="GET" align="center">
        <input type="text" name="keyword" size="30" placeholder="cari disini...." autocomplete="off" autofocus>
        <button type="submit" name="cari">Cari</button>
      </form>
      <?php if (empty($laptop)) : ?>
        <tr>
          <td colspan="4">
            <p style="color : red; font-style:italic;">Tidak Ditemukan</p>
          </td>
        </tr>
      <?php else : ?>

        <?php foreach ($laptop as $lp) : ?>
          <p class="foto_produk">
            <button class="bt">
              <a href="php/detail.php?id=<?= $lp['id'] ?>" class="foto_produk">
                <?= $lp["foto_produk"] ?>
              </a>
            </button>
          </p>
        <?php endforeach; ?>
      <?php endif; ?>
      <a href="php/login.php"><button class="add">Masuk Kehalaman Admin</button></a>
    </div>
  </div>

</body>

</html>