<?php
namespace App;
class App{

    const DB_NAME = 'burgernshake';
    const DB_USER = 'root';
    const DB_PASSWORD = 'root';
    const DB_HOST = 'localhost';

    private static $database;


    public static function getDb(){
        if(self::$database === null ){
            self::$database =  new Database(self::DB_NAME, self::DB_USER, self::DB_PASSWORD, self::DB_HOST);
        }
        return self::$database;
    }
}