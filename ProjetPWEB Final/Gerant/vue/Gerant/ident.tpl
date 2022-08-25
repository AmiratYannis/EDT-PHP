<!DOCTYPE html>
<html>
<head>
<title>Page de connexion</title>
<link rel="stylesheet" type="text/css" href="vue/styleCSS/FormCo.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container-fluid Corp">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12">
				
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<form action="index.php?controle=Gerant&action=ident" method="post" class="form-container" >

					<div class="Menu">
					<a href="#" id="LCI">Inscrivez-vous</a>
					<a href="#" id="LC">Connexion</a>
					</div>



					<div class="form-group">
					<br><input class="form-control" name="nom" placeholder="Login" class="nom" value="<?php echo $nom ?>">
					</div>
					<div class="form-group">						
						<input class="form-control" name="login_prof" placeholder="Mot de passe" class="login_prof" value="<?php echo $login_prof ?>" >
					</div>
					<div class="form-group">						
						<input class="form-control" name="label" placeholder="label" type="hidden" class="label" value="<?php echo 'Responsable EDT - DUT 1 DUT 2' ?>" >
					</div>

					<div id ="m" style="color:red"> <?php echo $msg; ?> </div><br>
					<button type="submit" class="btn btn-success btn-block">
						Connexion
					</button>
				</form>
			</div>
			
		</div>
	</div>
</body>
</html>

