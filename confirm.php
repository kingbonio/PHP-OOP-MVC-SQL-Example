<?php
include 'partials/header.php';
include 'partials/nav.php'
?>


<container class="single-product">
	<div class="output">
	<?php


		require_once('model/connection.php');
		require_once('controller/productscontroller.php');
		include 'model/products.php';




		if ($_POST['action'] == 'create'){
			ProductsController::create($_POST['partnumber'],$_POST['description'],$_POST['image'],$_POST['stock'],$_POST['costprice'],$_POST['saleprice'],$_POST['vatrate']);

		} elseif ($_POST['action'] == 'edit'){
			ProductsController::edit($_POST['originalpartnumber'], $_POST['partnumber'],$_POST['description'],$_POST['image'],$_POST['stock'],$_POST['costprice'],$_POST['saleprice'],$_POST['vatrate']);

		} elseif ($_POST['action'] == 'delete'){
			ProductsController::delete($_POST['partnumber']);
		} 



	?>

	</div>
</container>