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

<body>
  <center><img src="assets/img/1-1.png" width="25%" style="margin-top:20px;"></center>
  <br>
  <div class="container">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="collapse navbar-collapse fixed-on-top" id="navcol-1">
          <ul class="nav navbar-nav">
            <li class="active" role="presentation"><a href="#">What's New</a></li>
            <li role="presentation"><a href="#">Collections </a></li>
            <!-- <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Brand<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
            <li class="disabled" role="presentation">
            <a href="#"> </a>
          </li>
          <li role="presentation"><a href="#">Zoya</a></li>
          <li role="presentation"><a href="#">Shafira </a></li>
          <li role="presentation"><a href="#">elzatta </a></li>
          <li role="presentation"><a href="#">Meccanism </a></li>
          <li role="presentation"><a href="#">Rabbani </a></li>
          <li class="dropdown-header" role="presentation"> </li>
          <li role="presentation">
          <a href="#"> </a>
        </li>
      </ul>
    </li> -->
  </ul>
  <form class="navbar-form navbar-left" action="/action_page.php">
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Search" style="width:400px;">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  <ul class="nav navbar-nav navbar-right">
    <li><a href="regist.php"><span class="glyphicon glyphicon-user"></span> DAFTAR</a></li>
    <li><a href="#" id="myBtn"><span class="glyphicon glyphicon-log-in"></span> LOGIN</a></li>
  </ul>
  <!-- login modal -->
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
              <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="username" placeholder="Enter Username" required>
            </div>
            <div class="form-group">
              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" name="password" placeholder="Enter Password" required>
            </div>
            <!-- <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div> -->
            <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <!-- <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p> -->
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</nav>
</div>
<div id="elza">
  <div class="carousel slide" data-ride="carousel" id="carousel-1">
    <div class="carousel-inner" role="listbox">
      <div class="item active"><img src="assets/img/uu.jpg" alt="Slide Image"></div>
      <div class="item"><img src="assets/img/uuu.jpg" alt="Slide Image"></div>
      <div class="item"><img src="assets/img/uuuU.jpg" alt="Slide Image"></div>
    </div>
    <div><a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel-1" role="button"
      data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">Next</span></a></div>
      <ol class="carousel-indicators">
        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-1" data-slide-to="1"></li>
        <li data-target="#carousel-1" data-slide-to="2"></li>
      </ol>
    </div>
  </div>
  <br>
  <CENTER>
    <div class="row">
      <div class="col-sm-4">
        <div class="card" style="width:400px">
          <img class="card-img-top" src="assets/img/a.jpg" alt="Card image" width="50%">
          <div class="card-body">
            <h4 class="card-title">Meccanism</h4>
            <p class="card-text">Rp. 99.000,-</p>
            <a href="detail1.php" class="btn btn-primary">See More</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card" style="width:400px">
          <img class="card-img-top" src="assets/img/b.jpg" alt="Card image" width="50%">
          <div class="card-body">
            <h4 class="card-title">Jilbab Zara Instan</h4>
            <p class="card-text">Rp. 50.999,-</p>
            <a href="detail2.php" class="btn btn-primary">See More</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card" style="width:400px">
          <img class="card-img-top" src="assets/img/cc.jpg" alt="Card image" width="46%">
          <div class="card-body">
            <h4 class="card-title">elzatta Motif</h4>
            <p class="card-text">Rp. 79.999,-</p>
            <a href="detail3.php" class="btn btn-primary">See More</a>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-sm-4">
        <div class="card" style="width:400px">
          <img class="card-img-top" src="assets/img/ucul.jpg" alt="Card image" width="50%">
          <div class="card-body">
            <h4 class="card-title">Kerudung Anak Instan</h4>
            <p class="card-text">Rp. 49.000,-</p>
            <a href="detail4.php" class="btn btn-primary">See More</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card" style="width:400px">
          <img class="card-img-top" src="assets/img/sc.jpg" alt="Card image" width="50%">
          <div class="card-body">
            <h4 class="card-title">Scarf</h4>
            <p class="card-text">Rp. 50.999,-</p>
            <a href="detail5.php" class="btn btn-primary">See More</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card" style="width:400px">
          <img class="card-img-top" src="assets/img/satin.jpg" alt="Card image" width="50%">
          <div class="card-body">
            <h4 class="card-title">Satin</h4>
            <p class="card-text">Rp. 79.999,-</p>
            <a href="detail6.php" class="btn btn-primary">See More</a>
          </div>
        </div>
      </div>
    </div>
    <br>
    <hr />
    <br>
    <div class="col-sm-3">
      <b>Butuh Bantuan?</b>
      <br><b>Hubungi Kami</b>
      <br>08:00 - 21:00 WIB
      <br>(Hari Kerja)
      <br>09:00 - 18.00 WIB
      <br>(Weekend)
      <br><br>+6285-2651-3342
      <br>+6285-2811-3512
      <br>quellahijab@gmail.com
      <br><br><br><br>
    </div>
    <div class="col-sm-3">
      Bantuan
    </div>
    <div class="col-sm-3">
      Bantuan
    </div>
    <div style="border: 1px grey solid; height: 200px; width: 0px;">
    </div>
  </center>
  <script>
  $(document).ready(function(){
    $("#myBtn").click(function(){
      $("#myModal").modal();
    });
  });
</script>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<?php
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  // $pass = $_POST['password'];
  // if ($user == "papuma" && $pass == "papuma") {
  // 	header("Location:adminUtama.php");
  // }
  $sql = "select * from user where username = '$username' and password = '$password'";
  $result = mysqli_query($con,$sql);
  if (mysqli_num_rows($result)>0) {
    $row = mysqli_fetch_assoc($result);
    if ($row['level'] == 1) {
      header("Location:detail1pembeli.php");
    } else if ($row['level'] == 2) {
      header("Location:penjual.php");
    }
  } else{
    ?>
    <script type="text/javascript">
    alert("Login Gagal, Username atau Password salah");
    </script>
    <?php
  }
}

?>
</body>

</html>
