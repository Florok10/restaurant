<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require 'dao.php';
require 'restaurant.php';

if (isset( $_POST['submit'] ) ) {
    $nameOfRestaurant = $_POST['nameOfRestaurant'];
    $addressOfRestaurant = $_POST['addressOfRestaurant'];
    $picture = $_POST['picture'];
    $typeOfRestaurant = $_POST['typeOfRestaurant'];
    $descriptionOfRestaurant = $_POST['descriptionOfRestaurant'];
}

try {
    $bdd = new PDO($dsn . $user . $password);
    $preparation_requete = $bdd->prepare('INSERT INTO restaurant_template(nameOfRestaurant, addressOfRestaurant, picture, typeOfRestaurant, descriptionOfRestaurant)
    VALUES (:nom, :addresse, :picture, :typeOfRestaurant, :descriptionOfRestaurant);');
    $preparation_requete->bindParam(':nameOfRestaurant', $nameOfRestaurant);
    $preparation_requete->bindParam(':addressOfRestaurant', $addressOfRestaurant);
    $preparation_requete->bindParam(':picture', $picture);
    $preparation_requete->bindParam(':typeOfRestaurant', $typeOfRestaurant);
    $preparation_requete->bindParam(':descriptionOfRestaurant', $descriptionOfRestaurant);
      
    $preparation_requete->execute();
      }
      catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
      }
?>