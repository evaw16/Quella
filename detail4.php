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
        </ul>
      </nav>
    </div>
  </div>
</div>
<center style="font-size:35px;">Kerudung Anak Instan</center>
<center>
  <div class="card" style="width:400px">
    <img class="card-img-top" src="assets/img/ucul3.jpg" alt="Card image" width="75%">
    <div class="card-body">
      <h4 class="card-title">Kerudung Anak Instan</h4>
      <p class="card-text">Rp. 49.000,-</p>
      <p class="card-text">Warna:Hitam, Putih, Coklat, Navy</p>
      <p class="card-text">Kain: </p>
    </div>
  </div>
  <br>
</center>
<div class="form" style="margin-left:400px;">
  <form class="" action="index.php" method="post">
    <label for="">Jumlah Pemesanan</label><br>
    <input type="number" name="jumlah" value="" placeholder="Jumlah Pemesanan">
  </form>
  <form class="" action="index.php" method="post">
    <label for="">Pilih Warna</label><br>
    <input type="number" name="jumlah" value="" placeholder="Jumlah Pemesanan">
  </form>
  <br>
  <input type="submit" name="" value="Masukkan ke Keranjang">
</div>


<script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
});
</script>

</body>
</html>
