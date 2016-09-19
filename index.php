<!doctype html>
<html>
<head>
    <title>PHP Test</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  
	<link rel="stylesheet" type="text/css" href="css/styles.min.css">

</head>

<body>

<div class="buttons">
	<a href="create.php">Add Product</a>
</div>



<container class="products">
<?php
	require_once('model/connection.php');
	require_once('controller/productscontroller.php');
	include 'model/products.php';

	ProductsController::printAll();
?>
</container>


</body>
</html>