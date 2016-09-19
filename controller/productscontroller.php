<?php

class ProductsController {
	
	public function printAll(){
		$productList = Product::getAll();
      	require_once('view/allproducts.php');
	}
	
	public function printSingle($partNumber){
		$product = Product::getSingle($partNumber);
      	require_once('view/singleproduct.php');
	}
	
	public function getSingle($partNumber){
		return Product::getSingle($partNumber);
	}

	public function create($partNumber, $description, $image, $stock, $costPrice, $salePrice, $vatRate){

		$product = Product::getSingle($partNumber);
		
		if ((!is_int($partNumber)) && (strlen((string)$partNumber)) != 8){
			echo "<div class='confirmation center'><br />The format for your part number must be 8 digits of numbers 0-9"
			. "<br /><a href='#' onclick='window.history.back(); return false;'>Back</a></div>";
		} elseif ($product->partnumber != NULL){
			echo "<div class='confirmation center'><br />Part number already exists"
			. "<br /><a href='#' class='edit-button btn btn-sm btn-default' onclick='window.history.back(); return false;'>Back</a></div>";
		} else {
			Product::create($partNumber, $description, $image, $stock, $costPrice, $salePrice, $vatRate);
			echo "<div class='confirmation center'><br />Successfully create new product</div>";
      		self::printSingle($partNumber);
		}
	}

	public function edit($originalPartNumber, $partNumber, $description, $image, $stock, $costPrice, $salePrice, $vatRate){
		$product = Product::getSingle($partNumber);
		if (($partNumber != $originalPartNumber) && ($product->partnumber != NULL)){
			echo "<div class='confirmation center'><br />Part number already exists"
			. "<br /><a href='#' class='edit-button btn btn-sm btn-default' onclick='window.history.back(); return false;'>Back</a></div>";
		} elseif((!is_int($partNumber)) && (strlen((string)$partNumber)) != 8){
			echo "<div class='confirmation center'><br />The format for your part number must be 8 digits of numbers 0-9"
			. "<br /><a href='#' class='edit-button btn btn-sm btn-default' onclick='window.history.back(); return false;'>Back</a></div>";

		}else{
			Product::edit($originalPartNumber, $partNumber, $description, $image, $stock, $costPrice, $salePrice, $vatRate);
			echo "<div class='confirmation center'><br />You have succesfully edited the part number " . $partNumber . "<br /></div>";
			self::printSingle($partNumber);
  		}
		
	}
	
	public function delete($partNumber){
		return Product::delete($partNumber);
	}


}