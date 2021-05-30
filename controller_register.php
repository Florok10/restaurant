<?php 
// error_reporting(E_ALL);
// ini_set('display_errors', TRUE);
// ini_set('display_startup_errors', TRUE);

require 'dao.php';
require 'user.php';
//j'ai une erreur 500 je trouve pas d'où ça vient si c'est une parenthèse ou un ; je saute par ma fenêtre
if (isset( $_POST['submit_register'] ) ) {
    if (!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['password_user']) && !empty($_POST['checkbox_cgu'])) {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $passwordUser = $_POST['password_user'];
    $cgu = $_POST['checkbox_cgu'];


//J'essaye de hasher le mdp
    $hashed_password = password_hash($passwordUser, PASSWORD_DEFAULT);
}

try {
    $dsh = new PDO($dsn,$user,$password);
      }
      catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
      }
  
      $preparation_requete = $dsh->prepare('INSERT INTO user(first_name, last_name, email, password_user)
      VALUES (:first_name, :last_name, :email, :password_user);');
      $preparation_requete->bindParam(':first_name', $firstName);
      $preparation_requete->bindParam(':last_name', $lastName);
      $preparation_requete->bindParam(':email', $email);
      $preparation_requete->bindParam(':password_user', $passwordUser);
        
      $preparation_requete->execute();

    if (isset( $_POST['submit_register'] ) ) { 
        header('Location: /restaurant/restaurant/login.php');
        exit();
    }
      ?>