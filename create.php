<?php
include 'partials/header.php';
include 'partials/nav.php';


require_once('model/connection.php');
require_once('controller/productscontroller.php');
include 'model/products.php';

echo '<form action="confirm.php" method="post">
		<input type="text" value="create" name="action" style="display:none;"><br />
		<span class="input-name">Part Number: </span><input type="text" name="partnumber"><br />
		<span class="input-name">Description: </span><input type="text" name="description"><br />
		<span class="input-name">Image: </span><input type="text" name="image"><br />
		<span class="input-name">Stock: </span><input type="text" name="stock"><br />
		<span class="input-name">Cost Price: </span><input type="text" name="costprice"><br />
		<span class="input-name">Sale Price: </span><input type="text" name="saleprice"><br />
		<span class="input-name">VAT Rate: </span><input type="text" name="vatrate"><br />
		<input type="submit" class="btn btn-sm btn-default">
		</form>';
include 'partials/footer.php';
?>