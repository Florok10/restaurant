<?php

require_once 'dao.php';
require_once 'controller.php';

class Restaurant {
    private $_nameOfRestaurant;
    private $_addressOfRestaurant;
    private $_picture;
    private $_typeOfRestaurant;
    private $_descriptionOfRestaurant;

    public function __construct($nameOfRestaurant, $addressOfRestaurant, $picture, $typeOfRestaurant, $descriptionOfRestaurant) {
        SetName($nameOfRestaurant);
        SetAddress($addressOfRestaurant);
        SetPicture($picture);
        SetType($typeOfRestaurant);
        SetDescription($descriptionOfRestaurant);
    }
    
        function SetName($nameOfRestaurant) {
            $this->_nameOfRestaurant = $nameOfRestaurant;
        }
        function SetAddress($addressOfRestaurant) {
            $this->_addressOfRestaurant = $addressOfRestaurant;
        }
        function SetPicture($picture) {
            $this->_picture = $picture;
        }
        function SetType($typeOfRestaurant) {
            $this->_typeOfRestaurant = $typeOfRestaurant;
        }
        function SetDescription($description) {
            $this->_description = $descriptionOfRestaurant;
        }

        function GetName(){
            return $this->_nameOfRestaurant;
        }
        function GetAddress(){
            return $this->_addressOfRestaurant;
        }
        function GetPicture(){
            return $this->_picture;
        }
        function GetType(){
            return $this->_typeOfRestaurant;
        }
        function GetDescription(){
            return $this->_descriptionOfRestaurant;
        }
    }
//fonction qui devait être appelé pour créer un restaurant avec un 
    static public function envoiDonneesRestaurant($dsn, $user, $password){
    try {
        $dbh = new PDO($dsn, $user, $password);

    } catch(PDOException $e) {
        $e->getMessage();
        echo 'Une erreur est survenue';
    }

    $sth = $dbh->prepare('INSERT INTO restaurant_template(nameOfRestaurant, addressOfRestaurant, picture, typeOfRestaurant, descriptionOfRestaurant)
    VALUES(:nameOfRestaurant, :addressOfRestaurant, :picture, :typeOfRestaurant, :descriptionOfRestaurant);');

    $sth->bindParam(":nameOfRestaurant", $this->getName());
    $sth->bindParam(":addressOfRestaurant", $this->getAddress());
    $sth->bindParam(":picture", $this->getPicture());
    $sth->bindParam(":typeOfRestaurant", $this->getType());
    $sth->bindParam(":descriptionOfRestaurant", $this->getDescription());

    $sth->execute();
}

