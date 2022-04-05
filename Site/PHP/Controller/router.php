<?php

if (sizeof($_GET) > 0) {
    if (array_key_exists("controller", $_GET)) {
        $controller = $_GET["controller"];
        if (file_exists("controller/" . $controller . ".php")) {
            require_once("controller/" . $controller . ".php");
            if (array_key_exists("action", $_GET)) {
                $action = $_GET["action"];
                if (method_exists($controller, $action))
                    $controller::$action();
                else {
                }
            } else {// Redirect to home page if no action is specified
                $controller = 'Global';
                $view = 'home';
                debug_to_console("No action specified");
                require_once File::build_path(array("Vue","vue.php"));
            }
        } else {// Redirect to home page if the controller doesn't exist
            $controller = 'Global';
            $view = 'home';
            debug_to_console("Controller doesn't exist");
            require_once File::build_path(array("Vue","vue.php"));
        }
    } else {// Redirect to home page if no controller
        $controller = 'Global';
        $view = 'home';
        debug_to_console("No controller specified");
        require_once File::build_path(array("Vue","vue.php"));
    }
} else { // Redirect to home page if nothing in get
    $controller = 'Global';
    $view = 'home';
    debug_to_console("Nothing in get");
    require_once File::build_path(array("Vue","vue.php"));
}



?>