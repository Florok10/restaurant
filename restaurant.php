<?php

require_once 'dao.php';

class Restaurant {
    private $_nameOfRestaurant;
    private $_addressOfRestaurant;
    private $_picture;
    private $_typeOfRestaurant;
    private $_descriptionOfRestaurant;

    public function __construct($nameOfRestaurant, $addressOfRestaurant, $picture, $typeOfRestaurant, $descriptionOfRestaurant) {
        SetName($nameOfRestaurant);
    }
    public function SetName($nameOfRestaurant) {
        $this->_nameOfRestaurant = $nameOfRestaurant;
    }
    public function SetAddress($addressOfRestaurant) {
        $this->_addressOfRestaurant = $addressOfRestaurant;
    }
    public function SetPicture($picture) {
        $this->_picture = $picture;
    }
    public function SetType($typeOfRestaurant) {
        $this->_typeOfRestaurant = $typeOfRestaurant;
    }
    public function SetDescription($description) {
        $this->_description = $description;
    }

    public function GetName(){
        return $this->_nameOfRestaurant;
    }
    public function GetAddress(){
        return $this->_addressOfRestaurant;
    }
    public function GetPicture(){
        return $this->_picture;
    }
    public function GetType(){
        return $this->_typeOfRestaurant;
    }
    public function GetDescription(){
        return $this->_descriptionOfRestaurant;
    }

    public static function envoiDonnees(){
    try {
        $dbh = new PDO($dsn, $user, $password);

    } catch(PDOException $e) {
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
}

