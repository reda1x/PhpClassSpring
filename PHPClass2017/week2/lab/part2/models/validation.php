<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
  class validation {

      public function isValidEmail($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL) !== false):
        return true;
    else:
        return false;
    endif;
}

public function isValidZip($zip) { {
        if (preg_match("/^([0-9]{5})(-[0-9]{4})?$/i", $zip)){
        return true;}
        else{
        return false;}
    }
}

public function isValidDate($date) {
    return (bool) strtotime($date);
}
}

