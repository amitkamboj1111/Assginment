<?php 

// connect to the mysql database
include 'connectDB.php';

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
