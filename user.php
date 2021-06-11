<?php

require_once 'dao.php';
require_once 'controller_register.php';

class User {
    private $_firstName;
    private $_lastName;
    private $_email;
    private $_passwordUser;

    public function __construct($firstName, $lastName, $email, $passwordUser) {
        $this->SetFirstName($firstName);
        $this->SetLastName($lastName);
        $this->SetEmail($email);
        $this->SetPasswordUser($passwordUser);
        echo 'merde';
    }
    public function SetFirstName($firstName) {
        $this->_firstName = $firstName;
        echo 'merde';
    }
    public function SetLastName($lastName) {
        $this->_lastName = $lastName;
        echo 'merde';
    }
    public function SetEmail($email) {
        $this->_email = $email;
        echo 'merde';
    }
    public function SetPasswordUser($passwordUser) {
        $this->_passwordUser = $passwordUser;
        echo 'merde';
    }

    public function GetFirstName(){
        return $this->_firstName;
        echo 'merde';
    }
    public function GetLastName(){
        return $this->_lastName;
        echo 'merde';
    }
    public function GetEmail(){
        return $this->_email;
        echo 'merde';
    }
    public function GetPasswordUser(){
        return $this->_passwordUser;
        echo 'merde';
    }

    public function register($dsn, $user, $password) {
        try {
            $dsh = new PDO($dsn);
            echo 'merde';
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
            echo 'merde';
        } 
        $preparation_requete = $dsh->prepare('INSERT INTO user(first_name, last_name, email, password_user)
        VALUES (:first_name, :last_name, :email, :password_user);');
        $preparation_requete->bindParam(':first_name', $this->GetFirstName());
        $preparation_requete->bindParam(':last_name', $this->GetLastName());
        $preparation_requete->bindParam(':email', $this->GetEmail());
        $preparation_requete->bindParam(':password_user', $this->GetPasswordUser());
        $preparation_requete->execute();
        echo 'merde';

        if (isset( $_POST['submit_register'] ) ) { 
            header('Location: /restaurant/restaurant/login.php'); //redirection vers la page de connexion
            exit();
            echo 'oui';
            }
        }

    // public function login($dsh, $user, $password, &UserObject){

    // try {
    //     $dsh = new PDO($dsn, $user, $password);
    //   }
    //   catch (Exception $e) {    //préparation et execution de la requête pour ajouter un resto
    //     die('Erreur : ' . $e->getMessage());
    //   }

    //   $sth = $dsh->prepare("SELECT * FROM user WHERE email = :email AND password = :password")

    //   $sth->bindParam(":mail", $this->GetEmail());
    //   $sth->bindParam(":passwordUser", $this->GetPasswordUser());
    //   $sth->execute();

    //   $sth->setFletchMode(PDO::FLETCH_CLASS, "User");

    //   $result = $sth->fetch();
    //   if(!empty($result)){
    //       header('Lcation: profil.php');
    //       exit();
    //   }
 

}
// $user1 = new User(':first_name', ':last_name', ':email', ':password_user', ':reservation');