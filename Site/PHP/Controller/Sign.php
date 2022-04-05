<?php
class Sign{
    public function login(){
        include_once File::build_path(array("Model","UserModel.php"));
        if(ConnectModel::isConnected()){
            // TODO Créer les variables
            require_once File::build_path(array("Vue","Special","Signed.php"));
        }else{
            require_once File::build_path(array("Vue","Special","SignUp.php"));
        }
    }
    public function loginIn(){
        if(isset($_GET['login'])&&isset($_GET['password'])){
            include_once File::build_path(array("Model","UserModel.php"));
            if(UserModel::isValidLogin($_GET["login"],$_GET['password'])){
                // TODO Créer un token
                $_SESSION['login'] = $_GET['login'];
            }
        }
    }
}