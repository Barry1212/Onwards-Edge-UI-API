<?php

function activeMenu($option) {
    global $choix_page;
    if ($option === $choix_page) {
        echo "active";
    } else {
        echo "";
    }
}
?>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <span class="navbar-brand glyphicon glyphicon-home"></span>
            <a class="navbar-brand" href="?page=accueil">L'hôpital</a>
        </div>

        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class='<?php activeMenu("personnel");?>'><a href="?page=personnel">Tableau du personnel</a></li>
                <li class='<?php activeMenu("rdv");?>'><a href="?page=rdv">Prendre rendez-vous</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>

    </div>
</nav>

