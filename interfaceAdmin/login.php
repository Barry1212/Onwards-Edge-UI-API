
<?php
require('MysqliDb.php');

session_start(); 

$error = "";
		
if (isset($_POST['log']))
{
	 $db->where('login', $_POST['log']);
	 $db->where('password', $_POST['pwd']);
	 $user = $db->getOne( 'users' );
	 if( $user )
	{
	 	$_SESSION['login'] = $user['login'];
	 		 header("Location: vue.php");
	}
   
	else
	{
		 $error = "<div id='mes'><h3>login/password incorrect !</h3></div>";
	}


?>
<?php
if(!empty($_POST["remember"])) {
	setcookie ("log",$_POST["log"],time()+ 36000);
	setcookie ("pwd",$_POST["pwd"],time()+ 36000);
	echo "Cookies réussis !";

} 
else 
{
	setcookie("log","");
	setcookie("pwd","");
	echo "Echec Cookies";
}
 
}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Page interface utilisateur</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css?v=1.2">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.9.0/validator.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
	<div class="modal-dialog text-center">
		<div class="col-sm-8 col-sm-offset-2 main-section">
			<div class="modal-content">
				<div class="col-12 user-img">
					<img src="face2.jpg">
				</div>
				<?php echo $error; ?><br>
				<form data-toggle="validator" class="col-12" method="post" action="login.php">
					<div class="input-group" class="help-block with-errors">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input type="text" class="form-control" name="log" value="<?php if(isset($_COOKIE["log"])) { echo $_COOKIE["log"]; } ?>" placeholder="login" required>
					</div><br>
					<div class="input-group" class="help-block with-errors">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input type="password" class="form-control"  name="pwd" value="<?php if(isset($_COOKIE["pwd"])) { echo $_COOKIE["pwd"]; } ?>"  placeholder="Password" required>
					</div><br>
					<div class="checkbox">
		      			<label><input type="checkbox" name="remember">Se souvenir de moi</label>
		    		</div><br><br><br>
		    		<div class="input-group">
		      			<button type="submit" class="btn" class="fas fa-sign-in-alt">Se connecter</button><br><br><br>
				</form>
			</div> <!-- fin modal content -->
			
		</div>

	</div>

</body>
</html>