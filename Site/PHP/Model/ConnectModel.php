<?php

class ConnectModel
{
    // Fonction permettant de savoir si l'utilisateur est connecté
    public static function isConnected()
    {
        if (isset($_SESSION['login'])) {
            return true;
        } else {
            return false;
        }
    }

    

    // Fonction de hashage du mot de passe
    public static function hashPassword($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }
}
