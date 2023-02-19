<?php

if($production == true){
  $db = "jungles1_sites";

  $con =  mysqli_connect('127.0.0.1', 'jungles1_admin', 'd3vRathat7676', $db, '3306');
  if (!$con) {
      die(mysqli_error($con));
  }
  mysqli_select_db ($con, $db);
  mysqli_set_charset($con, 'utf8');
}
else{
$db = "sites";

$con =  mysqli_connect('localhost:3306', 'root', 'yU45_gHHsd3_tPmZxC');
if (!$con) {
    die(mysqli_error($con));
}
mysqli_select_db ($con, $db);
}

?>
