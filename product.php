


<!doctype html>
<html>
<head>
    <title>View Product Details</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  
	<link rel="stylesheet" type="text/css" href="css/styles.min.css">
	
</head>

<body>

<?php


	require_once('model/connection.php');
	require_once('controller/productscontroller.php');
	include 'model/products.php';


?>

<div class="nav-bar">
	<a href="/">Home</a>
</div>

<?php 	

if (!isset($_GET['partnumber'])){
	echo "No part number requested";
}else{
		ProductsController::printSingle($_GET['partnumber']);
}

?>





</body>
</html>




