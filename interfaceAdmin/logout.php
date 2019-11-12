<?php
session_start();

if(session_destroy())
{
// redirection vers la page login
header("Location: login.php");
}
?>