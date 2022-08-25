<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Profil utilisateur</title>
		<link rel="stylesheet" type="text/css" href="vue/styleCSS/edt.css">
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
			<?php
			echo ("<h1> Information de votre profil : <br><br></h1>");
			echo ('<table class="table"> ');
				echo('<thead>');
					echo ('<tr><th scope="col"> Genre </th>');
					echo('<th scope="col"> Nom </th>');
					echo('<th scope="col"> Prenom </th>');
					echo('<th scope="col"> Email </th>');
					echo('<th scope="col"> Groupe </th>');
					echo('<th scope="col"> Login </th>');
					echo('<th scope="col"> Matricule </th></tr>');
				echo('</thead>');
				echo('<tbody>');
				echo ('<tr>');
					echo ("<td >" . $_SESSION['profil']['genre'] . "</td>");
					echo ("<td>" . $_SESSION['profil']['nom'] . "</td>");
					echo ("<td>" . $_SESSION['profil']['prenom'] . "</td>");
					echo ("<td>" . $_SESSION['profil']['email'] . "</td>");
					echo ("<td>" . $_SESSION['profil']['id_grpe'] . "</td>");
					echo ("<td>" . $_SESSION['profil']['login_etu'] . "</td>");
					echo ("<td>" . $_SESSION['profil']['matricule'] . "</td>");
				echo ("</tr>");
			echo ("</table>");
			echo('</tbody>');
			?>	
		</div>
	</div>
		</div>
	</body>

</html>
