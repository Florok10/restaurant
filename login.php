
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title>Connexion</title>
    </head>
    <body class="text-center">
        <?php require 'header.php'?>

        <h1 class="text-center h3 mb-3 font-weight-normal">Se connecter</h1>

        <form id="form_signin" class="form-signin d-flex flex-wrap flex-column align-items-center justify-content-center justify-content-md-between py-3 mb-4">

            <div>
                <label for="inputEmail" class="sr-only">Adresse email</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Address mail" name="email" for="form_signin">
            </div>

            <div class="form-group">
                <label for="inputPassword" class="sr-only">Mot de passe</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" name="password_user" for="form_signin">
            </div>
                
            <div class="form-group">
                <button class="btn btn-lg btn-primary btn-block" type="submit" for="form_signin">Sign in</button>
            </div>

        </form>
  

    </body>