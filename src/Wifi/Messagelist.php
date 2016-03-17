<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Wifi;

/**
 * Description of Messagelist
 *
 * @author EsletzbichlerE
 */
class Messagelist {
    private $data = array();
    
    public function add(\Wifi\Message $message)
    {
       $this->data = $message;
    }
    
    public function remove() 
    {
       $this->data = array(); 
    }
    
    public function save() 
    {
       $_SESSION['messagelist'] = $this->data; 
    }
    
    public function restore() 
    {
        if(isset($_SESSION['messagelist'])) {
            $this->data = $_SESSION['messagelist'];
        }
    }
    
    public function setMessagelist(Array $data) 
    {
        foreach($data as $item){
            $this->add($item);
        }
    }
    
    public function getMessagelist() 
    {
        return $this->data;
    }
    
    public function hasMessages() {
        if(count($this->data) > 0) {
            return true;
        }
        return false;
    }
}
