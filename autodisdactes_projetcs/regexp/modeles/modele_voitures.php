<?php

include_once('modeles/connexion_db.php');

function les_voitures() {
    global $dbh;
    $sql = "SELECT * FROM voitures ";
    $sth = $dbh->query($sql);
    $les_albums = $sth->fetchAll(PDO::FETCH_ASSOC);
    return $les_voitures;
}




