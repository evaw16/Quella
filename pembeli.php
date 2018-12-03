<!DOCTYPE html>
<?php
require_once("init.php");
// session_start();

?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quella</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
  <center><img src="assets/img/1-1.png" width="25%" style="margin-top:20px;"></center>
  <br>
  <div class="container">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="collapse navbar-collapse fixed-on-top" id="navcol-1">
          <ul class="nav navbar-nav">
            <li class="active" role="presentation"><a href="#">Home</a></li>
            <li role="presentation"><a href="keranjang.php">Keranjang </a></li>
            <li role="presentation"><a href="transaksi.php">Transaksi </a></li>
          </ul>
          <form class="navbar-form navbar-left" action="/action_page.php">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search" style="width:400px;">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="#">
                <a class="dropdown"></a>
                <span class="glyphicon glyphicon-user"></span> Hello, <?=$_SESSION['username']?> :)
                <ul class="dropdown">
                  <li><a href="">Profile</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
              </a>
            </li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> LOGOUT</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <div id="elza">
    <div class="carousel slide" data-ride="carousel" id="carousel-1">
      <div class="carousel-inner" role="listbox">
        <div class="item active"><img src="assets/img/uu.jpg" alt="Slide Image"></div>
        <div class="item"><img src="assets/img/uuu.jpg" alt="Slide Image"></div>
        <div class="item"><img src="assets/img/uuuU.jpg" alt="Slide Image"></div>
      </div>
      <div><a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel-1" role="button"
        data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">Next</span></a></div>
        <ol class="carousel-indicators">
          <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-1" data-slide-to="1"></li>
          <li data-target="#carousel-1" data-slide-to="2"></li>
        </ol>
      </div>
    </div>
    <br>
    <div class="row">
      <?php
      $sql = "select * from produk p join user u on p.id_user = u.id_user";
      $result = $con->query($sql);
      foreach ($result as $item) {
        ?>
        <div class="col-sm-3">
          <div class="card" style="width:400px;">
            <img class="card-img-top" src="img-produk/<?=$item['gambar_produk']?>" alt="Card image" width="75%">
            <div class="card-body">
              <h4 class="card-title">Nama Penjual : <?=$item['nama']?></h4>
              <h4 class="card-title">Nama Produk:  <?=$item['nama_produk']?></h4>
              <h4 class="card-title">Jumlah Stok:  <?=$item['jumlah_stok']?></h4>
              <h4 class="card-title">Harga:  <?=$item['harga']?></h4>
              <a href="detail.php?id=<?=$item['id_produk']?>" class="btn btn-primary">Detail</a>
            </div>
          </div>
        <?php }
        ?>
      </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
  </html>
