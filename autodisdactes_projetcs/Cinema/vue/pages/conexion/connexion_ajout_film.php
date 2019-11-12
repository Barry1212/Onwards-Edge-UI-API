<nav class="navbar navbar-inverse ">
    <div class="container-fluid ">
        <div class="navbar-header">
            <a class="navbar-brand " href="?page=cinema">Cinema</a>
        </div>
        <ul class="nav navbar-nav">
            <li class=""><a href="?page=films">Film</a></li>
            <li><a href="?page=top_5_films">Top 5 films</a></li>
            <li><a href="?page=ajout_film">Ajouter un film</a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">

            <li><a href="?page=deconnection"><span class="glyphicon glyphicon-log-out active"></span>Déconnection(<?php echo $_COOKIE['pseudo']; ?>)</a></li>
        </ul>
    </div>
</nav>

<form role="form" class="col-sm-5"  action="#" method="post" >
    <div class="form-group ">
        <label for="titre">Titre :</label>
        <input type="text" class="form-control" id="titre" name="titre">
    </div>

    <div class="form-group" >
        <label for="date">Date de sortie :</label>
        <input type="date" class="form-control" id="date" name="date">
    </div> <div class="form-group">
        <label for="realisateur">Réalisateur :</label>
        <input type="text" class="form-control" id="realisateur" name="realisateur">
    </div> <div class="form-group">
        <label for="acteur">Acteurs :</label>
        <input type="text" class="form-control" id="acteur" name="acteur">
    </div> <div class="form-group">
        <label for="genre">Genres :</label>
        <input type="text" class="form-control" id="genre" name="genre">
    </div> <div class="form-group">
        <label for="description">Description :</label>
        <input type="text" class="form-control" id="description" name="description">
    </div> <div class="form-group">
        <label for="note">Note moyenne :</label>
        <input type="number" class="form-control" id="note" name="note">
    </div>


    <button type="submit" class="btn btn-default" name="ajout_film" >Ajouter</button>
</form>