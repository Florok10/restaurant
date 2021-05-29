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
        <title>Restaurant</title>
    </head>
    <body>
        <?php require 'html_parts/header.php'?>

        <form action="controller.php" method="post" id="form_restaurant" class="d-flex flex-wrap flex-column align-items-center justify-content-center justify-content-md-between py-3 mb-4">
            <h1>Ajoutez votre restaurant</h3>

            <div class="col-auto">
                <div class="form-group">
                    <input type="text" placeholder="Nom" class="col-sm-2 col-form-label col-form-label-lg" name="nameOfRestaurant" for="form_restaurant">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Adresse" class="col-sm-2 col-form-label col-form-label-lg" name="addressOfRestaurant" for="form_restaurant">
                </div>    
                <div class="form-group">
                    <label for="formFile" class="form-label">Sélectionnez une image pour votre restaurant</label>
                    <input  id="formFile" type="file" placeholder="Image" class="col-sm-2 col-form-label col-form-label-lg" name="picture" for="form_restaurant">
                </div>
                <select class="form-select form-select-lg mb-3" name="typeOfRestaurant" id="type">
                    <option selected>Selectionnez le type de restaurant</option>
                    <option value="Italien">Italien</option>
                    <option value="Grec">Grec</option>
                    <option value="FastFood">Fast-Food</option>
                    <option value="Pizzeria">Pizzeria</option>
                    <option value="Asiatique">Asiatique</option>
                </select>
                <div class="form-group">
                    <textarea id="description" placeholder="Description" class="form-control" rows="5" cols="50" name="descriptionOfRestaurant" for="form_restaurant">

                    </textarea>
                </div>
                <div class="form-wrapper">
                    <input type="checkbox" class="form-control" name="cgu" for="form_restaurant">
                </div>
                <button type="submit" for="form_restaurant" class="btn btn-primary" name="submit_restaurant">Envoyer</button>

            </div>
        </form>
        
    </body>
</html>