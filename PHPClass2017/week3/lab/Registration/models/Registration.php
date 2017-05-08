<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Registration
 *
 * @author w1x
 */
class Registration extends DB {
    
    public function __construct() {
        $dbConfig = array(
            'DB_DNS' => 'mysql:host=localhost;port=3306;dbname=PHPAdvClassSpring2017',
            'DB_USER' => 'root',
            'DB_PASSWORD' => '');
        parent::__construct($dbConfig);
    }

    public function signup($email, $password) {
        $db = $this->getDB();
        $sql = "INSERT INTO users SET email = :email, password = :password, created = NOW()";
        $stmt = $db->prepare($sql);
        $binds = array(
            ":email" => $email,
            ":password" => password_hash($password, PASSWORD_DEFAULT)
        );
        if ($stmt->execute($binds) && $stmt->rowCount()>0) {
            return true;
        }
    }
    public function login ($email,$password){
        $db = $this->getDB();

        $sql = ("SELECT * FROM users WHERE email = :email LIMIT 1");
        $stmt = $db->prepare($sql);
        $binds = array(
            ":email" => $email,
           );
        if ($stmt->execute($binds)&& $stmt->rowCount()>0){
            
            $results = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if (password_verify($password, $results['password'])){
                return intval($results['user_id']);
            }
        }
        
    }

}
