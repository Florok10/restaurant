<?php 
session_start();
$_SESSION['role'] = 'admin';?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title>Inscription</title>
    </head>

    <body>

    <?php require 'header.php' ?>

    <h1 class="text-center">S'inscrire</h1>

        <form id="form_register" class="form-signup d-flex flex-wrap flex-column align-items-center justify-content-center justify-content-md-between py-3 mb-4" action="controller.php" method="POST">

            <div class="form-group">
                <label for="first_name_input" class="form-label">Votre prénom</label>
                <input type="text" class="form-control" id="first_name_input" placeholder="Prénom" name="first_name" for="form_register">
            </div>

            <div class="form-group">
                <label for="last_name_input" class="form-label">Votre nom</label>
                <input type="text" class="form-control" placeholder="Nom" id="last_name_input" name="last_name" for="form_register">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Votre Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" for="form_register">
                <small id="emailHelp" class="form-text text-muted">Nous ne partagerons pas votre email à un tiers.</small>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Votre mot de passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe" name="password_user" for="form_register">
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="checkbox_cgu" for="form_register">
                <label class="form-check-label" for="exampleCheck1">Vous confirmez accepter nos <a href="#">conditions générales d'utilisations</a></label>
            </div>

            <button type="submit" class="btn btn-primary" for="form_register">Je m'inscris</button>

        </form>

    </body>
</html>

