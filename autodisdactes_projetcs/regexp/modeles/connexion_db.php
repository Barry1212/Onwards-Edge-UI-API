<?php

define('USER', 'ipdw');
define('PASSWORD', 'ISFCE2016');
define('DSN', 'mysql:host=localhost;dbname=automobile;charset=UTF8');

try {
    $dbh = new PDO(DSN, USER, PASSWORD);
} catch (PDOException $exception) {
    echo "Erreur ! : " . $exception->getMessage() . "<br/>";
    die();
}
?>