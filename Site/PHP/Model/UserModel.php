<?php
class UserModel
{
    private $id;
    private $login;
    private $password;

    public function __construct($id = null, $login = null, $password = null)
    {
        $this->id = $id;
        $this->login = $login;
        $this->password = $password;
    }


    public function getFirstName(){
        $sql = "SELECT prenom FROM `personne` WHERE id = :id";
        $req_prep = Model::$pdo->prepare($sql);
        $values = array(
            "id" => $this->id
        );
        $req_prep->execute($values);
        $tab_obj = $req_prep->fetchAll();
        if (empty($tab_obj)) {
            return false;
        } else {
            return $tab_obj[0];
        }
    }
    public function getRole(){
        $sql = "SELECT role FROM `personne` WHERE id = :id";
        $req_prep = Model::$pdo->prepare($sql);
        $values = array(
            "id" => $this->id
        );
        $req_prep->execute($values);
        $tab_obj = $req_prep->fetchAll();
        if (empty($tab_obj)) {
            return false;
        } else {
            return $tab_obj[0];
        }
    }

    // Fonction permetant de savoir si le mot de passe et le login sont correcte
    public static function isValidLogin($login, $password)
    {
        $user = UserModel::getUserByLogin($login);
        if ($user != null) {
            if (password_verify($password, $user->password)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    // Fonction permettant de récupérer un utilisateur par son login utilisant Model
    public static function getUserByLogin($login)
    {
        $sql = "SELECT * FROM `user` WHERE `login` = :login";
        $req_prep = Model::$pdo->prepare($sql);
        $values = array(
            "login" => $login
        );
        $req_prep->execute($values);
        $req_prep->setFetchMode(PDO::FETCH_CLASS, 'UserModel');
        $tab_obj = $req_prep->fetchAll();
        if (empty($tab_obj)) {
            return false;
        } else {
            return $tab_obj[0];
        }
    }
}
