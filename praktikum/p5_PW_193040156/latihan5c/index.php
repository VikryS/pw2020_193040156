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
    <?php foreach ($elektronik as $ek) : ?>
      <p class="nama">
        <a href="php/detail.php?id=<?= $ek['id'] ?>">
          <?= $ek["merk"] ?>
        </a>
      </p>
    <?php endforeach; ?>

    </table>
  </div>

</body>

</html>