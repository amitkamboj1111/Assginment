<?php $user = 'root';
$password = 'root';
$db = 'search';
$host = '127.0.0.1';
$port = 8889;

$con=mysqli_connect($host,$user,$password,$db,$port);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
