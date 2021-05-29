<?php

require 'dao.php';
require 'restaurant.php';

if (isset( $_POST['submit_restaurant'] ) ) {
    $nameOfRestaurant = $_POST['nameOfRestaurant'];
    $addressOfRestaurant = $_POST['addressOfRestaurant'];
    $picture = $_POST['picture'];
    $typeOfRestaurant = $_POST['typeOfRestaurant'];
    $descriptionOfRestaurant = $_POST['descriptionOfRestaurant'];


}

if (isset( $_POST['submit_register'] ) ) {
  $firstName = $_POST['first_name'];
  $lastName = $_POST['last_name'];
  $email = $_POST['email'];
  $passwordUser = $_POST['password_user'];
  $cgu = $_POST['checkbox_cgu'];
  
}

// try {
//   $dsh = new PDO($dsn,$user,$password);
//     }
//     catch (Exception $e) {
//       die('Erreur : ' . $e->getMessage());
//     }

//     $preparation_requete = $dsh->prepare('INSERT INTO (first_name, last_name, email, password_user)
//     VALUES (:first_name, :last_name, :email, :password_user);');
//     $preparation_requete->bindParam(':first_name', $firstName);
//     $preparation_requete->bindParam(':last_name', $lastName);
//     $preparation_requete->bindParam(':email', $email);
//     $preparation_requete->bindParam(':password_user', $passwordUser;
      
//     $preparation_requete->execute();
  
try {
    $dsh = new PDO($dsn,$user,$password);
      }
      catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
      }

      $preparation_requete = $dsh->prepare('INSERT INTO restaurant_template(nameOfRestaurant, addressOfRestaurant, picture, typeOfRestaurant, descriptionOfRestaurant)
      VALUES (:nameOfRestaurant, :addressOfRestaurant, :picture, :typeOfRestaurant, :descriptionOfRestaurant);');
      $preparation_requete->bindParam(':nameOfRestaurant', $nameOfRestaurant);
      $preparation_requete->bindParam(':addressOfRestaurant', $addressOfRestaurant);
      $preparation_requete->bindParam(':picture', $picture);
      $preparation_requete->bindParam(':typeOfRestaurant', $typeOfRestaurant);
      $preparation_requete->bindParam(':descriptionOfRestaurant', $descriptionOfRestaurant);
        
      $preparation_requete->execute();

?>