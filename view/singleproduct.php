<?php

echo "<div class='product-single' id='productSingle'>" 
	."Part Number: " . $product->partnumber . "<br />"
	."<img height=100  border=1 src='" . $product->image . "' /><br />"
	."Description: " . $product->description . "<br />"
	."Stock Quantity: " . $product->stock . "<br />"
	."Cost Price: " . $product->costprice . "<br />"
	."Sale Price: " . $product->saleprice . "<br />"
	."VAT Rate: " . $product->vatrate . '<br />------------<br />'
	."</div>";

?>