<?php

    class UserController {
        
        public function showAll() {
            require_once "models/user.php";

            $user = new User();

            $data['users'] = $user->getAll('users');

            require_once "views/user/showAll.php";
        }

        public function create() {
            require_once "views/user/create.php";       
        }

        public function createdUser() {
            require_once "models/user.php";
            require_once "views/user/createdUser.php";

            $user = new User();

            $user->create($_POST['name'], $_POST['email'], $_POST['username'], $_POST['password']);
        }

        public function modify($id) {
            require_once "models/user.php";

            $user = new User();

            $data['id'] = $id;
            $data['users'] = $user->get($id);
            
            require_once "views/user/modify.php";
        }

        public function updatedUser() {
            require_once "models/user.php";
            
            $user = new User();

            $user->modify($_GET['id'], $_POST['name'], $_POST['email'], $_POST['username'], $_POST['password']);
            require_once "views/user/updatedUser.php";
        }
        

        public function delete($id) {
            require_once "models/user.php";

            $user = new User();

            $delete = $user->delete($id);

            header("Location: ?controller=User&action=showAll");
        }

        public function login() {
            require_once "models/user.php";
            
            $user = new User();
            
            if (isset($_POST['login'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                
                $ready = $user->login($username, $password);
                $_SESSION['login'] = "OK";
                
                //var_dump($_SESSION['login']);  
                
                if($ready) {
                    require_once "views/main/main.php";
                } else {
                    require_once "views/user/login.php";
                    echo "Wrong username or password.";
                }
            }

        }

    }

?>
