<?php

class loginModel{

    private function connect(){

        $db = new PDO('mysql:host=localhost;'
        .'dbname=db_especial;charset=utf8'
        , 'root', '');
        return $db;
    }
    public function getUserByEmail($email) {
        $db= $this->connect();
        $query = $db->prepare("SELECT * FROM users WHERE email = ?");
        $query->execute([$email]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

}