<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php'); 
?>
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="sanss.css">
	<link rel="stylesheet" type="text/css" href="960_12_col.css">
      <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
	<title>Sans</title>
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

<div class="container_12">


	<div class="grid_12">
        <header>
          <img src="koe.png" alt="" class ="gambaratas">
        </header>
    </div>

	<div class="grid_12">
            <div class="profil">
              <table>
            	<br>
                <tbody>
              <tr>
                <td>Nama </td>
                <td>
                <form action="add.php" method="POST" id="form1">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nama" name="nama" required="required" form="form1">
                  </div>
                </form>
                </td>
              </tr>
                  <br>
              <tr>
                <td>Status </td>
                <td>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Status" name="motto" required="required" form="form1">
                  </div>

                </td>
              </tr>
              <tr>
                <td>Npm </td>
                <td>

                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Npm" name="npm" required="required" form="form1">
                  </div>

                </td>
              </tr>
              <tr>
                <td>Jurusan </td>
                <td>

                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Jurusan" name="jurusan" required="required" form="form1">
                  </div>

                </td>
              </tr>
              <tr>
                <td>Fakultas </td>
                <td>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Fakultas" name="Fakultas" required="required" form="form1">
                  </div>

                </td>
              </tr>
              </tbody>
            </table>    
          </div>
    </div>
	
	<div class="grid_12">
		<div class="pendidikan">
		<center><h2>Riwayat Pendidikan</h2></center>
		<table>
			<tr>
            <thead>
              <th scope="col">Jenjang</th>
              <th scope="col">Tempat</th>
            </tr> 
            </thead>
              <tbody>
            <tr>
              <td>SD </td>
              <td>
                <form action="add.php" method="POST" id="form1">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Sekolah Dasar" name="sd" required="required">
                  </div>
                </form>
              </td>
            </tr>
            
            <tr>
              <td>SMP </td>
              <td>

                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Smp Anda" name="smp" required="required" form="form1">
                  </div>
              </td>
            </tr>
            <tr>
              <td>SMA </td>
              <td>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Sma Anda" name="sma" required="required" form="form1">
                  </div>
              </td>
            </tr>  	
            <tr>
              <td>P.Tinggi : </td>
              <td>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Univ Anda" name="univ" required="required" form="form1">
                  </div>
                </td>
              </td>
            </tr>
		</table>

		</div>
    <center><button type="submit" class="btn btn-primary" form="form1">Simpan</button></center>
	</div>

	<br>

    <div class="grid_12">
        <div class="footer">
          <h2>Pemograman Web</h2>
          <h2></h2>
          <a href="https://fb.com/sandy.rizkyando" target="blank"><img src="fb.png" width="30" height="30"/></a>
	      <a href="https://www.instagram.com/sandyrizkyando" target="blank"><img src="ig.png" width="30" height="30"/></a>
		</div>
	</div>

</div>
?>
</body>
</html>