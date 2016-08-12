<?php

// connect to the mysql database
include 'connectDB.php';

if (isset($_GET['categoryId'])) {
        $query = $_GET['categoryId'];

$currlevel = $con->query("SELECT level FROM categories where categoryId = ".$query); //check current level of category id

$currlevel = mysqli_fetch_array($currlevel , MYSQLI_ASSOC);
$currlevel = $currlevel['level'];

$mainContainer = array($query);
$tempContainer = array();

if ($currlevel == 1) {
	$result = $con->query("SELECT subCategoryId FROM catSubcatMappinglevel1 where categoryId = ".$query);
	while($r = mysqli_fetch_assoc($result)) {
    	array_push($tempContainer, $r['subCategoryId']);
	}
	$str = implode($tempContainer, ",");

	$q = $con->query("SELECT subCategoryId FROM catSubcatMappinglevel2 where categoryId in (".$str.")");

	while($r = mysqli_fetch_assoc($q)) {
    	array_push($mainContainer, $r['subCategoryId']);
	}
	foreach($tempContainer as $catId) {
    	array_push($mainContainer, $catId);
	}
}
elseif ($currlevel == 2) {
	$result = $con->query("SELECT subCategoryId FROM catSubcatMappinglevel2 where categoryId = ".$query);
	while($r = mysqli_fetch_assoc($result)) {
    	array_push($mainContainer, $r['subCategoryId']);
	}
}

$mainContainer = implode($mainContainer , ",");
$finalresult = $con->query("select productId , productName from products where productId in (SELECT productId FROM catProdMapping where categoryId in (".$mainContainer.")) and productName like '%".$_GET['text']."%' ORDER BY LOCATE('".$_GET['text']."', productName) limit 5");
}
else {
	$finalresult = $con->query("select productId , productName from products where productName like '%".$_GET['text']."%' ORDER BY LOCATE('".$_GET['text']."', productName) limit 5");
}

$rows = array();
while($r = mysqli_fetch_assoc($finalresult)) {
    $rows[] = $r;
}
print json_encode($rows);

$con->close();
?>

