<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Wifi;

/**
 * Description of Customer
 *
 * @author EsletzbichlerE
 */
class Customer {
   private $billAddress;
   private $shipAddress;
   private $name;
      /**
    * Gtc equals AGB in german
    * @var bool read Gtc or not
    */
   private $readGtc = false;

   public function getBillAddress() {
       return $this->billAddress;
   }

   public function getShipAddress() {
       return $this->shipAddress;
   }

   public function getName() {
       return $this->name;
   }

   public function getReadGtc() {
       return $this->readGtc;
   }

   public function setBillAddress(\Wifi\Address $billAddress) {
       $this->billAddress = $billAddress;
       return $this;
   }

   public function setShipAddress(\Wifi\Address $shipAddress) {
       $this->shipAddress = $shipAddress;
       return $this;
   }

   public function setName($name) {
       $this->name = $name;
       return $this;
   }

   public function setReadGtc($readGtc) {
       $this->readGtc = $readGtc;
       return $this;
   }

   /* @TODO implement save() to save the customer inside the session */
}
