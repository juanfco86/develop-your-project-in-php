<?php
    require_once "ModelBasic.php";

    class Vehicle extends ModelBasic {

        public $brand;
        public $model;
        public $age;
        // public $connect;


        // public function __construct() {
        //     parent::__construct();
        // }

        // function getBrand() {
        //     return $this->brand;
        // }

        // function getModel() {
        //     return $this->model;
        // }

        // function getAge() {
        //     return $this->age;
        // }

        // function setBrand($brand) {
        //     $this->brand = $brand;
        // }

        // function setModel($model) {
        //     $this->model = $model;
        // }

        // function setAge($age) {
        //     $this->age = $age;
        // }

        public function create(string $brand, string $model, int $age) {
            $this->brand = $brand;
            $this->model = $model;
            $this->age = $age;

            $sql = "INSERT INTO vehicles(brand, model, age) VALUES (?,?,?)";
            $insert = $this->connect->prepare($sql);
            $arrData = array($this->brand, $this->model, $this->age);
            $insertExe = $insert->execute($arrData);
        }

        public function get($id) {
            $sql = "SELECT * FROM vehicles WHERE id=$id LIMIT 1";
            $query = $this->connect->query($sql);
            $request = $query->fetch();
            return $request;
        }

        public function modify(int $id, string $brand, string $model, string $age) {
            $sql = "UPDATE vehicles SET brand='$brand', model='$model', age='$age' WHERE id=$id";
            $update = $this->connect->query($sql);            
        }

        public function delete($id) {
            $sql = "DELETE FROM vehicles WHERE id=$id";
            $delete = $this->connect->query($sql);
            
        }

    }

?>