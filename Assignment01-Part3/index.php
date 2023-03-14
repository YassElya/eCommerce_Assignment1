<?php

    // With this new fie, the url will need to be like this:
    // localhost/Assignment01-Part2/index.php?resource=balloon&ressourceid=123&action=list

    spl_autoload_register(
        
        function ($class) {
            
            require($class.".php");

        }

    );

    class App {
        
        function __construct() {

            if (isset($_GET)) {
                if (isset($_GET['resource'])) {

                    $resource = $_GET['resource'];

                    $controllerClass = "\\controllers\\".ucfirst($resource)."Controller";
                    
                    if (class_exists($controllerClass)) {
                        $controller = new $controllerClass();
                    }
                }   
            }

        }

    }

    // Test
    $app = new App();

?>