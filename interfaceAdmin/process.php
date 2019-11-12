<?php 
session_start ();

if(!isset($_SESSION["login"])){
header("Location: login.php");
exit(); }

 ?>
<!-- //récupérer les données du formulaire

$login = $_POST['log'];
$password = $_POST['pwd'];

$login = stripcslashes($login);
$password = stripcslashes($password);
$login = mysql_real_escape_string($login);
$password = mysql_real_escape_string($password);

//se connecter au server et selectionner la database
mysql_connect("localhost", "root", "");
mysql_select_db("admin");

//requete pour le user
$resultat=mysql_query("select * from users where login = '$login' and password='$password'")
			or die("erreur".mysql_error());
$donnee = mysql_fetch_array($resultat);

if ($donnee['login'] == $login && $donnee['password'] == $password){
	echo "Vous êtes connecté".$donnee['login'];
}
else{
	echo "login ou password incorrect";
}

 ?> -->
