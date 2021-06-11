<?php 
session_start();

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
        <label for="date">Date</label>
        <input type="date" class="form-control" id="date" name="daname">
    </div>
    <div class="form-group">
        <label for="tel">Téléphone</label>
        <input type="tel" class="form-control" id="tel" name="tname">
    </div>
    <div class="form-group">
        <label for="personnes">Nombre de personne</label>
        <input type="number" class=form-control id="nbPersonne" name="nbPersonname">
    </div>

    <button type="submit" class="btn btn-primary" name="submit_reservation" for="form_reservation">Je réserve</button>

    </form>
    
</body>
</html>