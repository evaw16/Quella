<!DOCTYPE html>
<html>
<?php
require_once 'init.php';
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quella</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
  <center><img src="assets/img/1-1.png" width="25%" style="margin-top:20px;"></center>
  <br>
  <div class="container">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="collapse navbar-collapse fixed-on-top" id="navcol-1">
          <ul class="nav navbar-nav">
            <li role="presentation"><a href="index.php">Home</a></li>
            <!-- <li role="presentation"><a href="#">Kelola Produk</a></li> -->
            <li class="active" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Kelola Produk<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li class="disabled" role="presentation">
                  <a href="#"> </a>
                </li>
                <li role="presentation"><a href="#">Input Data Produk</a></li>
                <li role="presentation"><a href="lihatdp.php">Lihat Data Produk</a></li>
                <li class="dropdown-header" role="presentation"> </li>
                <li role="presentation">
                  <a href="#"> </a>
                </li>
              </ul>
            </li>
            <li role="presentation"><a href="#">Transaksi</a></li>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> LOGOUT</a></li>
        </ul>
      </nav>
    </div>
  </div>
</div>
<center>
  <div class="register">
    <br>Input Data Produk
    <br><br>
    <div class="form">
      <?php
      $id = $_GET['id'];
      $sql = "select * from produk where id_produk = $id";
      $result = $con->query($sql);
      foreach ($result as $item ) {
        ?>
        <form method="post" enctype="multipart/form-data">
          <input type="hidden" name="id_produk" value="<?=$item['id_produk']?>">
          <label for="">Nama</label><br>
          <input type="text" name="nama_produk" value="<?=$item['nama_produk']?>" placeholder="Nama">
          <br>
          <label for="">Jumlah Produk</label><br>
          <input type="number" name="jumlah_stok" value="<?=$item['jumlah_stok']?>" placeholder="Masukkan Jumlah Produk">
          <br>
          <label for="">Harga Produk</label><br>
          <input type="number" name="harga" value="<?=$item['harga']?>" placeholder="Masukkan Harga">
          <br>
          <label for="">Gambar</label><br>
          <img src="img-produk/<?=$item['gambar_produk']?>" style="width:100px; height:100px;">
          <br><br>
          <input type="file" name="gambar" value="<?=$item['gambar_produk']?>" placeholder="Gambar">
          <br>
          <input type="submit" name="submit" value="Masukkan">
        </form>
        <?php
      }
      ?>
    </div>
  </body>
  </html>
  <?php

  if (isset($_POST['submit'])) {
    $id= $_POST['id_produk'];
    $nama= $_POST['nama_produk'];
    $jumlah= $_POST['jumlah_stok'];
    $harga = $_POST['harga'];
    $gambar = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];
    $produk = date ('dmYHis') . $gambar;
    $path = "img-produk/" .$produk;
    $query = "select gambar_produk from produk where id_produk = $id";
    $resi = $con->query($sql);
    foreach ($resi as $item) {
      $img = $item['gambar_produk'];
    }
    unlink('img-produk/'.$img);
    if (move_uploaded_file($tmp, $path)) {


      $sql = "UPDATE `produk` SET `gambar_produk`='$produk',`nama_produk`='$nama',`jumlah_stok`='$jumlah',`harga`='$harga' WHERE `id_produk` = $id";

      // "UPDATE `aktor` SET(`nama`,`alamat`,`no. hp`,`username`,`password`)
      // VALUES ('$nama', '$alamat','$notelp','$username','$password')WHERE id_pegawai=$id";
      mysqli_query($con,$sql);
      header("location:lihatdp.php");
      exit();
    }
  }

  ?>
