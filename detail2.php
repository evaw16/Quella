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
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <center style="font-size:35px;">Jilbab Zara Instan</center>
  <br>
  <div class="row">
    <div class="col-sm-3">
      <div class="card" style="width:400px">
        <img class="card-img-top" src="assets/img/b3.jpg" alt="Card image" width="75%">
        <div class="card-body">
          <h4 class="card-title">Zara Flowy</h4>
          <p class="card-text">Rp. 49.000,-</p>
          <!-- <a href="detail4.php" class="btn btn-primary">See More</a> -->
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="card" style="width:400px">
        <img class="card-img-top" src="assets/img/b22.jpg" alt="Card image" width="75%">
        <div class="card-body">
          <h4 class="card-title">Zara metadata</h4>
          <p class="card-text">Rp. 50.999,-</p>
          <!-- <a href="detail5.php" class="btn btn-primary">See More</a> -->
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="card" style="width:400px">
        <img class="card-img-top" src="assets/img/b11.jpg" alt="Card image" width="75%">
        <div class="card-body">
          <h4 class="card-title">Zara Linea</h4>
          <p class="card-text">Rp. 69.999,-</p>
          <!-- <a href="detail6.php" class="btn btn-primary">See More</a> -->
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="card" style="width:400px">
        <img class="card-img-top" src="assets/img/b33.jpg" alt="Card image" width="75%">
        <div class="card-body">
          <h4 class="card-title">Zara Geaz</h4>
          <p class="card-text">Rp. 49.999,-</p>
          <!-- <a href="detail6.php" class="btn btn-primary">See More</a> -->
        </div>
      </div>
    </div>
  </div>
  <br>
  <script>
  $(document).ready(function(){
    $("#myBtn").click(function(){
      $("#myModal").modal();
    });
  });
</script>

</body>
</html>
