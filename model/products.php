<?php

Class Product{


    public $partnumber;
    public $description;
    public $image;
    public $stock;
    public $costprice;
    public $saleprice;
    public $vatrate;


    public function __construct($partnumber, $description, $image, $stock, $costprice, $saleprice, $vatrate) {
      $this->partnumber = $partnumber;
      $this->description = $description;
      $this->image = $image;
      $this->stock = $stock;
      $this->costprice = $costprice;
      $this->saleprice = $saleprice;
      $this->vatrate = $vatrate;
    }


    public function getAll(){

    	$sqlGetAll = 'SELECT * FROM `products`';

    	$dbInstance = Database::getInstance();

    	$sqlRequest = $dbInstance->prepare($sqlGetAll);

    	$sqlRequest->execute(array());

    	$list = [];

    	// var_dump($sqlRequest->fetchAll());
    	
      foreach($sqlRequest->fetchAll() as $product) {
        $list[] = new Product($product['partnumber'],
			$product['description'],
			$product['image'],
			$product['stock'],
			$product['costprice'],
			$product['saleprice'],
			$product['vatrate']);
      }
      return $list;
    }


    public function getSingle($partNumber){

    	$sqlGetSingle = 'SELECT * FROM `products` WHERE partnumber= :partnumber';

    	$dbInstance = Database::getInstance();

    	$sqlRequest = $dbInstance->prepare($sqlGetSingle);

    	$sqlRequest->execute(array(':partnumber' => $partNumber));

      	$product = $sqlRequest->fetch();


        $productSingle = new Product($product['partnumber'],
			$product['description'],
			$product['image'],
			$product['stock'],
			$product['costprice'],
			$product['saleprice'],
			$product['vatrate']);
      
      return $productSingle;
    }


    public function edit($partNumber, $description, $image, $stock, $costPrice, $salePrice, $vatRate){


		$sqlEdit = 'UPDATE products SET description= :description, image= :image, stock= :stock, costprice= :costprice, saleprice= :saleprice, vatrate= :vatrate WHERE partnumber= :partnumber';

    	$dbInstance = Database::getInstance();

    	$sqlRequest = $dbInstance->prepare($sqlEdit);

    	$sqlRequest->execute(array(':description' => $description,':image' => $image,':stock' => $stock,':costprice' => $costPrice,':saleprice' => $salePrice,':vatrate' => $vatRate,':partnumber' => $partNumber));


      return $sqlRequest;
    }


    public function create($description, $image, $stock, $costPrice, $salePrice, $vatRate){


		$sqlCreate = 'INSERT INTO products (description, image, stock, costprice, saleprice, vatrate) VALUES (:description, :image, :stock, :costprice, :saleprice, :vatrate)';

    	$dbInstance = Database::getInstance();

    	$sqlRequest = $dbInstance->prepare($sqlCreate);

    	$sqlRequest->execute(array(':description' => $description,':image' => $image,':stock' => $stock,':costprice' => $costPrice,':saleprice' => $salePrice,':vatrate' => $vatRate));

      return $sqlRequest;
    }


}

?>