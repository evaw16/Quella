<?php
require_once 'init.php';
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
            <li role="presentation"><a href="index.php">Home</a></li>
            <li role="presentation"><a href="keranjang.php">Keranjang</a></li>
            <li role="presentation"><a href="#">Transaksi</a></li>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> LOGOUT</a></li>
        </ul>
      </nav>
    </div>
  </div>
</div>
<center>
  <div class="row">
    <?php
    $id = $_GET['id'];
    $sql = "select * from produk p join user u on p.id_user = u.id_user where id_produk = $id";
    $result = $con->query($sql);
    foreach ($result as $item) {
      ?>
      <div class="card" style="width:400px;">
        <img class="card-img-top" src="img-produk/<?=$item['gambar_produk']?>" alt="Card image" width="75%">
        <div class="card-body">
          <h4 class="card-title">Nama Penjual : <?=$item['nama']?></h4>
          <h4 class="card-title">Nama Produk:  <?=$item['nama_produk']?></h4>
          <h4 class="card-title">Jumlah Stok:  <?=$item['jumlah_stok']?></h4>
          <h4 class="card-title">Harga:  <?=$item['harga']?></h4>
          <?php $harga = $item['harga'];?>
          <form method="post">
            <label for="">Jumlah Pesanan</label><br>
            <input min="1" type="number" name="jumlah" value="" placeholder="Jumlah Pesanan" max="<?=$item['jumlah_stok']?>">
            <input type="submit" name="submit" value="Masukkan ke Keranjang">

          </form>
          <br>
        </div>
      </div>
      <?php
    }
    ?>
  </div>
</center>
<script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
});
</script>

</body>
</html>

<?php
  if (isset($_POST['submit'])) {
    $jumlah = $_POST['jumlah'];

    $iduser = $_SESSION['id_user'];
    $id_produk = $_GET['id'];
    $keranjang=0;
    // $sql = "INSERT INTO `keranjang`( `id_user`, `tanggal`, `jumlah`, `total`) VALUES ($_SESSION['id_user'],curdate(),$jumlah,$total)";
    $sql_check="SELECT COUNT(*) as keranjang,jumlah FROM keranjang WHERE id_user=$iduser and id_produk=$id_produk";
    $res=mysqli_query($con,$sql_check);
    $temp_jumlah=0;
    foreach ($res as $item) {
      $keranjang = $item['keranjang'];
      $temp_jumlah=$item['jumlah'];
    }
    $jumlah+=$temp_jumlah; //$jumlah = $jumlah+$temp_jumlah
    $total = $harga * $jumlah;


    if ($keranjang==0) {

      $sql = "INSERT INTO `keranjang`(`id_user`,`id_produk`, `tanggal`, `jumlah`, `total`) VALUES ($iduser,$id_produk,curdate(),$jumlah,$total)";
      mysqli_query($con,$sql);
      header("location: keranjang.php");
    }
    else {
       $sql = "UPDATE keranjang SET jumlah=$jumlah,total=$total WHERE id_produk=$id_produk AND id_user =$iduser";
       mysqli_query($con,$sql);

    }

    exit();
}
     ?>
