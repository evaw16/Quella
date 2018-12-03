<?php
require_once 'init.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quella</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<center>
  <div class="register">
    <body style="background:url('assets/img/xx.png')"><img src="assets/img/1-1.png" id="aa" width="20%">
      <br><br>Daftar akun baru sekarang
      <br><br>
      <div class="form">
        <form class=""method="post">
          <label for=""></label>
          <input type="text" name="name" value="" placeholder="Nama" required>
          <br>
          <br>
          <label for=""></label>
          <input type="text" name="username" value="" placeholder="Username" required>
          <br>
          <br>
          <label for=""></label>
          <input type="password" name="pass" value="" placeholder="Password" required>
          <br>
          <br>
          <label for=""></label>
          <input type="email" name="email" value="" placeholder="Email" required>
          <br>
          <br>
          <label for=""></label>
          <input type="number" name="hp" value="" placeholder="Nomor Handphone" required>
          <br>
          <br>
          <input type="radio" name="user"
          value="1">Penjual
          <input type="radio" name="user"
          value="2">Pembeli

          <input type="submit" name="submit" value="DAFTAR" style="width: 100px; height: 50px; border-radius: 10px;
          background-color: #8B4513; color: #fff; padding: 10px; margin-left:300px;">
          <a href="index.php"><button type="button" name="button" style="width: 100px; height: 50px; border-radius: 10px;
          background-color: #8B4513; color: #fff; padding: 10px;">BATAL</button></a>
        </form>
      </div>
    </div>
  </center>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
  $nama = $_POST['name'];
  $username = $_POST['username'];
  $password = md5 ($_POST['pass']);
  $email = $_POST['email'];
  $notelp = $_POST['hp'];
  $level = $_POST ['user'];

  $sql = "INSERT INTO `user`(`nama`, `username`, `password`, `email`, `notelp`, `level`)
  VALUES ('$nama','$username','$password','$email','$notelp',$level)";
  mysqli_query($con,$sql);
  header("location: index.php");
  exit();
}
?>
