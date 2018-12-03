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

<body>
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
          <li><a href="#" id="myBtn"><span class="glyphicon glyphicon-log-in"></span> LOGOUT</a></li>
        </ul>
      </nav>
    </div>
  </div>
</div>
<center style="font-size:35px;">Keranjang Belanja</center><br>
<div class="tabel">
  <table>
    <tbody>
      <tr>
        <th>No</th>
        <th>Nama Produk</th>
        <th>Jumlah</th>
        <th>Total Harga</th>
      </tr>
      <tr>
        <td>1</td>
        <td>Malana Silver Meccanism</td>
        <td>3</td>
        <td>297000</td>
      </tr>
    </tbody>
  </table>
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
