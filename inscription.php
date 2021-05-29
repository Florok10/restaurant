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
    <?php require 'html_parts/header.php' ?>
    <form class="d-flex flex-wrap flex-column align-items-center justify-content-center justify-content-md-between py-3 mb-4">
    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Entrez votre Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">Nous ne partagerons pas votre email à un tiers.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Mot de passe</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Vous confirmez accepter nos <a href="#">conditions générales d'utilisations</a></label>
    </div>
    <button type="submit" class="btn btn-primary">Je m'inscris</button>
    </form>
</body>
</html>

