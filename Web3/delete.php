<?php 
  include ('conn.php'); 
  $status = '';
  $result = '';
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['npm'])) {
          //query SQL
          $del_npm = $_GET['npm'];
          $query = "DELETE FROM biodata WHERE npm = '$del_npm'"; 
          //eksekusi query
          $result = mysqli_query(connection(),$query);
          if ($result) {
            $status = 'ok';
          }
          else{
            $status = 'err';
          }
          //redirect ke halaman lain
          header('Location: index.php?status='.$status);
      }  
  }