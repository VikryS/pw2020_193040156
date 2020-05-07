<?php
require 'function.php';

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $laptop = query("SELECT * FROM foto_produk WHERE 
                        jenis_elektronik LIKE '%$keyword'OR
                        merk LIKE '%$keyword' OR
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
  <title>Document</title>
  <link rel="stylesheet" href="../css/style3.css">
</head>

<body>


  <div class="container">
    <div class="add">
      <a href="tambah.php"><button id="tambah">Tambah Data</button></a><br><br>
      <a href="../index.php"><button id="tambah">Kembali</button></a>
    </div>

    <div class="logout">
      <a href="logout.php"><button>Logout</button></a>
    </div> <br>
    <form action="" method="GET" align="right">
      <input type="text" name="keyword" size="30" placeholder="cari disini...." autocomplete="off" autofocus>
      <button type="submit" name="cari">Cari</button>
    </form>


    <h1><img src="../assets/gambar/" width="150px" height="150px" align="center">PHONE CELL</h1>

    <table border="1" cellpadding="13" cellspacing="0" class="table">
      <tr id="head">
        <th>Id</th>
        <th>foto_produk</th>
        <th>jenis_elektronik</th>
        <th>merk</th>
        <th>type</th>
        <th>harga</th>
      </tr>
      <?php if (empty($laptop)) : ?>
        <tr>
          <td colspan="4">
            <p style="color : red; font-style:italic;">Tidak Ditemukan</p>
          </td>
        </tr>
      <?php else : ?>

        <?php $i = 1; ?>
        <?php foreach ($laptop as $lp) : ?>

          <tr>
            <td id="tab"><?= $i; ?></td>
            <td id="tab">

              <a href="ubah.php?Id=<?= $lp['Id']; ?>"><button id="b1">Ubah </button></a><br><br>


              <a href="hapus.php?Id=<?= $lp['Id']; ?>" onclick="return confirm('Hapus Data??');"> <button id="b2">Hapus</button></a>


            </td>
            <td id="tab"><?= $lp['jenis_elektronik']; ?></td>
            <td id="tab"><?= $lp['merk']; ?></td>
            <td id="tab"><?= $lp['type']; ?></td>
            <td id="tab"><?= $lp['harga']; ?></td>
            <td><img src="../assets/gambar/<?= $hp['foto_produk']; ?>" alt="" class="gambar"></td>

          </tr>

          <?php $i++; ?>
        <?php endforeach; ?>
      <?php endif; ?>
    </table>

  </div>

</body>

</html>