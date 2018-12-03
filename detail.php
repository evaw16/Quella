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

<body>
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
          <form class="" action="index.php" method="post">
            <label for="">Jumlah Pesanan</label><br>
            <input type="number" name="jumlah" value="" placeholder="Jumlah Pesanan">
          </form>
          <br>
          <input type="submit" name="" value="Masukkan ke Keranjang">
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
