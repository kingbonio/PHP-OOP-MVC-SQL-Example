<?php
include 'partials/header.php';
?>

<?php


	require_once('model/connection.php');
	require_once('controller/productscontroller.php');
	include 'model/products.php';


?>

<div class="nav-bar">
	<a href="/">Home</a>
</div>

<?php 	

if (!isset($_GET['partnumber'])){
	echo "No part number requested";
}else{
		ProductsController::printSingle($_GET['partnumber']);
}

?>



<?php
include 'partials/footer.php';
?>


