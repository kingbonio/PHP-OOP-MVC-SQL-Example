<?php
include 'partials/header.php';
include 'partials/nav.php'
?>


<?php


	require_once('model/connection.php');
	require_once('controller/productscontroller.php');
	include 'model/products.php';


?>

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


