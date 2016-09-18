<!doctype html>
<html>
<head>
    <title>PHP Test</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  
</head>

<body>

<div class="products-table" id="productsTable">

<?php

	require_once('model/connection.php');

	include 'view/view.php';
	include 'model/products.php';


	// Product::edit(000000000012, "temp product", "img/products/00000011.jpg", 38, 4.09, 4.10, 0.3);

	// Product::create("Fourth tool", "img/products/00000004.jpg", 38, 4.09, 4.90, 0.3);


	echo showAllProducts(Product::getAll());



?>

</div>

<div class="product-overlay" id="productOverlay">
	<?php echo showSingleProduct(Product::getSingle(00000001)) ?>
</div>

</body>
</html>