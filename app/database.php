<?php
namespace App;
use \PDO;

class DataBase{

    private $db_name;
    private $db_user;
    private $db_password;
    private $db_host;
    private $pdo;

    public function __construct ($db_name, $db_user='root', $db_password='root', $db_host='localhost' ){
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_password = $db_password;
        $this->db_host = $db_host;
    }

    private function getPDO(){
        if($this->pdo === null){
        $pdo = new PDO('mysql:dbname=burgernshake; host=localhost', 'root', 'root');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo = $pdo;
    }
        return $pdo;
    }

    public function query($statement, $class_name){
        $req = $this->getPDO()->query($statement);
        $data = $req->fetchAll(PDO::FETCH_CLASS, $class_name);
        return $data;
    }

    public function prepare($statement, $attributes, $class_name, $one=false){
        $req = $this->getPDO()->prepare($statement);
        $req->execute($attributes);
        $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        if($one){
            $data = $req->fetch();
        } else {
            $data = $req->fetchAll();
        } 
        return $data;
    }
}