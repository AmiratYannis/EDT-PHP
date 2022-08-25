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
		<h1>Specification de contraintes du type d'enseignement</h1><br>	
			<form action="index.php?controle=professeur&action=specifierTypeEns" method="POST" class="form-container">
						<div class="form-group">
						<label> Spécifier les types d'enseignement: </label>
						<select name="type" class="form-control", id="type">
							<option>ATM</option>
							<option>AT</option>
							<option>AM</option> 
							<option>TM</option>
							<option>T</option>
							<option>M</option>
						</select><br>
						<label> Spécifier le type de groupe pour le premier type d'enseignement: </label>
						<select name="typegrpe1" class="form-control" id="typegrpe1" >
							<option>mono</option>
							<option>bi</option>
							<option>promo</option>
						</select><br>
						
						<label> Specifier le type de groupe pour le deuxième du type d'enseignement si il existe: </label>
						<select name="typegrpe2" class="form-control" id="typegrpe2" >
							<option>mono</option>
							<option>bi</option>
							<option></option>
						</select><br>
						
						<label> Specifier le type de groupe pour le troisième type d'enseignement si il existe: </label>
						<select name="typegrpe3" class="form-control" id="typegrpe3">
							<option>mono</option>
							<option>bi</option>
							<option></option>
						</select><br>
						<label> Specifier le nombres d'heures du premier type d'enseignement: </label>
						<input name="nbHeures" class="form-control" id="nbHeures" placeholder="nombres d'heures">
						<label> Specifier le nombres d'heures du deuxième type d'enseignement si il existe</label>
						<input name="nbHeures2" class="form-control" id="nbHeures2" placeholder="nombres d'heures2">
						<label> Specifier le nombres d'heures du troisième type d'enseignement si il existe</label>
						<input name="nbHeures3" class="form-control" id="nbHeures3" placeholder="nombres d'heures3"> 
						<button name="Valider" type="submit" class="btn btn-success btn-block">
							Valider
						</button>
					</div>
			</form>
		</div>
	</body>
</html>
