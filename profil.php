<?php 
session_start();
$_SESSION['role'] = 'admin';
$_SESSION['role'] = 'user';
require_once 'dao.php';
?><!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mon profil</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <body>
        <?php require 'html_parts/header.php'?>
        <div class="d-flex flex-wrap flex-column align-items-center justify-content-center justify-content-md-between py-3 mb-4">
            <div class="text-center container"><p><?php $firstName ?></p></div>
            <div class="text-center container"><p><?php $lastName ?></p></div>
            <div class="text-center container"><p><?php $email ?></p></div>
            <div class="text-center container"><p><?php $passwordUser ?></p></div>
            <div class="text-center container"><p>Mes réservations <?php $reservation //variable qui contient le nombre de réservation lié à l'utilisateur ?></p></div>
        </div>

        <?php //création de la variable qui récupère dans la bdd la réservation de l'user
        $reservation = $dsn->prepare('SELECT id FROM user WHERE reservation');
        $req->execute([$_POST['reservation']]);
        $users = $req->fetch();
        die();
        ?>
    </body>
</html>