<!DOCTYPE html>

<?php error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Restaurant</title>
</head>
<body>

    <form action="controller.php" method="post" id="form">
        <h3>S'inscrire</h3>

		<div class="col-auto">
			<input type="text" placeholder="Nom" class="col-sm-2 col-form-label col-form-label-lg" name="nameOfRestaurant">
			<input type="text" placeholder="Adresse" class="col-sm-2 col-form-label col-form-label-lg" name="addressOfRestaurant">
            <input type="file" placeholder="Image" class="col-sm-2 col-form-label col-form-label-lg" name="picture">
            <select class="form-select" name="typeOfRestaurant" id="type">
                <option selected>Selectionnez le type de restaurant</option>
                <option value="Italien"></option>
                <option value="Grec"></option>
                <option value="FastFood"></option>
                <option value="Pizzeria"></option>
                <option value="Asiatique"></option>
            </select>
            <input type="text" placeholder="Description" class="col-lg-2 col-form-label col-form-label-lg" name="descriptionOfRestaurant">
            <div class="form-wrapper">
				<input type="checkbox" class="form-control" name="cgu" required>
			</div>
            <button type="submit" for="form" class="btn btn-primary">Envoyer</button>

		</div>
    </form>
    
</body>
</html>