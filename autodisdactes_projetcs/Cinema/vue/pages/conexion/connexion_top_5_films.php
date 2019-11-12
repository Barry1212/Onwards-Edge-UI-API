
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
<div class="container">
    <h1>Top 5 Films</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Realisateur</th>
                <th>Note</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $b = new filme;
            $b->top();
            ?>

        </tbody>
    </table>
</div>
