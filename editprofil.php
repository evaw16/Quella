<?php
require_once("init.php");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quella</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body style="background:url('assets/img/xx.png')" width="20%">
  <center><img src="assets/img/1-1.png" width="25%" style="margin-top:20px;"></center>
  <br>
  <div class="container">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="collapse navbar-collapse fixed-on-top" id="navcol-1">
          <ul class="nav navbar-nav">
            <li role="presentation"><a href="pembeli.php">Home</a></li>
            <li role="presentation"><a href="keranjang.php">Keranjang</a></li>
            <li role="presentation"><a href="transaksi.php">Transaksi</a></li>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> LOGOUT</a></li>
        </ul>
      </nav>
      <div class="col-xs-12 col-md-6">
        <div class="panel panel-default" style="width:900px; height:500px;">
          <div class="panel-heading">
            <h3 class="panel-title">Profile</h3>
            <span class="text-grey"></span>
          </div>
          <div class="panel-body">
            <?php
            $id = $_SESSION['id_user'];
            $sql = "select * from user where id_user = $id";
            $result = mysqli_query($con,$sql);
            while ($item = mysqli_fetch_array($result)) {
              ?>
              <form class="form-horizontal" method="post">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control input-lg" placeholder="Nama" name="nama" value="<?=$item['nama']?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control input-lg" placeholder="Username" name="username" value="<?=$item['username']?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control input-lg" placeholder="Alamat" name="alamat" value="<?=$item['alamat']?>"required >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Provinsi</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control input-lg" placeholder="Provinsi" name="provinsi" value="<?=$item['provinsi']?>"required >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Kota</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control input-lg" placeholder="Kota" name="kota" value="<?=$item['kota']?>"required >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">No. Hp</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control input-lg" placeholder="No. Hp" name="notelp" value="<?=$item['notelp']?>"required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input name="submit" value="Update" type="submit" class="btn btn-primary">
                  <button type="reset" class="btn btn-default">Cancel</button>
                </div>
              </div>
            </form>
          <?php } ?>
        </div>
      </div>
    </div>
  </body>
  </html>
  <?php
  if (isset($_POST['submit'])) {
    $id= $_GET['id_user'];
    $nama= $_POST['nama'];
    $username= $_POST['username'];
    $alamat= $_POST['alamat'];
    $provinsi= $_POST['provinsi'];
    $kota= $_POST['kota'];
    $notelp=$_POST['notelp'];

    $sql = "UPDATE `user` SET `nama`='$nama',`username`='$username',`alamat`='$alamat',`provinsi`='$provinsi',`kota`='$kota',`notelp`='$notelp' WHERE `id_pegawai` = $id";

    // "UPDATE `aktor` SET(`nama`,`alamat`,`no. hp`,`username`,`password`)
    // VALUES ('$nama', '$alamat','$notelp','$username','$password')WHERE id_pegawai=$id";
    mysqli_query($con,$sql);
    header("location:profil.php");
    exit();
  }

  ?>
