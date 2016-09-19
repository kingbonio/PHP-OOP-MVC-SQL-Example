<?php

echo "<div class='product-single' id='productSingle'>" 
	."Part Number: " . $product->partnumber . "<br />"
	."<img height=100  border=1 src='img/products/" . $product->image . "' /><br />"
	."Description: " . $product->description . "<br />"
	."Stock Quantity: " . $product->stock . "<br />"
	."Cost Price: " . $product->costprice . "<br />"
	."Sale Price: " . $product->saleprice . "<br />"
	."VAT Rate: " . $product->vatrate . '<br />------------<br />'
	."<a class='edit-button' href='edit.php?partnumber=" . $product->partnumber . "'>Edit</a></br>"
	.'<form action="confirm.php" method="post">'
	.'<input type="text" value="' . $product->partnumber . '" name="partnumber" style="display:none;">'
	.'<input type="text" value="delete" name="action" style="display:none;"><br />'
	.'<input type="submit" value="Delete">'
	.'</form>'
	."</div>";

?>