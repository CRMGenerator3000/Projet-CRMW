<?php
if (sizeof($_GET) > 0) {
    if (array_key_exists("controller", $_GET)) {
        $controller = $_GET["controller"];
        if (file_exists("controller/" . $controller . ".php")) {
            require_once("controller/" . $controller . ".php");

            if (array_key_exists("f", $_GET)) {
                $f = $_GET["f"];
                if (method_exists($controller, $f))
                    $controller::$f();
                else {
                }
            } else {
            }
        } else {
        }
    } else {
    }
} else {
    require_once('view/home.php');
}
