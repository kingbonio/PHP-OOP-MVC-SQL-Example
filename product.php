<?php
include 'partials/header.php';
include 'partials/nav.php'
?>


<?php


	require_once('model/connection.php');
	require_once('controller/productscontroller.php');
	include 'model/products.php';


?>

<container class="single-product">
	<?php 	

	if (!isset($_GET['partnumber'])){
		echo "No part number requested";
	}else{
			ProductsController::printSingle($_GET['partnumber']);
	}

	?>
</container>



<?php
include 'partials/footer.php';
?>


