<a href="/">Home</a>

<?php


	require_once('model/connection.php');
	require_once('controller/productscontroller.php');
	include 'model/products.php';




	if ($_POST['action'] == 'create'){
		ProductsController::create($_POST['partnumber'],$_POST['description'],$_POST['image'],$_POST['stock'],$_POST['costprice'],$_POST['saleprice'],$_POST['vatrate']);
	} elseif ($_POST['action'] == 'edit'){
		ProductsController::edit($_POST['originalpartnumber'], $_POST['partnumber'],$_POST['description'],$_POST['image'],$_POST['stock'],$_POST['costprice'],$_POST['saleprice'],$_POST['vatrate']);
	}


	// if (1==0){
	// 	echo "The action completed successfully" . "<a href='/'>Home</a>";
	// } elseif (!isset($_GET['partnumber'])){

	// }else {
	// 	echo "The action failed, please check your details and try again" . "<a href='#' onclick='history.back()'>Back</a><a href='/'>Home</a>";
	// }


?>