 <?php 
require('MysqliDb.php');
include("process.php");

$msg = "";
if(isset($_GET['id']) && $_GET['id']!= ""){
	

	$data = Array(
		'status'=>'delete'
	);
$db->where ('id', $_GET['id']);
	$data=$db->update ('products',$data);
	// header("Location: vue.php");
    
    $msg="<div class='ajout'><h3>Enregistrement supprimé !</h3></div>";
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Ensembles d'enregistrement</title>
 	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css?v=1.4">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
</head>
 <body>
<div id="vu">
	<div class="container">
		<div class="divlog">
 	<ul class="pagination">
	 <!--  <li><a href="index.php">Accueil</a></li> -->
	  <li><a href="new.php">Nouvel enregistrement</a></li>
	  <li><a href="logout.php">Logout</a></li>
	</ul>
	<h2>Ensembles d'enregistrement</h2>
	<div class="mes">
	  <table id="products_table" class="table">
	  	<?php echo $msg; ?>
	    <thead>
	      <tr>
	        <th class="data">Référence du pack</th>
	        <th class="data">Référence du produit</th>
	        <th class="data">Quantité du produit</th>
	      </tr>
	    </thead>
	    <tbody>
	    	<?php 
	    		
	    		$db->where('status','active');
	    		// $db->where('login', $_POST['log']);
	    		$result = $db->get( 'products' );

				foreach ($result as $row) {

	    	?>
			    	
			    	<tr class="active">
						<td class="data"><?php echo $row["pack_reference"]; ?></td>
						<td class="data"><?php echo $row["product_reference"]; ?></td>
						<td class="data"><?php echo $row["product_quantity"]; ?></td>
						<td >
						<a href="modif.php?id=<?php echo $row["id"]; ?> "class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
						</td>
						<td>
						<a href="vue.php?id=<?php echo $row["id"]; ?>"onclick="return(confirm('Etes-vous sûr de vouloir supprimer ?'));" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
						
						</td>
					</tr>
						
					<?php  }
				    ?>
		</tbody>
		</table>
		</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready( function () {
    		$('#products_table').DataTable();
		} );
	</script>
</div>
 </body>
 </html>
 