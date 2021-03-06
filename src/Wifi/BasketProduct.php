<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Wifi;

/**
 * Description of BasketProduct
 *
 * @author EsletzbichlerE
 */
class BasketProduct {
    private $name;
    private $amount;
    private $price;
    private $id;
    
    
    public function getName() {
        return $this->name;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function getPrice($locale = 'en') {
        $price = $this->price;
        switch ($locale) {
            case 'de':
                $price = number_format($this->price, 2, ',', '.');
                break;

            default:
                $price = $this->price;
                break;
        }
        return $price;
    }
    
    public function getTotal($locale = 'en') 
    {
        $total = $this->price * $this->amount;
        switch ($locale) {
            case 'de':
                $total = number_format($total, 2, ',', '.');
                break;

            default:
                $total = $total;
                break;
        }
        return $total;
    }

    public function getId() {
        return $this->id;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setAmount($amount) {
        $this->amount = $amount;
        return $this;
    }

    public function setPrice($price) {
        $this->price = $price;
        return $this;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }


}
