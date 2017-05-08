<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ErrorMessage
 *
 * @author w1x
 */
class ErrorMessage Extends Message{
   protected $errorMessages =[];

    public function addMessage($key, $msg) {
        $this->errorMessages[$key]= $msg;
    }

    public function removeMessage($key) {
        
       unset($this->errorMessages[$key]); 
       
        
    }

    public function getAllMessages() {
        return $this->errorMessages;
        
    }

    
}
