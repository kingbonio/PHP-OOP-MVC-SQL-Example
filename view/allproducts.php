<?php

	$output = "";
	foreach ($productList as $key => $product){
		$output = $output . "Part Number: " . $product->partnumber . "<br />"
			."<img height=100  border=1 src='img/products/" . $product->image . "' /><br />"
			."Description: " . $product->description . "<br />"
			."Stock Quantity: " . $product->stock . "<br />"
			."Cost Price: " . $product->costprice . "<br />"
			."Sale Price: " . $product->saleprice . "<br />"
			."VAT Rate: " . $product->vatrate . '<br />'
			."<a class='view-button' href='product.php?partnumber=" . $product->partnumber . "'>View</a>"
			."<a class='edit-button' href='edit.php?partnumber=" . $product->partnumber . "'>Edit</a></br>"
			.'<form action="confirm.php" method="post">'
			.'<input type="text" value="' . $product->partnumber . '" name="partnumber" style="display:none;">'
			.'<input type="text" value="delete" name="action" style="display:none;">'
			.'<input type="submit" value="Delete">'
			.'</form>';
	}
	echo '<div class="products-table" id="productsTable">' . $output . '</div>';

?>