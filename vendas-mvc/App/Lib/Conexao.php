<?php

class Conexao
{
    private static $connection;

    private function __construct(){}

    public static function getConnection() {

        $pdoConfig  = DB_DRIVER . ":" . "host=" . DB_HOST . ";";
        $pdoConfig .= "port=" . DB_PORT . ";" . "dbname=" . DB_NAME . ";";

        try { 
            if(!isset(self::$connection)){
                self::$connection =  new PDO($pdoConfig, DB_USER, DB_PASSWORD);
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            return self::$connection;
        } catch (PDOException $e) {
            print "ERRO:". $e->getMessage();
        }
    }
}