<?php
use FTP\Connection;

    require_once "ModelBasic.php";

    class User extends ModelBasic {
        public $id;
        public $name;
        public $email;
        public $username;
        public $password;        
        // public $connect;
        

        // public function __construct() {
        //     parent::__construct();
        // }

        // function getId() {
        //     return $this->id;
        // }

        // function getName() {
        //     return $this->name;
        // }

        // function getEmail() {
        //     return $this->email;
        // }

        // function getUsername() {
        //     return $this->username;
        // }

        // function getPass() {
        //     return $this->pass;
        // }

        // function setId($id) {
        //     $this->id = $id;
        // }

        // function setName($name) {
        //     $this->name = $name;
        // }

        // function setEmail($email) {
        //     $this->email = $email;
        // }

        // function setUsername($username) {
        //     $this->username = $username;
        // }

        // function setPass($pass) {
        //     $this->pass = $pass;
        // }

        public function create(string $name, string $email, string $username, string $password) {
            $this->name = $name;
            $this->email = $email;
            $this->username = $username;
            $this->password = $password;

            $sql = "INSERT INTO users(name, email, username, password) VALUES (?,?,?,?)";
            $insert = $this->connect->prepare($sql);
            $arrData = array($this->name, $this->email, $this->username, $this->password);
            $insertExe = $insert->execute($arrData);

        }

        public function get($id) {
                $sql = "SELECT * FROM users WHERE id=$id LIMIT 1";
                $query = $this->connect->query($sql);
                $request = $query->fetch();
                return $request;
        }

        public function modify(int $id, string $name, string $email, string $username, string $password) {
            $sql = "UPDATE users SET name='$name', email='$email', username='$username', password='$password' WHERE id=$id";
            $update = $this->connect->query($sql);            
        }

        public function delete($id) {
            $sql = "DELETE FROM users WHERE id=$id";
            $delete = $this->connect->query($sql);
            
        }

    }

?>