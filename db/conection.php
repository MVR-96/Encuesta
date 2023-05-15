<?php

class Connection{

    /*------------- Informacion a la base de datos -------------*/
    static public function infoDatabase(){
        $infoDB = array(
            "database" => "gretasantorini",
            "user" => "greta",
            "pass" => "3CS2rxJF1b8ucz*v"
        );
        return $infoDB;
    }

    /*------------- Conexion a la base de datos -------------*/
    static public function connect(){
        try{
            $link = new PDO(
                "mysql:host=localhost;dbname=".Connection::infoDatabase()["database"],
                Connection::infoDatabase()["user"],
                Connection::infoDatabase()["pass"]
            );
            $link->exec("set name utf8");
        } catch(PDOException $e){
            die("Error: ".$e->getMessage());
        }
        return $link;
    }
}

?>