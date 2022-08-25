<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php?controle=Gerant&action=accueil">P5</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php?controle=Gerant&action=accueil"><i class="fas fa-home"></i> Accueil<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Liste contact
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?controle=contact&action=liste_Etu1">Liste étudiant</a>
          <a class="dropdown-item" href="index.php?controle=contact&action=liste_Prof">Professeurs</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Emploie du temps
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?controle=Gerant&action=edt">Mon emploie du temps</a>
          <a class="dropdown-item" href="index.php?controle=Gerant&action=edtAutree">Emploie du temps des profs</a>
          <a class="dropdown-item" href="index.php?controle=Gerant&action=edtEtuN11">Emploie du temps des etudiants</a>
        </div>
      </li>




       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Paramètres
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?controle=Gerant&action=modifProfiletu">Paramètres Profils</a>
          <a class="dropdown-item" href="index.php?controle=Gerant&action=modifCouleur">Modifier couleur</a>
          <a class="dropdown-item" href="index.php?controle=Gerant&action=modifEDTprof">Modifier EDT prof</a>
		    <a class="dropdown-item" href="index.php?controle=Gerant&action=EnvoyerMessage">Envoyer un Message</a>
		   <a class="dropdown-item" href="index.php?controle=Gerant&action=MessageReçu"> Messages Reçus </a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php?controle=Profil&action=Profil">Profil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?controle=Gerant&action=bye"> Deconnexion</a>
      </li>
    </ul>
    </form>
  </div>
</nav>