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
			<?php require ("vue/menu2.tpl");?>
		<div class="container-fluid Corp">
		<div class="row">
		<div class="col-md-4 col-sm-4 col-xs-12">
				
		</div>
		<div  class="col-md-4 col-sm-4 col-xs-12"> 	
		<br><br>
  		<a href='index.php?controle=Gerant&action=modifProfiletu' class='btn btn-secondary' type='button'>Paramètre profils </a>
  		<a href='index.php?controle=Gerant&action=modifCouleur' class='btn btn-secondary' type='button'>Paramètre couleur</a>
  		<a href='index.php?controle=Gerant&action=modifProfilprof' class='btn btn-secondary' type='button'>Paramètre profils professeurs</a>
  		<a href='index.php?controle=Gerant&action=modifProfiletudiant' class='btn btn-secondary' type='button'>Paramètre profils etudiant</a>
		<br><br><h1>Modifier votre profile</h1>	
			<form action="index.php?controle=Gerant&action=modifProfiletu " method="post">
				<br>
    			<!--<input type="file" name="fileToUpload" id="fileToUpload"><br>-->
 				<br> Nom:<br>
  				<input name="nom" id="nom" class="form-control" value="<?php echo $_SESSION['profil']['nom']; ?>">
  				<br> Prenom:<br>
  				<input name="prenom" id="prenom" class="form-control" value="<?php echo $_SESSION['profil']['prenom']; ?>">
  				<br> Email:<br>
  				<input name="email" id="email" class="form-control" value="<?php echo $_SESSION['profil']['email']; ?>">
  				<br> Login:<br>
  				<input name="login_prof" id="login_prof" class="form-control" value="<?php echo $_SESSION['profil']['login_prof']; ?>">
  				<br> Mot de passe:<br>
  				<input name="pass_prof" id="pass_prof" class="form-control" value="<?php echo $_SESSION['profil']['pass_prof']; ?>">
  				<br><br>
  				<input type="HIDDEN" name="id_prof" id="form-control"  class="id_prof" value="<?php echo $_SESSION['profil']['id_prof']; ?>">
  				<br><br>
  				<!--<input type="submit" value="Valider">-->
  				<button type="submit" class="btn btn-success btn-block">
					Valider
				</button>
			</form> 
			<br><br>
  				<input type="file" name="fileToUpload" id="fileToUpload">

		</div>
	</body>
</html>
