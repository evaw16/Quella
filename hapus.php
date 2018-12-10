<?php
session_start();
require_once 'init.php';
$id = $_GET['id'];
$query = "select gambar_produk from produk where id_produk = $id";
$result = $con->query($query);
while ($row = mysqli_fetch_assoc($res)) {
  $gambar = $row['gambar_produk'];
}
unlink ("img-produk/".$gambar);
$sql = "delete from produk where id_produk = $id";
mysqli_query($con,$sql);
header("location:lihatdp.php");
?>
