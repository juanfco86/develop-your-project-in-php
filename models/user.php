<?php
use FTP\Connection;

    require_once "ModelBasic.php";

    class User extends ModelBasic {
        public $id;
        public $name;
        public $email;
        public $username;
        public $password;        


        function getId() {
            return $this->id;
        }

        function getName() {
            return $this->name;
        }

        function getEmail() {
            return $this->email;
        }

        function getUsername() {
            return $this->username;
        }

        function getPassword() {
            return $this->password;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setName($name) {
            $this->name = $name;
        }

        function setEmail($email) {
            $this->email = $email;
        }

        function setUsername($username) {
            $this->username = $username;
        }

        function setPassword($password) {
            $this->password = $password;
        }

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

        public function login($username, $password) {
            $sql = "SELECT * FROM users WHERE username=:user";
            $login = $this->connect->prepare($sql);
            $login->bindParam(":user", $username);
            $login->execute();

            // SEE IF USER EXIST AND RETURN ROW WITH DATABASE INFO
            if ($login->rowCount() == 1) {
                $row = $login->fetch(PDO::FETCH_ASSOC);
                $rowPassword = $row['password'];
                
                // AQUI ESTA LA SOLUCION
                $option = array('cost' => 10);
                $passwordHashed = password_hash($rowPassword, PASSWORD_BCRYPT, $option);

                $passVerify = password_verify($password, $passwordHashed);

                
                if($passVerify) {
                    $_SESSION['login'] = "OK";
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }

        public function logout() {
            session_destroy();
        }

    } // END CLASS

?>