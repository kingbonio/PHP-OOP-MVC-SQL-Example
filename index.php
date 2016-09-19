<?php
include 'partials/header.php';
include 'partials/nav.php'
?>



<container class="products">
	<?php
		require_once('model/connection.php');
		require_once('controller/productscontroller.php');
		include 'model/products.php';

		ProductsController::printAll();
	?>
</container>

<?php
include 'partials/footer.php';
?>