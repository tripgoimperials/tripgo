<?php

namespace App\Database;

use PDO;
use PDOException;

class Databse{
    private PDO $connection;
    public function __construct(array $config){
         $database = $config["database"];

         $dsn = sprintf("mysql:host=%s;port=%s;dbname=%s;charset=utf8mb4",
         $database['host'],
         $database['port'],
         $database['name']
         );

         try {
            $this->connection = new PDO($dsn,
            $database['username'],
            $database['password'],
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ]);
         } catch (\Throwable $th) {
             http_response_code(500);
             die(json_encode([
                'sucess'=>false,
                'message'=>'Database connection failed'
             ]));
         }
    }

    public function getConection():PDO{
        return $this->connection;
    }
}