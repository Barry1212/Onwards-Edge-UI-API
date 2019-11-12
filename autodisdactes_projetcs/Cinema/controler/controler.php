
<?php

if (isset($_POST['ajout_film'])) {

    $connectionn = new utilisateur;
    $ti = $_POST['titre'];
    $da = $_POST['date'];
    $re = $_POST['realisateur'];
    $ac = $_POST['acteur'];
    $ge = $_POST['genre'];
    $de = $_POST['description'];
    $no = $_POST['note'];
    $connectionn->ajout_film($ti, $da, $re, $ac, $ge, $de, $no);
}


if (isset($_POST['authentif'])) {

    $connection = new utilisateur;
    $x = $_POST['email'];
    $y = $_POST['password'];
    $z = $connection->connection($x, $y);
    header('location : index.php');
}



if (@$_COOKIE['pseudo']) {


    $choix_page = isset($_GET['page']) ? $_GET['page'] : 'cinema';

    switch ($choix_page) {
        case 'cinema' : include('vue/pages/conexion/connexion_films.php');
            break;
        case 'films' : include('vue/pages/conexion/connexion_films1.php');
            break;
        case 'films' :
            include('vue/pages/films.php');
            break;
        case 'top_5_films' : include('vue/pages/conexion/connexion_top_5_films.php');
            break;
        case 'connection' : include ("vue/page/conexion/authentification.php");
            break;
        case 'deconnection' : setcookie('pseudo');
            unset($_COOKIE['pseudo']);
            include ("vue/pages/cinema.php");
            echo "<script>  alert('Vous êtes maintenant déconnecté');  </script>";
            break;
    }
} else {

    $choix_page = isset($_GET['page']) ? $_GET['page'] : 'cinema';

    switch ($choix_page) {
        case 'cinema' :
            include('vue/pages/cinema.php');
            break;
        case 'films' :
            include('vue/pages/films.php');
            break;
        case 'top_5_films' :
            include('vue/pages/top_5_films.php');
        case 'authentifier' :
            include('vue/pages/authentifier.php');
            break;
    }
}
?>

