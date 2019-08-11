<?php

namespace app\model;

use PDO;

class Connection {

    public static function connect(){

        $servername = "localhost";
        $port = "3306";
        $myDB = "estados";
        $username = "***";
        $password = "***";
        
        try {

            $conn = new PDO("mysql:host=$servername;port=$port;dbname=$myDB", $username, $password);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

            return $conn;
            }
        catch(PDOException $e)
            {
            echo "Connection failed: " . $e->getMessage();
            die();
            } 
    }
}