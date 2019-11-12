<nav class="navbar navbar-inverse ">
    <div class="container-fluid ">
        <div class="navbar-header">
            <a class="navbar-brand " href="?page=acceuil">Cinema</a>
        </div>
        <ul class="nav navbar-nav">
            <li class=""><a href="?page=film">Film</a></li>
            <li><a href="?page=top">Top 5 films</a></li>
            <li><a href="?page=ajout">Ajouter un film</a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">

            <li><a href="?page=deconnection"><span class="glyphicon glyphicon-log-out active"></span>Déconnection(<?php echo $_COOKIE['pseudo']; ?>)</a></li>
        </ul>
    </div>
</nav>

<h1> S'authentifier </h1>
<form role="form" class="col-sm-7">
    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control " id="email" >
        </br>
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control " id="pwd">
    </div>

    <button type="submit" class="btn btn-default">S'authentifier</button></br>
</form>

