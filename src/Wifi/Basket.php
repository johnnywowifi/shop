<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Wifi;


class Basket {
    private $products = array();

    public function addProduct(\Wifi\BasketProduct $product)
    {
        $this->products[] = $product;
        return true;
    }
    
    public function removeProduct($itemId)
    {
        unset($this->products[$itemId]);
    }
    
    public function getTotalAmount()
    {
        $amount = 0;
        /* @var $product \Wifi\BasketProduct */
        foreach($this->products as $product) {
            $amount += $product->getAmount();
        }
        return $amount;
    }
    
    public function getTotalSum($locale = 'en') 
    {
        $sum = 0;
        foreach($this->products as $product) {
            $sum += $product->getAmount() * $product->getPrice();
        }
        switch ($locale) {
            case 'de':
                $sum = number_format($sum, 2, ',', '.');
                break;
            case 'en':
                $sum = number_format($sum, 2, '.', ',');
                break;
            default:
                throw new \InvalidArgumentException($locale . ' is not implemented');
        }
        return $sum;
        
    }
    
    public function getProducts()
    {
        return $this->products;
    }
    
    public function setProducts(Array $products)
    {
        $this->products = array();
        foreach($products as $product){
            if($product instanceof \Wifi\BasketProduct){
                $this->addProduct($product);                
            } else {
                throw new \InvalidArgumentException('Product not instanceof Wifi\BasketProduct');
            }
        }
        return $this->getProducts();
    }
   
    
    public function save() 
    {
        $_SESSION['basket']['products'] = $this->getProducts();
    }
    
    public function restore() 
    {
        if(isset($_SESSION['basket']['products']) and is_array($_SESSION['basket']['products'])) {
            $this->setProducts($_SESSION['basket']['products']);
        }
    }
    
    public function __destruct() 
    {
        $this->save();
    }
}
