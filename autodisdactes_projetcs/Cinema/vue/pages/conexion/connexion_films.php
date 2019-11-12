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
