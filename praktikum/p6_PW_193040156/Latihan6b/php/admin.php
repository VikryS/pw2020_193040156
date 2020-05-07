<?php
//menghubungkan dengan file php lainnya
require 'function.php';

//melakukan query
$elektronik = query("SELECT * FROM elektronik");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
</head>

<body>
  <div class="add">
    <a href="tambah.php">Tambah Data</a>
  </div>
  <table border="1" cellpadding="13" cellspacing="0">

    <tr>
      <th>id</th>
      <th>foto_produk</th>
      <th>jenis_elektronik</th>
      <th>merk</th>
      <th>Harga</th>
    </tr>
    <?= $i = 1; ?>
    <?php foreach ($elektronik as $e) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href=""><button>Ubah</button></a>
          <a href=""><button>Hapus</button></a>
        </td>
        <td><img width="150px" src="../assets/Gambar/<?= $e['foto_produk']; ?>"></td>
        <td><?= $e['jenis_elektronik']; ?></td>
        <td><?= $e['merk']; ?></td>
        <td><?= $e['type']; ?></td>
        <td><?= $e['harga']; ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  </table>
</body>

</html>