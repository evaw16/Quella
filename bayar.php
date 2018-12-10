<?php
require_once 'init.php';
$id_user = $_SESSION['id_user'];



if (isset($_POST['submit'])) {

$query = "INSERT INTO `order`(`id_order`, `id_user`, `tanggal`, `status`)
VALUES (NULL,$id_user,curdate(),'belum bayar')";
mysqli_query($con,$query);
$list= array();
$produk = "select id_produk,jumlah,total from `keranjang` where id_user = $id_user";
$res = mysqli_query($con,$produk);
while ($row = mysqli_fetch_assoc($res)) {
  $l = array(
    'id_produk' => $row['id_produk'],
    'jumlah' => $row['jumlah'],
    'total' => $row['total']
  );
  array_push($list,$l);
}

$order = "select id_order from `order` where id_user = $id_user";
$result = mysqli_query($con,$order);
while ($row =mysqli_fetch_assoc($result)) {
  $id_order = $row['id_order'];
}
// var_dump($list);
foreach ($list as $l) {
  $id_produk = $l['id_produk'];
  $total = $l['total'];
  $jumlah = $l['jumlah'];
  $do = "INSERT INTO `detail_order`( `id_order`, `id_produk`, `tanggal`, `jumlah`, `total_harga`) VALUES
  ($id_order,$id_produk,curdate(),$jumlah,$total)";
  $con->query($do);
}
$delete = "DELETE FROM `keranjang` WHERE keranjang.id_user = $id_user";
mysqli_query($con,$delete);



}

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
            <li class="active" role="presentation"><a href="#">Transaksi</a></li>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="logout.php" id="myBtn"><span class="glyphicon glyphicon-log-in"></span> LOGOUT</a></li>
        </ul>
      </nav>
    </div>
  </div>
</div>
<center style="font-size:35px;">Transaksi</center><br>
<center>
  <table class="table table-bordered" style="margin-left:110px; width:950px;">
    <thead>
      <tr>
        <th>No</th>
        <th>id transaksi</th>
        <th>tanggal</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql="select * from `order` o join user u on o.id_user=u.id_user";
      $result = mysqli_query($con,$sql);
      $i=1;
      while ($item = mysqli_fetch_array($result)) {
        ?>
        <tr>
          <td hidden><?=$item['id_user']?></td>
          <td><?=$i;  ?></td>
          <td><?=$item['id_order']?></td>
          <td><?=$item['tanggal']?></td>
          <td><?=$item['status']?></td>
          <!-- <td><a onclick="return confirm('Apakah Anda yakin ingin menghapus?')" href="hapus.php?id_user=</?=$item['id_user']?>">Hapus</a>
          || <a href="editAktor.php?id_pegawai=</?=$item['id_pegawai']?>">Ubah</a>
        </td> -->
      </tr>

      <?php
      $i++;
    }
    ?>
  </tbody>
</table>
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
