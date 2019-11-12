
<p><font color="blue"><h3>Filtre par genre :</h3></font></p> <div class="btn-group">
    <button type="button" class="btn btn-primary" ><a href="?page=film&genre=Tous">Tous</a></button>
    <button type="button" class="btn btn-primary" ><a href="?page=film&genre=Comédie">Comédie</a></button>
    <button type="button" class="btn btn-primary" ><a href="?page=film&genre=Drame">Drame</a></button>
    <button type="button" class="btn btn-primary"> <a href="?page=film&genre=Thriller">Thriller</a></button>
    <button type="button" class="btn btn-primary"> <a href="?page=film&genre=Romance">Romance</a></button>
    <button type="button" class="btn btn-primary"> <a href="?page=film&genre=Fantastique">Fantastique</a></button>
    <button type="button" class="btn btn-primary"> <a href="?page=film&genre=Policier">Policier</a></button>

</div>

<div class="row">
    <?php
    $genre = @$_GET['genre'];
    $x = new filme;
    if ($genre == 'Tous') {

        $x->film();
    } else {
        $x->special($genre);
    }
    var_dump($genre);
    ?>
</div>