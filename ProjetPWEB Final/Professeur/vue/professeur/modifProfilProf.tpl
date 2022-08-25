<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Modif Profil utilisateur</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<!-- <script src="script.js"></script> -->
	</head>
	<body>
			<?php require ("vue/menu.tpl");?>
		<div class="container-fluid Corp">
		<div class="row">
		<div class="col-md-4 col-sm-4 col-xs-12">
				
		</div>
		<div  class="col-md-4 col-sm-4 col-xs-12"> 	
		<h1>Modifier votre profile</h1><br>	
			<form action="index.php?controle=professeur&action=modifProfilProf" method="POST" class="form-container">
						<div class="form-group">
						<label> Modifier votre email: </label>
						<input name="email" class="form-control" id="email" placeholder="Email" size="30"><br>
						<label> Modifier votre Login: </label>
						<input name="login" class="form-control" id="login" placeholder="Login" size="10"><br>
						<label>  Modifier votre Mot de passe: </label>
						<input name="MotDePasse" class="form-control" id="MotDePasse" placeholder="Mot de passe" size="50"><br>
						<label> Confirmer votre Mot de passe </label>
						<input name="CMotDePasse" class="form-control" id="MotDePasse" placeholder="Confirmer votre Mot de passe" size="50"><br>
						<input type="file" name="pictureToUpload" id="pictureToUpload"><br>
						<br><button name="Valider" type="submit" class="btn btn-success btn-block">
							Valider
						</button>
					</div>
					</form>
			<br><br>

		</div>
	</body>
</html>