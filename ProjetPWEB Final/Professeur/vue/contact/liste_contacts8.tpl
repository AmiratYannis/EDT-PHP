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
		<br><br>
		<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
        <div class="btn-group" role="group">
        <button id="btnGroupDrop1" type="button" class="btn btn-secondary btn-lg btn-block dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Groupe
        </button>
      <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
         <a href='index.php?controle=contact&action=liste_Etu1' class="dropdown-item">201</a>
		<a href='index.php?controle=contact&action=liste_Etu2' class="dropdown-item">202</a>
		<a href='index.php?controle=contact&action=liste_Etu3' class="dropdown-item">203</a>
		<a href='index.php?controle=contact&action=liste_Etu4' class="dropdown-item">204</a>
		<a href='index.php?controle=contact&action=liste_Etu5' class="dropdown-item">205</a>
		<a href='index.php?controle=contact&action=liste_Etu6' class="dropdown-item">206</a>
		<a href='index.php?controle=contact&action=liste_Etu7' class="dropdown-item">207</a>
		<a href='index.php?controle=contact&action=liste_Etu8' class="dropdown-item">208</a>
		<a href='index.php?controle=contact&action=liste_Etu9' class="dropdown-item">201-202</a>
		<a href='index.php?controle=contact&action=liste_Etu10' class="dropdown-item">203-204</a>
		<a href='index.php?controle=contact&action=liste_Etu11' class="dropdown-item">205-206</a>
		<a href='index.php?controle=contact&action=liste_Etu12' class="dropdown-item">207-208</a>
		<a href='index.php?controle=contact&action=liste_Etu13' class="dropdown-item">promo</a>
				<a href='index.php?controle=contact&action=liste_Etu14' class="dropdown-item">1/2 promo</a>
		<a href='index.php?controle=contact&action=liste_Etu15' class="dropdown-item">2/2 promo</a>
      </div>
    </div>
  </div>
<br><br>

		<?php


			if ($Contact != false) {
				echo ("<h2> Liste étudiant :</h2><br><br>");
				echo ('<table class="table">');
				echo ('<tr><th> NOM </th> <th> PRENOM </th><th> EMAIL </th> <th> Groupe </th></tr>'); 	
				foreach ($Contact as $c) {
					echo "<tr class='contact'>";
					echo ("<td>" . $c['nom'] . "</td>"); // utf8_encode($c['nom']) si nécessaire
					echo ("<td>" . $c['prenom'] . "</td>"); 
					echo ("<td>" . $c['email'] . "</td>");
					echo ("<td>" . $c['id_grpe'] . "</td>"); 
					echo "</tr>\n";
				}
				echo ('</table>');
			}
			else echo ('<h1 style="color: red">Il n\'y a pas d\'élève dans le groupe</h1>');
		?>
	</div>
	</div>
</body>
</html>
