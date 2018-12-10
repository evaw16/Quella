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
            <li class="active" role="presentation"><a href="#">Keranjang</a></li>
            <li role="presentation"><a href="transaksi.php">Transaksi</a></li>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="logout.php" id="myBtn"><span class="glyphicon glyphicon-log-in"></span> LOGOUT</a></li>
        </ul>
      </nav>
    </div>
  </div>
</div>
<center style="font-size:35px;">Keranjang Belanja</center><br>
<center>
  <table class="table table-bordered" style="margin-left:110px; width:950px;">
    <thead>
      <tr>
        <th>Tanggal</th>
        <th>Nama Produk</th>
        <th>Jumlah</th>
        <th>Total Harga</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $jumlah = 0;
      $total = 0;
      $id_user = $_SESSION['id_user'];
      $sql="SELECT keranjang.*, produk.nama_produk
      FROM keranjang
      LEFT JOIN produk ON keranjang.id_produk = produk.id_produk
      WHERE keranjang.id_user =$id_user";
      $result = mysqli_query($con,$sql);
      while ($item = mysqli_fetch_array($result)) {
        ?>
        <tr>
          <td hidden><?=$item['id_user']?></td>
          <td><?=$item['tanggal']?></td>
          <td><?=$item['nama_produk']?></td>
          <td><?=$item['jumlah']?></td>
          <td><?=$item['total']?></td>
          <?php
          $jumlah = $item['total'];
          $total += $jumlah;
        }
        ?>
      </tr>

    </tbody>
  </table>
  <div class="col-sm-4" >
    <h4 style="font-size:25px">Total Bayar : <?=$total?></h4>
  </div>
</center>
<br><br><br>
<center>
  <form action="bayar.php" method="post">

    <a  onclick="return confirm('Anda yakin akan checkout produk?');">
      <input name="submit" type="submit" class="btn btn-success bold" value="Bayar">
      <a href="batal.php?id_keranjang=<?= $item['id_keranjang'];?>" onclick="return confirm('Anda yakin akan membatalkan?');">
        <button  class="btn btn-danger bold">Batal</button></a>
        <!-- <td><a onclick="return confirm('Apakah Anda yakin ingin menghapus?')" href="hapus.php?id_user=</?=$item['id_user']?>">Hapus</a>
        || <a href="editAktor.php?id_pegawai=</?=$item['id_pegawai']?>">Ubah</a>
      </td> -->
    </center>
    <script>
    $(document).ready(function(){
      $("#myBtn").click(function(){
        $("#myModal").modal();
      });
    });
  </script>
  </form>




</body>
</html>
