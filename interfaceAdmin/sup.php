<?php
require('MysqliDb.php');

if(isset($_GET['id']) && $_GET['id']!= ""){
	

	$data = Array(
		'status'=>'delete'
	);
$db->where ('id', $_GET['id']);
	$id=$db->update ('products',$data);
    
    $id= "<div class='ajout'><h3>Enregistrement modifié !</h3></div>";
    header("Location: vue.php");
}
// print_r ($db->trace);
?>