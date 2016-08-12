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

if (isset($_GET['categoryId'])) {
        $query = $_GET['categoryId'];

$currlevel = $con->query("SELECT level FROM categories where categoryId = ".$query);

//var_dump($currlevel);
$currlevel = mysqli_fetch_array($currlevel , MYSQLI_ASSOC);
$currlevel = $currlevel['level'];

$temp1 = array($query);
$temp2 = array();

if ($currlevel == 1) {
	$result = $con->query("SELECT subCategoryId FROM catSubcatMapping where categoryId = ".$query);
	while($r = mysqli_fetch_assoc($result)) {
    	array_push($temp2, $r['subCategoryId']);
	}
	$str = implode($temp2, ",");

	$q = $con->query("SELECT subCategoryId FROM catSubcatMapping where categoryId in (".$str.")");

	while($r = mysqli_fetch_assoc($q)) {
    	array_push($temp1, $r['subCategoryId']);
	}
	foreach($temp2 as $catId) {
    	array_push($temp1, $catId);
	}
}
elseif ($currlevel == 2) {
	$result = $con->query("SELECT subCategoryId FROM catSubcatMapping where categoryId = ".$query);
	while($r = mysqli_fetch_assoc($result)) {
    	array_push($temp1, $r['subCategoryId']);
	}
}
//var_dump($temp1);
$temp1 = implode($temp1 , ",");
$finalresult = $con->query("select productId , productName from products where productId in (SELECT productId FROM catProdMapping where categoryId in (".$temp1.")) and productName like '%".$_GET['text']."%' limit 5");
//var_dump($result);
}
else {
	$finalresult = $con->query("select productId , productName from products where productName like '%".$_GET['text']."%' limit 5");
}

/*while($r = mysqli_fetch_assoc($finalresult)) {
    	echo $r['productId'];
    	echo " ";
    	echo $r['productName'];
    	echo "\n";
	}*/

$rows = array();
while($r = mysqli_fetch_assoc($finalresult)) {
    $rows[] = $r;
}
print json_encode($rows);

$con->close();
?>

