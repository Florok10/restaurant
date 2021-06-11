<?php 
// error_reporting(E_ALL);
// ini_set('display_errors', TRUE);
// ini_set('display_startup_errors', TRUE);

require_once 'dao.php';
require_once 'user.php';
if (isset( $_POST['submit_register'] ) ) {
    if (!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['password_user']) && !empty($_POST['checkbox_cgu'])) {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $passwordUser = $_POST['password_user'];
    $cgu = $_POST['checkbox_cgu'];
        //fonction pour hasher le mdp
    $hashedPassword = password_hash($passwordUser, PASSWORD_DEFAULT);
    $newUser = new User($firstName, $lastName, $email, $passwordUser);
    $newUser->register();



    }
}
      ?>

  