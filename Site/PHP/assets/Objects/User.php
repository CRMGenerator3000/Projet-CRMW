<?php
class User{
    private $id;
    private $firstName;
    private $lastName;
    private $email;
    private $password;
    private $role;
    private $isActive;
    private $dateCreation;
    private $dateModification;
    
    public function __construct($id, $firstName, $lastName, $email, $password, $role, $isActive, $dateCreation, $dateModification){
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
        $this->isActive = $isActive;
        $this->dateCreation = $dateCreation;
        $this->dateModification = $dateModification;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getFirstName(){
        return $this->firstName;
    }
    
    public function getLastName(){
        return $this->lastName;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    public function getPassword(){
        return $this->password;
    }
    
    public function getRole(){
        return $this->role;
    }
    
    public function getIsActive(){
        return $this->isActive;
    }
    
    public function getDateCreation(){
        return $this->dateCreation;
    }
    
    public function getDateModification(){
        return $this->dateModification;
    }
    
    public function setId($id){
        $this->id = $id;
    }
    
    public function setFirstName($firstName){
        $this->firstName = $firstName;
    }
    
    public function setLastName($lastName){
        $this->lastName = $lastName;
    }
    
    public function setEmail($email){
        $this->email = $email;
    }
}
include_once File::build_path(array("Model","UserModel.php"));
// Fonction permettant de savoir si l'utilisateur est connecté
function isConnected() {
    if (isset($_SESSION['login'])) {
        return true;
    } else {
        return false;
    }
}

// Fonction permetant de savoir si le mot de passe et le login sont correcte
function isValidLogin($login, $password) {
    $user = UserModel::getUserByLogin($login);
    if ($user != null) {
        if (password_verify($password, $user->getPassword())) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

// getTableName
function getTableName($class) {
    $table = strtolower($class);
    $table = str_replace("model", "", $table);
    return $table;
}

