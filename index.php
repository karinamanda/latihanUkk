<?php

require 'functions.php';

$murid = query("SELECT * FROM murid");

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <title>APLIKASI DATA SISWA</title>
</head>

<body>

  <div class="container" style="margin-top: 50px;">
    <h1 class="text-center">DAFTAR SISWA </h1>

    <a href="tambah.php" type="button" style="margin-left:-150px; margin-top: 20px;" class="btn btn-success">+ DATA MURID</a>
    <table class="table table-hover" style="margin-top: 20px; width:1400px; margin-left:-150px;">
      <thead>
        <tr>
          <th>NIS</th>
          <th>NAMA</th>
          <th>JENIS KELAMIN</th>
          <th>TEMPAT LAHIR</th>
          <th>TANGGAL LAHIR</th>
          <th>ALAMAT</th>
          <th>ASAL SEKOLAH</th>
          <th>KELAS</th>
          <th>JURUSAN</th>
          <th>AKSI</th>
        </tr>
      </thead>
      <?php foreach ($murid as $m) : ?>
        <tbody>
          <tr>
            <td><?= $m['nis'] ?></td>
            <td><?= $m['nama'] ?></td>
            <td><?= $m['jk'] ?></td>
            <td><?= $m['tempat_lahir'] ?></td>
            <td><?= $m['tanggal_lahir'] ?></td>
            <td><?= $m['alamat'] ?></td>
            <td><?= $m['asal_sekolah'] ?></td>
            <td><?= $m['kelas'] ?></td>
            <td><?= $m['jurusan'] ?></td>
            <td><a href="edit.php?nis=<?= $m['nis']; ?>" type="button" class="btn btn-warning">EDIT</a> <a href="hapus.php?nis=<?= $m['nis']; ?>" type="button" class="btn btn-danger">DELETE</a></td>
          </tr>
        </tbody>
      <?php endforeach; ?>
    </table>
    <a href="list.php" type="button" class="btn btn-secondary" style="margin-left: 1150px;"> KEMBALI </a>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>