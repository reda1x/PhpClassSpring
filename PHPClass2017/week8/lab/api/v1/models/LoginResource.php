<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginResource
 *
 * @author w1x
 */
class LoginResource extends DBSpring {

    public function login($serverData) {


        $sql = ("SELECT * FROM users WHERE email = :email LIMIT 1");
        $stmt = $this->getDb()->prepare($sql);
        $binds = array(
            ":email" => $serverData['email'],
        );
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {

            $results = $stmt->fetch(PDO::FETCH_ASSOC);

            if (password_verify($serverData['password'], $results['password'])) {
                return intval($results['user_id']);
            }
        }

        return false;
    }

}
