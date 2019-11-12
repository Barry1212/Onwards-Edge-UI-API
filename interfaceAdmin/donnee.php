<?php 
require('MysqliDb.php');
include("process.php");
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Données</title>
	<meta charset="utf-8">
  	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <ul class="nav navbar-nav">
	      <li class="active"><a href="index.php">Accueil</a></li>
	      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="new.php">Nouveau Enregistrement <span class="caret"></span></a>
	        <ul class="dropdown-menu">
	          <li><a href="vue.php">Enregistrements</a></li>
	        </ul>
	      </li>
	    </ul>
	    <ul class="nav navbar-nav navbar-right">
	      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
	    </ul>
	  </div>
</nav>

</body>
</html>