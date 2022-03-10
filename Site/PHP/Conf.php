<?php

class Conf {
    private static $database = array(
        'hostname' => 'localhost',
        'database' => 'pgiacc_test',
        'login'    => 'pgiacc_test',
        'password' => '#NoL#N79dncmnNQT'
    );

    static public function getLogin() {
        return self::$database['login'];
    }

    static public function getHostname() {
        return self::$database['hostname'];
    }

    static public function getDatabase() {
        return self::$database['database'];
    }

    static public function getPassword() {
        return self::$database['password'];
    }

}
