<?php
require_once('../src/bootstrap.php');
$action = filter_input(INPUT_POST, 'basketAction');

if($action === 'add') {
    $id = filter_input(INPUT_POST, 'prodId');
    $name = filter_input(INPUT_POST, 'prodName');
    $price = filter_input(INPUT_POST, 'prodPrice', FILTER_VALIDATE_FLOAT);
    $amount = filter_input(INPUT_POST, 'prodCount', FILTER_VALIDATE_INT);
    
    $basketProduct = new Wifi\BasketProduct();
    $basketProduct->setId($id)
            ->setName($name)
            ->setPrice($price)
            ->setAmount($amount);
    
    $basket = new Wifi\Basket();
    $basket->restore();
    $basket->addProduct($basketProduct);
    $basket->save();
}
var_dump($_SESSION);

