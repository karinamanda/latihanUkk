<?php

require 'functions.php';

$nis = $_GET['nis'];

if (hapus($nis)) {
  echo "<script>
          alert('DATA BERHASIL DI DIHAPUS !');
          document.location.href = 'index.php';
        </script>";
} else {
  echo "<script>
          alert('DATA GAGAL DI DIHAPUS !');
        </script>";
}
