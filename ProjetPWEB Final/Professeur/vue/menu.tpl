<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php?controle=professeur&action=accueil">P5</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php?controle=professeur&action=accueil"><i class="fas fa-home"></i> Accueil<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Liste contact
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?controle=contact&action=liste_Etu1">Etudiant</a>
          <a class="dropdown-item" href="index.php?controle=contact&action=liste_professeur">Professeurs</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?controle=professeur&action=emploi_du_temps">Emploie du temps</a>
      </li>
	  
	  
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Paramètres
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?controle=professeur&action=modifProfilProf">modifier profil</a>
          <a class="dropdown-item" href="index.php?controle=professeur&action=modifCouleur">modifier couleur</a>
          <a class="dropdown-item"href="index.php?controle=professeur&action=SpecifierContraintes"> Specification de contrainte</a>
		  <a class="dropdown-item" href="index.php?controle=RespMatiere&action=SpecifierTypeEns"> Specification du type d'enseignement</a> 
		   <a class="dropdown-item" href="index.php?controle=RespMatiere&action&action=SpecifierLabelMatiere"> Specification du label de la matiere </a> 
		   <a class="dropdown-item" href="index.php?controle=RespMatiere&action&action=AfficherContraintes"> Gérer les Contraintes </a>
		    <a class="dropdown-item" href="index.php?controle=professeur&action=EnvoyerMessage"> Envoyer un message </a>
					    <a class="dropdown-item" href="index.php?controle=professeur&action=MessageReçu"> Messages Reçus </a>
			
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php?controle=profil&action=Profil">Profil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?controle=professeur&action=bye"> Deconnexion</a>
      </li>
    </ul>
    </form>
  </div>
</nav>