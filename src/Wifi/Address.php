<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Wifi;

/**
 * Description of Address
 *
 * @author EsletzbichlerE
 */
class Address {
    private $name;
    private $postal;
    private $city;
    private $street;
            
    public function getName() {
        return $this->name;
    }

    public function getPostal() {
        return $this->postal;
    }

    public function getCity() {
        return $this->city;
    }

    public function getStreet() {
        return $this->street;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setPostal($postal) {
        $this->postal = $postal;
        return $this;
    }

    public function setCity($city) {
        $this->city = $city;
        return $this;
    }

    public function setStreet($street) {
        $this->street = $street;
        return $this;
    }
    
    public function getAdressInfo() {
        $_SESSION['getAddressInfo'] = $this;
        return $this;
                
    }
    
    public function save()
    {
        $SESSION['Address']['Name'] = $this->getName();
        $SESSION['Address']['Street'] = $this->getStreet();
        $SESSION['Address']['PLZ'] = $this->getPostal();
        $SESSION['Address']['Ort'] = $this->getCity();
        
    }
    
    public function restore() 
    {
        if(isset($_SESSION['basket']['products']) and is_array($_SESSION['basket']['products'])) {
            $this->setProducts($_SESSION['basket']['products']);
        }
    }


}
