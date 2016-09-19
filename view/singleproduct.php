<?php

echo "<div class='product-single col-md-4 col-sm-6' id='productSingle'>\n" 
	."Part Number: " . $product->partnumber . "<br />\n"
	."<img height=100  border=1 src='img/products/" . $product->image . "' /><br />\n"
	."Description: " . $product->description . "<br />\n"
	."Stock Quantity: " . $product->stock . "<br />\n"
	."Cost Price: " . $product->costprice . "<br />\n"
	."Sale Price: " . $product->saleprice . "<br />\n"
	."VAT Rate: " . $product->vatrate . '<br />------------<br />' . "\n"
	."<a class='edit-button' href='edit.php?partnumber=" . $product->partnumber . "'>Edit</a></br>\n"
	.'<form action="confirm.php" method="post" onsubmit="return confirm()"Are you sure you want to delete this product?">' . "\n"
	.'<input type="submit" value="Delete">' . "\n"
	.'<input type="text" value="' . $product->partnumber . '" name="partnumber" style="display:none;">' . "\n"
	.'<input type="text" value="delete" name="action" style="display:none;"><br />' . "\n"
	.'</form>' . "\n"
	."</div>\n";

?>