<?php
require_once 'init.php';
ob_start();
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
                <li role="presentation"><a href="idp.php">Input Data Produk</a></li>
                <li role="presentation"><a href="#">Lihat Data Produk</a></li>
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
<div class="row">
  <?php
  $sql = "select * from produk";
  $result = $con->query($sql);
  foreach ($result as $item) {
    ?>
    <div class="col-sm-3">
      <div class="card" style="width:400px">
        <img class="card-img-top" src="img-produk/<?=$item['gambar_produk']?>" alt="Card image" width="75%">
        <div class="card-body">
          <h4 class="card-title">Nama Produk:  <?=$item['nama_produk']?></h4>
          <h4 class="card-title">Jumlah Stok:  <?=$item['jumlah_stok']?></h4>
          <h4 class="card-title">Harga:  <?=$item['harga']?></h4>
          <a href="ubah.php?id=<?=$item['id_produk']?>" class="btn btn-primary">ubah</a>
          <a href="#" class="btn btn-primary">Hapus</a>
        </div>
      </div>
    </div>
  <?php } ?>

</div>
<br>
<!-- <script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
});
</script> -->
</body>
</html>
<?php
if (isset($_POST['submit'])) {
  $id= $_GET['id_user'];
  $gambar=$_POST['gambar_produk'];
  $nama= $_POST['nama_produk'];
  $jumlah= $_POST['jumlah_stok'];
  $harga = $_POST['harga'];

  $sql = "UPDATE `user` SET `gambar_produk`='$gambar',`nama_produk`='$nama',`jumlah_stok`='$jumlah',`harga`='$harga' WHERE `id_user` = $id";

  // "UPDATE `aktor` SET(`nama`,`alamat`,`no. hp`,`username`,`password`)
  // VALUES ('$nama', '$alamat','$notelp','$username','$password')WHERE id_pegawai=$id";
  mysqli_query($con,$sql);
  header("location:ubah.php");
  exit();
}

?>
