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
    private $address;
    private $postal;
    private $city;
    private $country;
            
    public function getAddress() {
        return $this->address;
    }

    public function getPostal() {
        return $this->postal;
    }

    public function getCity() {
        return $this->city;
    }

    public function getCountry() {
        return $this->country;
    }

    public function setAddress($address) {
        $this->address = $address;
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

    public function setCountry($country) {
        $this->country = $country;
        return $this;
    }


}
