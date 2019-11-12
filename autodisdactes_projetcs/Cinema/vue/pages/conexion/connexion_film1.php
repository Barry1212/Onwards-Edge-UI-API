<nav class="navbar navbar-inverse ">
    <div class="container-fluid ">
        <div class="navbar-header">
            <a class="navbar-brand " href="?page=cinema">Cinéma</a>
        </div>
        <ul class="nav navbar-nav">
            <li class=""><a href="?page=films">Films</a></li>
            <li><a href="?page=top_5_film">Top 5 films</a></li>
            <li><a href="?page=ajout_film">Ajouter un film</a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">

            <li><a href="?page=deconnection"><span class="glyphicon glyphicon-log-out active"></span>Déconnection(<?php echo $_COOKIE['pseudo']; ?>)</a></li>
        </ul>
    </div>
</nav>

<h1> Liste des films </h1>
Filtre par genre : <div class="btn-group">
    <button type="button" class="btn btn-primary" ><a href="?page=film&genre=Tous">Tous</a></button>
    <button type="button" class="btn btn-primary" ><a href="?page=film&genre=Comédie">Comédie</a></button>
    <button type="button" class="btn btn-primary" ><a href="?page=film&genre=Drame">Drame</a></button>
    <button type="button" class="btn btn-primary"> <a href="?page=film&genre=Thriller">Thriller</a></button>
    <button type="button" class="btn btn-primary"> <a href="?page=film&genre=Romance"> Romance</a></button>
    <button type="button" class="btn btn-primary"> <a href="?page=film&genre=Fantastique">Fantastique</a></button>
    <button type="button" class="btn btn-primary"> <a href="?page=film&genre=Policier">Policier</a></button>

</div>
<div class="row">
    <?php
    $genre = @$_GET['genre'];
    $a = new filme;
    if ($genre == 'Tous') {
        $a->film();
    } else {
        $a->special($genre);
    }
    ?>
</div>

