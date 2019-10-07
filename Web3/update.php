<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php'); 
  $status = '';
  $result = '';
  //melakukan pengecekan apakah ada variable GET yang dikirim
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['npm'])) {
          //query SQL
          $npm_upd = $_GET['npm'];
          $query = "SELECT * FROM biodata WHERE npm = '$npm_upd'"; 
          //eksekusi query
          $result = mysqli_query(connection(),$query);
      }  
  }
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $nama = $_POST['nama'];
      $status = $_POST['status'];
      $npm = $_POST['npm'];
      $sd = $_POST['sd'];
      $smp = $_POST['smp'];
      $sma = $_POST['sma'];
      $univ = $_POST['univ'];
      $jurusan = $_POST['jurusan'];
      $fakultas = $_POST['fakultas'];
    
      //query SQL
      $sql = "UPDATE biodata SET nama='$nama', status='$status', sd='$sd', smp='$smp', sma='$sma', univ='$univ', jurusan='$jurusan', fakultas='$fakultas', WHERE npm='$npm'";
      //eksekusi query
      $result = mysqli_query(connection(),$sql);
      if ($result) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }
      //redirect ke halaman lain
      header('Location: index.php?status='.$status);
  }
  
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Update</title>
    <!-- load css boostrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
  </head>

  <body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Home</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Add Data <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="table.php">Tabel Data</a>
      </li>
    </ul>
  </div>
</nav>

    <div class="container-fluid">
      <div class="row">
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          

          <h2 style="margin: 30px 0 30px 0;">Update Data Mahasiswa</h2>
          <form action="update.php" method="POST">
            <?php while($data = mysqli_fetch_array($result)): ?>
            <div class="form-group">
              <label>Npm</label>
              <input type="text" class="form-control" placeholder="npm mahasiswa" name="npm" value="<?php echo $data['npm'];  ?>" required="required" readonly>
            </div>
            <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" placeholder="Nama mahasiswa" name="nama" value="<?php echo $data['nama'];  ?>" required="required">
            </div>
            <div class="form-group">
              <label>Status</label>
              <input type="text" class="form-control" placeholder="Status" name="status" value="<?php echo $data['Status'];  ?>" required="required">
            </div>
            <div class="form-group">
              <label>Sd</label>
              <input type="text" class="form-control" placeholder="SD" name="sd" value="<?php echo $data['sd'];  ?>" required="required">
            </div>            
            <div class="form-group">
              <label>Smp</label>
              <input type="text" class="form-control" placeholder="Smp" name="smp" value="<?php echo $data['smp'];  ?>" required="required">
            </div>
            <div class="form-group">
              <label>Sma</label>
              <input type="text" class="form-control" placeholder="Sma" name="sma" value="<?php echo $data['sma'];  ?>" required="required">
            </div>
            <div class="form-group">
              <label>Univ</label>
              <input type="text" class="form-control" placeholder="Universitas" name="univ" value="<?php echo $data['univ'];  ?>" required="required">
            </div>
            <div class="form-group">
              <label>Jurusan</label>
              <input type="text" class="form-control" placeholder="Jurusan" name="jurusan" value="<?php echo $data['jurusan'];  ?>" required="required">
            </div>
            <div class="form-group">
              <label>Fakultas</label>
              <input type="text" class="form-control" placeholder="Fakultas" name="fakultass" value="<?php echo $data['fakultas'];  ?>" required="required">
            </div>
            <?php endwhile; ?>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </main>
      </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>