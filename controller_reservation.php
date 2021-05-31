<?php 

require 'dao.php';
if (isset( $_POST['submit_reservation'] ) ) {
    if (!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['tel']) && !empty($_POST['date']) && !empty($_POST['nbPersonne'])) {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $cgu = $_POST['nbPersonne'];
}
try {
    $dsh = new PDO($dsn,$user,$password);
      }
      catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
      }
  
      $preparation_requete = $dsh->prepare('INSERT INTO user(first_name, last_name, email, tel, nbPersonne)
      VALUES (:first_name, :last_name, :email, :tel, :nbPersonne);');
      $preparation_requete->bindParam(':first_name', $firstName);
      $preparation_requete->bindParam(':last_name', $lastName);
      $preparation_requete->bindParam(':email', $email);
      $preparation_requete->bindParam(':tel', $tel);
      $preparation_requete->bindParam(':nbPersonne', $nbPersonne); //ici le mdp hashed
        
      $preparation_requete->execute();

    if (isset( $_POST['submit_reservation'] ) ) { 
        header('Location: /restaurant/restaurant/profil.php'); //redirection vers notre profil
        exit();
    }
      ?>