<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php'); 
  $status = '';
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $npm = $_POST['npm'];
      $nama = $_POST['nama'];
      $jurusan = $_POST['jurusan'];
      $fakultas = $_POST['fakultas'];
      //query SQL
      $query = "INSERT INTO mhs (npm, nama, jurusan, fakultas) VALUES('$npm','$nama','$jurusan','$fakultas')"; 
      //eksekusi query
      $result = mysqli_query(connection(),$query);
      if ($result) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }
      header('Location: index.php?status='.$status);
  }
?>