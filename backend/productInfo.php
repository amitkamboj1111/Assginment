<?php 

// get the HTTP method, path and body of the request
$method = $_SERVER['REQUEST_METHOD'];

// connect to the mysql database
$user = 'root';
$password = 'root';
$db = 'search';
$host = '127.0.0.1';
$port = 8889;

$con=mysqli_connect($host,$user,$password,$db,$port);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if (isset($_GET['productId'])) {
	$query = $_GET['productId'];
}
else {
	$query = '';
}
 
$result = $con->query("SELECT * FROM products where productId = ".$query);

$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
print json_encode($rows);

$con->close();
?>
