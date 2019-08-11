<?php

namespace app\model;

use app\model\Connection;

class Model{

    protected $conn;

    public function __construct(){
        $this->conn = Connection::connect();
    }

    public function all(){

        $sql = "SELECT * FROM $this->table";
        $all = $this->conn->query($sql);
        $all->execute();

        return $all->fetchAll();

    }

}