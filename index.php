<!doctype html>
<html>
<head>
    <title>PHP Test</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  
</head>

<body>

<div class="buttons">
	<a href="new.php?action=new">Add Product</a>
</div>



<?php

	require_once('model/connection.php');
	require_once('controller/productscontroller.php');
	include 'model/products.php';


	ProductsController::getAll();



	// Product::edit(000000000012, "temp product", "img/products/00000011.jpg", 38, 4.09, 4.10, 0.3);

	// Product::create("Fourth tool", "img/products/00000004.jpg", 38, 4.09, 4.90, 0.3);




	// echo showAllProducts(Product::getAll());



?>



</body>
</html>