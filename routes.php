<?php
    require_once "autoload.php";

    class Route {
    
        function __construct() {
            if (isset($_GET['controller'])) {
                $nameController = $_GET['controller'].'Controller';

                if(class_exists($nameController)) {
                    $controller = new $nameController();

                    if (isset($_GET['action'])) {
                        $action = $_GET['action'];
                        
                        if (isset($_GET['id'])) {
                            $controller->$action($_GET['id']);

                        } else {
                            $controller->$action();
                        }

                    } else {
                        echo "The page doesn't exist.";
                    }

                } else {
                    echo "The page doesn't exist.";
                }

            } else {
                require_once "views/main/main.php";
            }
        }

        

    }


?>