<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Modif EDT prof</title>
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
  		<a href='index.php?controle=Gerant&action=modifProfiletu' class='btn btn-secondary' type='button'>Paramètres Profils </a>		
		<br><br><h1> Modification d'un emploi du temps d'un prof </h1><br>
		<form action="index.php?controle=Gerant&action=modifEDTprof" method="POST" class="form-container">
       <input type="datetime-local" name="favcolor" value="#<?php echo $tDeb ?>"><br><br>
       <input class="form-control" name="nom" placeholder="Nom" class="nom" value="<?php echo $nom ?>"><br>
       <button name="Valider" type="submit" class="btn btn-success btn-block">
              Valider
        </button>       
      </form>
			<br><br>

		</div>
	</body>
</html>