<?php

require 'php/functions.php';

$elektronik = query("SELECT * FROM elektronik")
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <table cellpadding="10" cellspacing="0" border="1">
      <tr>
        <th>id</th>
        <th>foto_produk</th>
        <th>jenis_elektronik</th>
        <th>merk</th>
        <th>type</th>
        <th>harga</th>
      </tr>
      <?php $i = 1 ?>
      <?php foreach ($elektronik as $ek) : ?>
        <tr>
          <td><?= $i ?></td>
          <td><img width="200" src="assets/img/<?= $ek["foto_produk"]; ?>"></td>
          <td><?= $ek["jenis_elektronik"] ?></td>
          <td><?= $ek["merk"] ?></td>
          <td><?= $ek["type"] ?></td>
          <td><?= $ek["harga"] ?></td>
        </tr>
        <?php $i++ ?>
      <?php endforeach; ?>

    </table>
  </div>

</body>

</html>