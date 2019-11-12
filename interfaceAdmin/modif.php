<?php 
require('MysqliDb.php');
include("process.php");

$mes="";
if(isset($_POST['new']) && $_POST['new']==1){
	
	$data = Array(
		'pack_reference'=>$_POST['pack'],
		'product_reference'=>$_POST['prodR'],
		'product_quantity'=>$_POST['prodQ']
	);

	$db->where ('id', $_POST['id']);
	$db->update ('products',$data);
    $mes= "<div class='ajout'><h3>Enregistrement modifié !</h3></div>";
	// header("Location: vue.php");
}

$db->where('id',$_GET['id']);
$product = $db->getOne("products");
$coco=$product['id'];
 ?>


  <!DOCTYPE html>
 <html>
 <head>
 	<title>Modification</title>
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" type="text/css" href="style.css?v=1.1">
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
	    <li><a href="new.php">Nouveau</a></li>
	    <li><a href="logout.php">Logout</a></li>
	</ul>
	<div class="mes">
		<h2>Modifier enregistrement</h2>
		
		<?php echo $mes; ?><br>
		 <form action="modif.php?id=" method="post" id="formModif" data-toggle="validator">
		 	<input type="hidden" name="new" value="1" />
		 	<input type="hidden" name="id" value="<?php echo $coco?>" />
	    <div class="form-group" class="help-block with-errors">
	      <input type="text" class="form-control" name="pack" placeholder="Référence du pack" id="pack" value="<?php echo $product['pack_reference'];?>" required>
	    </div>
	    <div class="form-group" class="help-block with-errors">
	      <input type="text" class="form-control" name="prodR" placeholder="Référence du Produit" id="prodR" value="<?php echo $product['product_reference'];?>" required>
	    </div>
	    <div class="form-group" class="help-block with-errors">
	      <input type="number" class="form-control" name="prodQ" onkeypress="isInputNumber(event)" pattern="[0-9]" placeholder="Quantité du Produit" id="prodQ" value="<?php echo $product['product_quantity'];?>" required>
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

	    <button type="submit" id="valider" class="btn btn-default">Modifier</button><br>
	    <br>
	  </form>
	  </div>
	  </div>
	</div>
</div>
</body>
</html>
