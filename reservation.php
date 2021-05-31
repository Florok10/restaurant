<?php 
session_start();
$_SESSION['role'] = 'admin';
$_SESSION['role'] = 'user';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Réservation</title>
</head>

<body>
    <?php require_once 'html_parts/header.php'?>

    <form action="controller_reservation.php" class="form-signup d-flex flex-wrap flex-column align-items-center justify-content-center justify-content-md-between py-3 mb-4" id="form_reservation">
    <form id="form_" class="form-signup d-flex flex-wrap flex-column align-items-center justify-content-center justify-content-md-between py-3 mb-4" action="controller_register.php" method="post">

    <div class="form-group">
        <label for="first_name_input" class="form-label">Votre prénom</label>
        <input type="text" class="form-control" id="first_name_input" placeholder="Prénom" name="first_name" for="form_register">
    </div>

    <div class="form-group">
        <label for="last_name_input" class="form-label">Votre nom</label>
        <input type="text" class="form-control" placeholder="Nom" id="last_name_input" name="last_name" for="form_reservation">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Votre Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez email" name="email" for="form_reservation">
    </div>

    <div class="form-group">
        <label for="date">Date</label>
        <input type="date" class="form-control" id="date" name="date" for="form_reservation">
    </div>
    <div class="form-group">
        <label for="tel">Téléphone</label>
        <input type="tel" class="form-control" id="tel" name="tel" for="form_reservation">
    </div>
    <div class="form-group">
        <label for="personnes">Nombre de personne</label>
        <input type="number" class=form-control id="nbPersonne" name="nbPersonne" for="form_reservation">
    </div>

    <button type="submit" class="btn btn-primary" name="submit_reservation" for="form_reservation">Je réserve</button>

    </form>
    
</body>
</html>