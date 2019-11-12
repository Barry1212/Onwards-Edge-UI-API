<?php

class filme {

    function film() {

        try {
            $options = array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            );
            $pdo = new PDO('mysql:host=localhost;dbname=cinema', 'root', '', $options);
        } catch (Exception $exc) {

            die('Erreur : ' . $exc->getMessage());
        }
        $tout = 'select * from films';

        $donner = $pdo->query($tout);
        $reponse = $donner->fetch();

        while ($reponse && $reponse = $donner->fetch()) {

            echo '<div class="col-sm-4"><h2>' . $reponse["titre"] . '</h2>
				<img src="vue/images/film.jpg" class="img-circle" "/></br>
				<p>date de sortie :' . $reponse["date_sortie"] . '</br>
				Réalisateur : ' . $reponse["realisateur"] . '</br>
				Genre : ' . $reponse["genres"] . '</br>
				Description' . $reponse["description"] . '</br>
				Note : ' . $reponse["note_moyenne"] . '</br></p>							 
		</div>';
        }
    }

    function top() {

        try {
            $options = array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            );
            $pdo = new PDO('mysql:host=localhost;dbname=cinema', 'root', '', $options);
        } catch (Exception $exc) {

            die('Erreur : ' . $exc->getMessage());
        }
        $tout = 'select * from films order by note_moyenne desc limit 6';

        $donnee = $pdo->query($tout);
        $reponse = $donnee->fetch();
        $i = 0;
        while ($reponse && $reponse = $donnee->fetch()) {
            echo ' <tr class="success">
       
      <td>' . $reponse["titre"] . '</td>
				
			<td>	Réalisateur : ' . $reponse["realisateur"] . '</br></td>
				
			<td>	Note : ' . $reponse["note_moyenne"] . '</br></p></td>
				
				
			 </tr>
			 ';
        }
    }

    function special($genre) {

        try {
            $options = array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            );
            $pdo = new PDO('mysql:host=localhost;dbname=cinema', 'root', '', $options);
        } catch (Exception $exc) {

            die('Erreur : ' . $exc->getMessage());
        }
        $tout = "select * from films where genres like '%$genre%' ;";



        $donnee = $pdo->query($tout);
        $reponse = $donnee->fetch();

        while ($reponse && $reponse = $donnee->fetch()) {

            echo '<div class="col-sm-4"><h2>' . $reponse["titre"] . '</h2>
				<img src="vue/images/film.jpg" class="img-circle" "/></br>
				<p>date de sortie :' . $reponse["date_sortie"] . '</br>
				Réalisateur : ' . $reponse["realisateur"] . '</br>
				Genre : ' . $reponse["genres"] . '</br>
				Description' . $reponse["description"] . '</br>
				Note : ' . $reponse["note_moyenne"] . '</br></p>
							 
                  </div>';
        }
    }

}

class utilisateur {

    function connection($nom, $passwd) {

        $connection = new PDO("mysql:host=localhost;dbname=cinema", "root", "");
        $tout = "select * from utilisateurs where mail='$nom' and password='$passwd' ";
        $donnee = $connection->query($tout);
        $data = $donnee->fetch();
        $nom = $data['mail'];
        if ($data == true) {

            setcookie('pseudo', "$nom", (time() + 3600));

            header('location: index.php');
            echo "<script>  alert('Connection reussie');  </script>";
        } else {
            echo "<script>  alert('Connection échoué');  </script>";
        }
    }

    function ajout_film($titre, $date_sortie, $realisateur, $acteurs, $genres, $description, $note_moyenne) {

        $deux = new PDO("mysql:host=localhost;dbname=cinema", "root", "");
        $tout = " insert into films (titre,date_sortie,realisateur,acteurs,genres,description,note_moyenne) values ('$titre','$date_sortie','$realisateur','$acteurs','$genres','$description','$note_moyenne') ";
        $enr = $deux->exec($tout);

        if ($enr >= true) {

            echo "<script>  alert('enregistrement reussie');  </script>";
        } else {

            echo " <script> alert('enregistrement echouer'); </script>";
        }
    }

}

?>
