<?php 
require('MysqliDb.php');
include("process.php");

$id ="";
if(isset($_POST['new']) && $_POST['new']==1){

$data = Array (
	'pack_reference'=> $_POST['pack'],
	'product_reference'=>$_POST['prodR'],
	'product_quantity'=> (int) $_POST['prodQ'],
);
$id = $db->insert ('products', $data);
if($id)
	{
    $id= "<div class='ajout'><h3>Nouvel enregistrement ajouté !</h3></div>";}
    // header("Location: new.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Insertion</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css?v=1.5">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.9.0/validator.min.js"></script>
</head>
<body>
<div class="divVue">
	
	<div class="container">
		<div class="divnew">
		  <ul class="pagination">
		    <li><a href="vue.php">Retour listing</a></li>
		    <li><a href="logout.php">Logout</a></li>
		  </ul>
		 <div class="mes">
		<h2>Nouvel enregistrement</h2>
		
		<?php echo $id; ?><br>
		<form data-toggle="validator" action="new.php" method="post" >
		<input type="hidden" name="new" value="1" />
	    <div class="form-group" class="help-block with-errors">
	      <input type="text" class="form-control" name="pack" id="pack" placeholder="Référence du pack" required>
	    </div>
	    <div class="form-group" class="help-block with-errors">
	      <input type="text" class="form-control" name="prodR" id="prodR" placeholder="Référence du Produit" required>
	    </div>
	    <div class="form-group" class="help-block with-errors">
	      <input type="number" class="form-control" onkeypress="isInputNumber(event)" pattern="[0-9]" name="prodQ" id="prodQ" placeholder="Quantité du Produit" required>
	      <script>
            
            function isInputNumber(evt){
                
                var donnee = String.fromCharCode(evt.which);
                
                if(!(/[0-9]/.test(donnee))){
                    evt.preventDefault();
                    alert("Vous devez entrer que des chiffres");
                }
                
            }
            </script>

	    </div>
	     <div class="help-block">Veuillez encoder que des chiffres</div>
	    <div>
	    <button type="submit" class="btn btn-default">Ajouter</button>
	    </div>
	  </form><br>
	  </div>
	</div>
	</div>
	
	
</div>
</body>
</html>
