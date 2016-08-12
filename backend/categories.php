<?php 

// connect to the mysql database
include 'connectDB.php';

if (isset($_GET['text'])) {
	$query = $_GET['text'];
}
else {
	$query = '';
}
 
$result = $con->query("SELECT * FROM categories where categoryName like '%".$query."%' ORDER BY LOCATE('".$query."', categoryName) LIMIT 5");

$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
print json_encode($rows);

$con->close();
?>
