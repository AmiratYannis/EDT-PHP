
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
	<?php require ("vue/menu.tpl");?>
	<div class="row">
	<div class="col-md-4 col-sm-4 col-xs-12">
	</div>
	<div class="col-md-4 col-sm-4 col-xs-12">
			
		<?php
				if ($Etudiant != false) {
					echo ("<h2 style='color:blue'> Voici vos contacts étudiants :</h2><br>");
					echo ('<table class="table">');
					echo ('<tr><th> NOM </th> <th> PRENOM </th> <th> EMAIL </th> <th>GROUPE</th></tr>'); 	
					foreach ($Etudiant as $e) {
						echo "<tr class='contact'>";
						echo ("<td>" . $e['nom'] . "</td>"); // utf8_encode($c['nom']) si nécessaire
						echo ("<td>" . $e['prenom'] . "</td>"); 
						echo ("<td>" . $e['email'] . "</td>"); 
						echo ("<td>" . $e['num_grpe'] . "</td>");
						echo "</tr>\n";
					}
					echo ('</table>');
				}
				else echo ('pas de contact');
			?>
	</div>
	</div>
</body>
</html>

