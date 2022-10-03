<?php

class Database {

    public static function getConnection() {
        
        $envPath = realpath(dirname(__FILE__) . '/../env.ini');
        $env     = parse_ini_file($envPath);
    
        try {

            $user = $env["username"];
            $host = $env["host"];
            $password = $env["password"];
            $database = $env["database"];
    
            $conn = new PDO("mysql:host=$host;dbname=$database", $user, $password);

        } catch (PDOException $e) {

            exit('Error: '. $e->getmessage());

        }

        return $conn;
    }

    /**
     * Método resposável por retornar o resultado de uma query
     * @param String
     * @return PDOStatement
    */
    public static function getResultadoDaQuery($sql) {

        $conn = self::getConnection();
        $result = $conn->prepare($sql);
        $result->execute();

        return $result;
    }
}