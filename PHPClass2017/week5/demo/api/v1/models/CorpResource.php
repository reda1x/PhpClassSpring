<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CorpResource
 *
 * @author w1x
 */
class CorpResource extends DBSpring implements IRestModel {
    
    public function getAll() {
            $stmt = $this->getDb()->prepare("SELECT * FROM corps");
        $results = array();      
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return $results;
    }
    
    public function get($id) {
       
        $stmt = $this->getDb()->prepare("SELECT * FROM corps WHERE id = :id");
        $binds = array(":id" => $id);

        $results = array(); 
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        
        return $results;
                
    }
    
    public function post($serverData) {
        /* note you should validate before adding to the data base */
        $stmt = $this->getDb()->prepare("INSERT INTO corps SET corp = :corp, email = :email, incorp_dt = :incorp_dt, owner = :owner, phone = :phone, location = :location");
        $binds = array(
            ":corp" => $serverData['corp'],
            ":email" => $serverData['email'],
            ":incorp_dt" => $serverData['incorp_dt'],
            ":phone" => $serverData['phone'],
            ":location" => $serverData['location'],
            ":owner" => $serverData['owner'],
        );

        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            return true;
        } 
        return false;
    }
    public function put($serverData,$id){
        $stmt = $this->getDb()->prepare("UPDATE corps SET corp = :corp, email = :email, incorp_dt = :incorp_dt, owner = :owner, phone = :phone, location = :location WHERE id =:id");
        $binds = array(
            ":corp" => $serverData['corp'],
            ":email" => $serverData['email'],
            ":incorp_dt" => $serverData['incorp_dt'],
            ":phone" => $serverData['phone'],
            ":location" => $serverData['location'],
            ":owner" => $serverData['owner'],
        );
        
        
        if ($stmt->execute($binds)) {
            return true;
        } 
        return false;
    }
    public function delete($id){
        $stmt = $this->getDb()->prepare("DELETE FROM corps WHERE id = :id");
                $binds = array(":id" => $id);
        if ($stmt->execute($binds)) {
            return true;
        } 
        return false;
    }
}
