<?php
require_once 'init.php';
?>
<!DOCTYPE html>
<html>
<head>
  <style>
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 75%;
    margin-left: 160px;
    margin-right: 100px;
  }

  td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }

  tr:nth-child(even) {
    background-color: #dddddd;
  }
</style>
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
            <li class="active" role="presentation"><a href="ordermasuk.php">Transaksi</a></li>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="logout.php" id="myBtn"><span class="glyphicon glyphicon-log-in"></span> LOGOUT</a></li>
        </ul>
      </nav>
    </div>
  </div>
</div>
<center style="font-size:35px;">Order Masuk</center><br>
<center>
  <table class="table table-bordered" style="margin-left:110px; width:950px;">
    <thead>
      <tr>
        <th>Nama Produk</th>
        <th>Jumlah</th>
        <th>Total Harga</th>
        <th>Status</th>
        <th>Nama Pembeli</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql="select * from `order` o join user u on o.id_user=u.id_user";
      $result = mysqli_query($con,$sql);
      while ($item = mysqli_fetch_array($result)) {
        ?>
        <tr>
          <td hidden><?=$item['id_user']?></td>
          <td><?=$item['nama_produk']?></td>
          <td><?=$item['jumlah']?></td>
          <td><?=$item['total']?></td>
          <td><?=$item['status']?></td>
          <td><?=$item['nama']?></td>
          <!-- <td><a onclick="return confirm('Apakah Anda yakin ingin menghapus?')" href="hapus.php?id_user=</?=$item['id_user']?>">Hapus</a>
          || <a href="editAktor.php?id_pegawai=</?=$item['id_pegawai']?>">Ubah</a>
        </td> -->
      </tr>

      <?php
    }
    ?>
  </tbody>
</table>
</center>

</body>
</html>
