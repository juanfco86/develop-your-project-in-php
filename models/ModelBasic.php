<?php

    require_once "config/database.php";

    class ModelBasic {

        public $connect;

        public function __construct() {
            $this->connect = new Database();
            $this->connect = $this->connect->connectDatabase();
        }

        public function getAll($table) {
            $sql = "SELECT * FROM $table";
            $query = $this->connect->query($sql);
            $request = $query->fetchAll(PDO::FETCH_ASSOC);
            return $request;
        
        }

    }

?>