<?php

	require_once('model/connection.php');

	include 'model/products.php';


	Product::edit(1, "helt", "img/p.jpg", 38, 4.09, 4.10, 0.3);

	Product::create("hergererhrelt", "img/erherherhzfhzerherbp.jpg", 38, 4.09, 4.90, 0.3);

	$productList = Product::getAll();
	var_dump($productList);



?>