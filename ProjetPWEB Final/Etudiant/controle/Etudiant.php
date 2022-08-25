<?php 
	/*controleur utilisateur.php :
		fonctions-action de gestion des utilisateurs
	*/
	
	function ident () {
		$nom=isset($_POST['nom'])?trim($_POST['nom']):'';
		$login_etu=isset($_POST['login_etu'])?trim($_POST['login_etu']):'';
		$msg="";
		
		require ("./modele/EtudiantBD.php");
		
		if (count($_POST)==0)
		require("vue/Etudiant/ident.tpl");
		else {
			if (($bool=verifS_ident($nom, $login_etu, $err)) && verif_bd($nom,$login_etu,$profil)){
				//echo ('<br />PROFIL : <pre>'); print_r ($profil); echo ('</pre><br />'); die("ident");
				
				//session_start(); //fait dans index
				$_SESSION['profil'] = $profil;
				$idEtu=$_SESSION['profil']['id_etu'];
				modifBConnect(1,$idEtu);
				$nexturl = "index.php?controle=Etudiant&action=accueil";
				header ("Location:" . $nexturl);
			}
			else {
				if (!$bool) $msg = $err;
				else $msg = "Utilisateur inconnu !";
				require("vue/Etudiant/ident.tpl");
			}
		}
	}
	
	function accueil() {
		require ("modele/contactBD.php");
		require ("vue/Etudiant/accueil.tpl");
	}
	
	// vérification syntaxique des saisies
	// nom : composé de caractères alphanumériques et du tiret, chaîne non vide de 30 caractères maximum
	// num : composé de caractères alphanumériques, à raison de 6 à 8 caractères
	// En cas d'erreur, une information sur l'erreur est retournée dans $err 
	function verifS_ident($nom, $login_etu, &$err) {
		if (!preg_match("`^[[:alpha:][:digit:]\-]{1,30}$`", $nom)) {
			$err = 'erreur de syntaxe sur le nom';
			return false;
		}
		return true;
	} 
	
	function bye() {
		require("./modele/EtudiantBD.php");
		$idEtu=$_SESSION['profil']['id_etu'];
		session_destroy();
		modifBConnect(0,$idEtu);
		$nexturl="index.php?controle=Gerant&action=ident";
		header("Location:" . $nexturl);
	}

	function modifProfiletu () {

		$nom=isset($_POST['nom'])?trim($_POST['nom']):'';
		$prenom=isset($_POST['prenom'])?trim($_POST['prenom']):'';
		$id_etu=isset($_POST['id_etu'])?trim($_POST['id_etu']):'';
		$email=isset($_POST['email'])?trim($_POST['email']):'';
		$login_etu=isset($_POST['login_etu'])?trim($_POST['login_etu']):'';
		$pass_etu=isset($_POST['pass_etu'])?trim($_POST['pass_etu']):'';
		$msg="";
		require ("./modele/modifProfBD.php");

		if (modifprofil($nom,$prenom,$id_etu,$email,$login_etu,$pass_etu,$profil)){
				$_SESSION['profil'] = $profil;
		}else {
			$msg = "Erreur";
		}
		require("vue/Etudiant/modifProfil.tpl");			
	}

	function edt() {
		require ("modele/edtBD.php");
		$id_grpe = (isset($_GET['id']))?$_GET['id']:$_SESSION['profil']['id_grpe'];
		$edtbd = edtbd($id_grpe);
		require ("vue/EDT/edt.tpl"); 

	}
			
?>						