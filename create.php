<?php
include 'partials/header.php';
?>

<div class="nav-bar">
	<a href="/">Home</a>
</div>


<?php



require_once('model/connection.php');
require_once('controller/productscontroller.php');
include 'model/products.php';



echo '<form action="confirm.php" method="post">
		<input type="text" value="create" name="action" style="display:none;"><br />
		Part Number: <input type="text" name="partnumber"><br />
		Description: <input type="text" name="description"><br />
		Image: <input type="text" name="image"><br />
		Stock: <input type="text" name="stock"><br />
		Cost Price: <input type="text" name="costprice"><br />
		Sale Price: <input type="text" name="saleprice"><br />
		VAT Rate: <input type="text" name="vatrate"><br />
		<input type="submit">
		</form>';

?>


<?php
include 'partials/footer.php';
?>