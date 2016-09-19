<?php
include 'partials/header.php';
include 'partials/nav.php'
?>


<container class='edit-form'>
	<div class='col-md-4 col-xs-0'></div>
	<div class='edit-block center col-md-4'>
	<?php

	require_once('model/connection.php');
	require_once('controller/productscontroller.php');
	include 'model/products.php';

	$product = ProductsController::getSingle($_GET['partnumber']);

	echo '<form action="confirm.php" method="post">
			<input type="text" value="edit" name="action" style="display:none;">
			<input type="text" value="' . $product->partnumber . '" name="originalpartnumber" style="display:none;"><br />
			<span class="input-name center">Part Number: </span><input type="text" name="partnumber" value="' . $product->partnumber . '"><br />
			<span class="input-name center">Description: </span><input type="text" name="description" value="' . $product->description . '"><br />
			<span class="input-name center">Image: </span><input type="text" name="image" value="' . $product->image . '"><br />
			<span class="input-name center">Current Image: </span><img class="product-image" src="img/products/' . $product->image . '" /><br />
			<span class="input-name center">Stock: </span><input type="text" name="stock" value="' . $product->stock . '"><br />
			<span class="input-name center">Cost Price: </span><input type="text" name="costprice" value="' . $product->costprice . '"><br />
			<span class="input-name center">Sale Price: </span><input type="text" name="saleprice" value="' . $product->saleprice . '"><br />
			<span class="input-name center">VAT Rate: </span><input type="text" name="vatrate" value="' . $product->vatrate . '"><br />
			<input type="submit" class="btn btn-sm btn-default">
			</form>';

	?>
	</div>

	<div class='col-md-4 col-xs-0'></div>
</container>

<?php
include 'partials/footer.php';
?>