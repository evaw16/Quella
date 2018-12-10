<?php

require_once 'init.php';

$id = $_GET['id_keranjang'];
$sql = "DELETE FROM keranjang WHERE id_keranjang = $id";
mysqli_query($con,$sql);
header("location:keranjang.php");

?>
<!-- <script type="text/javascript">
  alert("Data Berhasil Dihapus");
</script> -->
