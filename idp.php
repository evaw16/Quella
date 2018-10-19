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
          <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> LOGOUT</a></li>
        </ul>
      </nav>
    </div>
  </div>
</div>
<center>
  <div class="register">
    <body>
      <br>Input Data Produk
      <br><br>
      <div class="form">
        <form class="" action="index.php" method="post">
          <label for="">Nama</label><br>
          <input type="text" name="fname" value="" placeholder="Nama">
        </form>
        <br>
        <form class="" action="index.php" method="post">
          <label for="">Jumlah Produk</label><br>
          <input type="number" name="hp" value="" placeholder="Masukkan Jumlah Produk">
        </form>
        <br>
        <form class="" action="index.php" method="post">
          <label for="">Harga Produk</label><br>
          <input type="password" name="pass" value="" placeholder="Masukkan Harga">
        </form>
        <br>
        <form class="" action="index.php" method="post">
          <label for="">Gambar</label><br>
          <input type="file" name="passc" value="" placeholder="Gambar">
        </form>
        <br>
        <input type="submit" name="" value="Masukkan">
      </div>
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
