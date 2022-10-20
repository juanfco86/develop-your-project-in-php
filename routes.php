<?php
    require_once "autoload.php";

    session_start();

    class Route {
    
        function __construct() {
            if (isset($_SESSION['login'])) {
                if (isset($_GET['controller'])) {
                    $nameController = $_GET['controller'].'Controller';

                    if (class_exists($nameController)) {
                        $controller = new $nameController();

                        if (isset($_GET['action'])) {
                            $action = $_GET['action'];

                            if ($action !== 'login' && $_SESSION['login'] == 'OK') {

                                if (isset($_GET['id'])) {
                                    $controller->$action($_GET['id']);

                                } else {
                                    $controller->$action();
                                }
                            }

                            if ($action == 'login' && !isset($_SESSION['login'])) {
                                require_once "views/user/login.php";
                            } else if ($action == 'login' && isset($_SESSION['login'])) {
                                require_once "views/main/main.php";
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
            } else {
                require_once "views/user/login.php";
            }
                // if (isset($_GET['controller'])) {
                //     $nameController = $_GET['controller'].'Controller';

                //     if(class_exists($nameController)) {
                //         $controller = new $nameController();

                //         if (isset($_GET['action'])) {
                //             $action = $_GET['action'];

                //             if ($action !== 'login') {

                //                 if (!isset($_SESSION['login'])) {
                //                     require_once "views/user/login.php";;
                //                 }

                //                 if (isset($_GET['id'])) {
                //                     $controller->$action($_GET['id']);
                                    
                //                 } else {
                //                     $controller->$action();
                //              }
                //         }

                //         } else {
                //             echo "The page doesn't exist.";
                //         }

                //     } else {
                //         echo "The page doesn't exist.";
                //     }

                // } else {
                //     require_once "views/user/login.php";
                // }
                
            
        }

        

    }


?>