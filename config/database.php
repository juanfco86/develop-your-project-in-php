<?php

class Database {
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $db = 'final_project_php';
    private $connect;
    
    public function __construct() {
            $connectionString = "mysql:hos=".$this->host.";dbname=".$this->db.";";
            try {
                $this->connect = new PDO($connectionString, $this->user, $this->password);
                $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch (Exception $e) {
                $this->connect = "Connection error";
                echo "ERROR: ". $e->getMessage();
            }
            
        }

        public function connectDatabase() {
            return $this->connect;
        }

    }


?>