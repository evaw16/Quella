<?php
$db = "quella";
$mysql_user = "root";
$mysql_pass = "";
$server_name = "localhost";

$con = mysqli_connect($server_name,$mysql_user,$mysql_pass,$db);
if (!$con) {
  // echo "Connection Error";
} else {
  // echo "Connection Success";
}


?>
