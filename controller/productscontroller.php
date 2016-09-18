<?php

class ProductsController {
	
	public function getAll(){
		$productList = Product::getAll();
      	require_once('view/allproducts.php');
	}
	
	public function getSingle($partnumber){
		$product = Product::getSingle(0000001);
      	require_once('view/singleproduct.php');
	}

}