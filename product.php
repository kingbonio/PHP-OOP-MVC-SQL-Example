


<!doctype html>
<html>
<head>
    <title>View Product Details</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  
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

ProductsController::getSingle(0000001);

if (!isset($_GET['partnumber'])){
		ProductsController::getSingle($_GET['partnumber']);
}else{
	echo "No part number requested";
}

?>





</body>
</html>




