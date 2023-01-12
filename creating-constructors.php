<?php

class Product
{

 public $name;
 public $price;

  public function __construct($name,$price)

  {

  $this->name = $name;
  $this->price = $price;

  }


 public function priceAsCurrency($divisor = 1, $currencySymbol = '$')
 {

  $priceAsCurrency = $this->price / $divisor;

  return $currencySymbol . $priceAsCurrency;

 }

}

$product = new Product('Soap', 100);
print $product->name . PHP_EOL;
print $product->price . PHP_EOL;