<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SuccessMessage
 *
 * @author w1x
 */
class SuccessMessage extends Message{
     protected $successMessages =[];

    public function addMessage($key, $msg) {
        $this->successMessages[$key]= $msg;
    }

    public function removeMessage($key) {
        
       unset($this->successMessages[$key]); 
       
        
    }

    public function getAllMessages() {
        return $this->successMessages;
        
    }


}
