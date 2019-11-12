<?php
$choix_page = isset($_GET['page']) ? $_GET['page'] : 'accueil';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Hopital</title>
        <link rel='stylesheet' type='text/css' href="bootstrap/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    </head>
    <body>
        <div class="container">

            <?php
            include('includes/menu.inc.php');

            switch ($choix_page) {
                case 'accueil' :
                    include('pages/accueil.inc.php');
                    break;
                case 'personnel' :
                    include('pages/personnel.inc.php');
                    break;
                case 'rdv' :
                    include('pages/rdv_form.inc.php');
                    break;
            }          
            ?>


        </div>
    </body>
</html>
