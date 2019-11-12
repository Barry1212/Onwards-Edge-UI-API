<?php
$choix_page = isset($_GET['page']) ? $_GET['page'] : 'cinema';
?>


<!DOCTYPE html>
<html> 
    <head> 
        <title>Cinéma</title> 
        <meta charset="utf-8>">

        <link rel='stylesheet' type='text/css' href="vue/bootstrap/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href="vue/css/style.css" rel="stylesheet" type="text/css" />

        <?php include("modele/scripts.php"); ?>
        <?php include ("vue/includes/menu.inc.php"); ?>

    </head>


    <body style='background-image:url("vue/images/movie-projector.jpg")'>

        <?php include ("controler/controler.php"); ?>



    </body>
</html>
