<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php'); 
  $status = '';
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $nama = $_POST['nama'];
      $motto = $_POST['motto'];
      $npm = $_POST['npm'];
      $sd = $_POST['sd'];
      $smp = $_POST['smp'];
      $sma = $_POST['sma'];
      $univ = $_POST['univ'];
      $jurusan = $_POST['jurusan'];
      $fakultas = $_POST['fakultas'];
      //query SQL
      $query = "INSERT INTO biodata (nama, motto, npm, sd, smp, sma, univ, jurusan, fakultas) VALUES('$nama','$motto','$npm','$sd','$smp','$sma','$univ','$jurusan','$fakultas')"; 
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