<?php
//function untuk melakukan koneksi ke database
function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
  mysqli_select_db($conn, "tubes_193040156") or die("Database salah!");

  return $conn;
}

//function untuk melakukan query ke database
function query($sql)
{
  $conn = koneksi();
  $result = mysqli_query($conn, "$sql");


  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  $conn = koneksi();
  $foto_produk = htmlspecialchars($data['foto_produk']);
  $jenis_elektronik = htmlspecialchars($data['jenis_elektronik']);
  $merk = htmlspecialchars($data['merk']);
  $type = htmlspecialchars($data['type']);
  $harga = htmlspecialchars($data['harga']);

  $query = "INSERT INTO elektronik
                    VALUES
                        (null, '$foto_produk', '$jenis_elektronik', '$merk', '$type', '$harga');
                ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM elektronik WHERE id = $id");

  return mysqli_affected_rows($conn);
}
function ubah($data)
{
  $conn = koneksi();
  $id = htmlspecialchars($data['id']);
  $foto_produk = htmlspecialchars($data['foto_produk']);
  $jenis_elektronik = htmlspecialchars($data['jenis_elektronik']);
  $merk = htmlspecialchars($data['merk']);
  $type = htmlspecialchars($data['type']);
  $harga = htmlspecialchars($data['harga']);

  $query = "UPDATE elektronik 
            SET 
            foto_produk = '$foto_produk',
            jenis_elektronik = '$jenis_elektronik',
            merk = '$merk',
            type = '$type',
                harga = '$harga'
            WHERE id = $id
                ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
