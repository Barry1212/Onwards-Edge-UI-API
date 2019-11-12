<?php

include("process.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bienvenue</title>
</head>
<body>
	<div>
		<p>Bienvenue <?php echo $_SESSION['login']; ?>!</p>
		<p><a href="donnee.php">Données</a></p>
		<a href="logout.php">Se déconnecter</a>
	</div>
</body>
</html>