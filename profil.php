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
            <li role="presentation"><a href="index.php">Home</a></li>
            <li role="presentation"><a href="keranjang.php">Keranjang</a></li>
            <li role="presentation"><a href="transaksi.php">Transaksi</a></li>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> LOGOUT</a></li>
        </ul>
      </nav>
      <!-- <div class="col-md-4"> -->
      <center>
        <div class="panel panel-default" style="border:none; border-radius: 5px 5px 10px 10px;">
          <div class="panel-heading" style="background-color: #526485; border: none;">
            <header class="panel-title">
              <div class="text-center">
                <strong style="color: black;">Profile</strong>
              </div>
            </header>
          </div>
          <div class="panel-body" style="background-color: black; border-radius: 0px 0px 10px 10px; border: none;">
            <div class="text-center" id="author">
              <br>
              <img src="assets/img/pembeli.png" style="width: 190px; height: 180px;">
              <br><br>
              <p style="color: white;">Selamat Datang, <?=$_SESSION['nama']?> :)</p>
            </div>
          </div>
        </div>
      </center>
    </div>
  </div>
</div>
<a href="editprofil.php">
  <button type="submit" name="submit" class="btn btn-primary"
  style="margin-left:45%;">Edit Profile</button>
</a>
</body>
</html>
