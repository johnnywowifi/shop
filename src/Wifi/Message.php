<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Wifi;

/**
 * Description of Message
 *
 * @author EsletzbichlerE
 */
class Message {
   private $text;
   private $type = 'info';
   
   public function setError($text) 
   {
       $this->type = 'error';
       $this->text = $text;
       return $this;
   }
   
   public function setWarning($text) 
   {
       $this->type = 'warning';
       $this->text = $text;
       return $this;
   }
   
   public function setInfo($text) 
   {
       $this->type = 'info';
       $this->text = $text;
       return $this;
   }
   
   public function set($type, $text) {
       $this->type = $type;
       $this->text = $text;
       return this;
   }
   
   public function getText() {
       return $this->text;
   }

   public function getType() {
       return $this->type;
   }

   public function setText($text) {
       $this->text = $text;
       return $this;
   }

   public function setType($type) {
       $this->type = $type;
       return $this;
   }


}
