<?php

class Product
{

    public $name = 'soap';
    public $price; #cents

    public function priceAsCurrency()
{
    $priceAsCurrency = $this->price / 100;
    
    return $priceAsCurrency;
}

}

$soapObject = new Product();
$soapObject->price = 500;
$priceAsCurrency = $soapObject->priceAsCurrency();
var_dump($priceAsCurrency) . PHP_EOL;
