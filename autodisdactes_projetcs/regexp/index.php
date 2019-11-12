

<!DOCTYPE html>

<html lang="fr">
    <head>
        <title>Automobile</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body class="container">


        <?php
        include('vues/menu.php');
        ?>

        <div class="jumbotron"> <h1> Site web automobile </h1> </div>

        <?php
        include('controleurs/controleur.php');
        ?>

    </body>
</html>