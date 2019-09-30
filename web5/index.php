<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php'); 
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Mahasiswa</title>
    <!-- load css boostrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Pemrograman Web</a>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column" style="margin-top:100px;">
               <li class="nav-item">
                <a class="nav-link active" href="<?php echo "index.php"; ?>">Data Mahasiswa</a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <?php 
            //mengecek apakah proses update dan delete sukses/gagal
            if (@$_GET['status']!==NULL) {
              $status = $_GET['status'];
              if ($status=='ok') {
               echo '<br><br><div class="alert alert-success" role="alert">Data Mahasiswa berhasil di-update</div>';
              }
              elseif($status=='err'){
                echo '<br><br><div class="alert alert-danger" role="alert">Data Mahasiswa gagal di-update</div>';
              }
            }
           ?>
           <br>
          <h2 style="margin: 30px 0 30px 0;">Mahasiswa</h2>
          <div class="table-hover">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Npm</th>
                  <th>Nama</th>
                  <th>Jurusan</th>
                  <th>Fakultas</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  //proses menampilkan data dari database:
                  //siapkan query SQL
                  $query = "SELECT * FROM mhs";
                  $result = mysqli_query(connection(),$query);
                 ?>

                 <?php while($data = mysqli_fetch_array($result)): ?>
                  <tr>
                    <td><?php echo $data['npm'];  ?></td>
                    <td><?php echo $data['nama'];  ?></td>
                    <td><?php echo $data['jurusan'];  ?></td>
                    <td><?php echo $data['fakultas'];  ?></td>
                    <td>
                      <a href="<?php echo "delete.php?npm=".$data['npm']; ?>" class="btn btn-outline-danger btn-sm"> Delete</a>
                    </td>
                  </tr>
                 <?php endwhile ?>
              </tbody>
            </table>
          </div>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Add
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Masukkan Data</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              <div class="modal-body">
                <form action="form.php" method="POST">
                  <div class="form-group">
                    <label>Npm</label>
                    <input type="text" class="form-control" placeholder="Npm mahasiswa" name="npm" required="required">
                  </div>
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" placeholder="Nama mahasiswa" name="nama" required="required">
                  </div>
                  <div class="form-group">
                    <label>Jurusan</label>
                    <input type="text" class="form-control" placeholder="Jurusan" name="jurusan" required="required">
                  </div>
                  <div class="form-group">
                    <label>Fakultas</label>
                    <input type="text" name="fakultas" placeholder="Fakultas" class="form-control" required="required"></input>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
              </div>
            </form>
            </div>
          </div>

        </main>
      </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>