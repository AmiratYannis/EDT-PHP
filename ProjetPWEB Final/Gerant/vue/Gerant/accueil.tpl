<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Accueil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="vue/styleCSS/acc.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>IUT Paris Descartes</h3>
            </div>

            <ul class="list-unstyled components">
               
                <li class="active">
                    <a  href="index.php?controle=Gerant&action=accueil" ><i class="fas fa-home"></i> Accueil</a>
                </li>
                <li>
                    <a  href="index.php?controle=Profil&action=Profil"><i class="fas fa-user-alt"></i> Profil</a>
                     <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-users"></i> Liste contact</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="index.php?controle=contact&action=liste_Etu1">Liste étudiant</a>
                        </li>
                        <li>
                            <a href="index.php?controle=contact&action=liste_Prof">Professeurs</a>
                        </li>
                    </ul>
                        
                </li>
                <li>
                    <a href="index.php?controle=Gerant&action=edt"><i class="fas fa-calendar-alt"></i> Emploie du temps</a>
                    <a href="index.php?controle=Gerant&action=edtAutree"><i class="fas fa-calendar-alt"></i> Emploie du temps des professeurs</a>
                    <a href="index.php?controle=Gerant&action=edtEtuN11"><i class="fas fa-calendar-alt"></i> Emploie du temps des Etudiants</a>
                </li>
                <li>
                    <a  href="index.php?controle=Gerant&action=modifProfiletu"><i class="fas fa-cog"></i> Paramètres</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
         
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php?controle=Profil&action=Profil"><i class="fas fa-user-alt"></i> Profil</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php?controle=Gerant&action=bye"><i class="fas fa-sign-out-alt"></i> Deconnexion</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
                <h1> Bienvenue 
				<?php echo ($_SESSION['profil']['prenom'] . " " . $_SESSION['profil']['nom'] ); 
				echo ("<h1 style='padding-bottom:5%'><br> Information de votre profil : </h1>");
				echo ('<table class="table"> ');
					echo('<thead>');
						echo ('<tr><th scope="col">Prenom</th><th scope="col">Nom</th><th scope="col">Email</th></tr>'); 
						echo ("<tr class='contact'>");
						echo ("<td>" . $_SESSION['profil']['prenom'] . "</td>");
						echo ("<td>" . $_SESSION['profil']['nom'] . "</td>");
						echo ("<td>" . $_SESSION['profil']['email'] . "</td>");
					echo ("</tr></thead>");
				echo ("</table");
				?>	
		</h1>      
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>

</html>