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
            <li role="presentation"><a href="#">Keranjang</a></li>
            <li class="active" role="presentation"><a href="#">Transaksi</a></li>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="regist.php"><span class="glyphicon glyphicon-user"></span> DAFTAR</a></li>
          <li><a href="#" id="myBtn"><span class="glyphicon glyphicon-log-in"></span> LOGIN</a></li>
        </ul>
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header" style="padding:35px 50px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
              </div>
              <div class="modal-body" style="padding:40px 50px;">
                <form role="form">
                  <div class="form-group">
                    <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                    <input type="text" class="form-control" id="usrname" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                    <input type="text" class="form-control" id="psw" placeholder="Enter password">
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" value="" checked>Remember me</label>
                  </div>
                  <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
                </form>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <p>Not a member? <a href="#">Sign Up</a></p>
                <p>Forgot <a href="#">Password?</a></p>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>
</div>
<center style="font-size:35px;">Meccanism</center>
<center>
  <div class="card" style="width:400px">
    <img class="card-img-top" src="assets/img/a2.jpg" alt="Card image" width="75%">
    <div class="card-body">
      <h4 class="card-title">Meccanism</h4>
      <p class="card-text">Rp. 99.000,-</p>
      <p class="card-text">Warna: Baby Pink, Merah Maroon, Hitam, Putih</p>
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
