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

      try{
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

      } catch(PDOException $error) {
          echo "There was an error getting products: " . $error->getMessage();
      }
      $dbInstance = null;

    }


    public function getSingle($partNumber){

      try{
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

      } catch(PDOException $error) {
          echo "There was an error getting the product: " . $error->getMessage();
      }
      $dbInstance = null;
    }


    public function edit($originalPartNumber, $partNumber, $description, $image, $stock, $costPrice, $salePrice, $vatRate){

      try{
  		  $sqlEdit = 'UPDATE products SET partnumber= :partnumber, description= :description, image= :image, stock= :stock, costprice= :costprice, saleprice= :saleprice, vatrate= :vatrate WHERE partnumber= :originalpartnumber';

      	$dbInstance = Database::getInstance();

      	$sqlRequest = $dbInstance->prepare($sqlEdit);

      	$sqlRequest->execute(array(':partnumber' => $partNumber, ':description' => $description,':image' => $image,':stock' => $stock,':costprice' => $costPrice,':saleprice' => $salePrice,':vatrate' => $vatRate, ':originalpartnumber' => $originalPartNumber));


        return $sqlRequest;
      } catch(PDOException $error) {
          echo "There was an error editing the product: " . $error->getMessage();
      }
      $dbInstance = null;
    }


    public function create($partNumber, $description, $image, $stock, $costPrice, $salePrice, $vatRate){

      try{
  		  $sqlCreate = 'INSERT INTO products (partnumber, description, image, stock, costprice, saleprice, vatrate) VALUES (:partnumber, :description, :image, :stock, :costprice, :saleprice, :vatrate)';

      	$dbInstance = Database::getInstance();

      	$sqlRequest = $dbInstance->prepare($sqlCreate);

      	$sqlRequest->execute(array(':partnumber' => $partNumber, ':description' => $description,':image' => $image,':stock' => $stock,':costprice' => $costPrice,':saleprice' => $salePrice,':vatrate' => $vatRate));

        return $sqlRequest;

      } catch(PDOException $error) {
          echo "There was an error creating the product: " . $error->getMessage();
      }
      $dbInstance = null;
    }


    public function delete($partNumber){

      try{
        $sqlGetSingle = 'DELETE FROM `products` WHERE partnumber= :partnumber';

        $dbInstance = Database::getInstance();

        $sqlRequest = $dbInstance->prepare($sqlGetSingle);

        $sqlRequest->execute(array(':partnumber' => $partNumber));

        echo "Product removed successfully";

      } catch(PDOException $error) {
          echo "There was an error deleteing the product: " . $error->getMessage();
      }
      $dbInstance = null;
    }

}

?>