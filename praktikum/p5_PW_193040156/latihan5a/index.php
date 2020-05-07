<?php

$conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");

mysqli_select_db($conn, "tubes_193040156") or die("Database salah!");

$result = mysqli_query($conn, "SELECT * FROM elektronik");

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
      <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
          <td><?= $i ?></td>
          <td><img width="200" src="assets/img/<?= $row["foto_produk"]; ?>"></td>
          <td><?= $row["jenis_elektronik"] ?></td>
          <td><?= $row["merk"] ?></td>
          <td><?= $row["type"] ?></td>
          <td><?= $row["harga"] ?></td>
        </tr>
        <?php $i++ ?>
      <?php endwhile; ?>

    </table>
  </div>

</body>

</html>