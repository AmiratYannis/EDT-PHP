<?php 
	/*controleur utilisateur.php :
		fonctions-action de gestion des utilisateurs
	*/
	
	function ident () {
		$nom=isset($_POST['nom'])?trim($_POST['nom']):'';
		$login_prof=isset($_POST['login_prof'])?trim($_POST['login_prof']):'';
		$msg="";
		
		require ("./modele/GerantBD.php");
		
		if (count($_POST)==0)
		require("vue/Gerant/ident.tpl");
		else {
			if (($bool=verifS_ident($nom, $login_prof, $err)) && verif_bd($nom,$login_prof,$profil)){
				//echo ('<br />PROFIL : <pre>'); print_r ($profil); echo ('</pre><br />'); die("ident");
				
				//session_start(); //fait dans index
				$_SESSION['profil'] = $profil;
				$idProf=$_SESSION['profil']['id_prof'];
				modifBConnect(1,$idProf);
				$nexturl = "index.php?controle=Gerant&action=accueil";
				header ("Location:" . $nexturl);
			}
			else {
				if (!$bool) $msg = $err;
				else $msg = "Gérant inconnu !";
				require("vue/Gerant/ident.tpl");
			}
		}
	}
	
	function accueil() {
		//require ("modele/Contact-Prof-EtudiantBD.php");
		require ("vue/Gerant/accueil.tpl");
	}
	
	// vérification syntaxique des saisies
	// nom : composé de caractères alphanumériques et du tiret, chaîne non vide de 30 caractères maximum
	// num : composé de caractères alphanumériques, à raison de 6 à 8 caractères
	// En cas d'erreur, une information sur l'erreur est retournée dans $err 
	function verifS_ident($nom, $login_prof,&$err) {
		if (!preg_match("`^[[:alpha:][:digit:]\-]{1,30}$`", $nom)) {
			$err = 'erreur de syntaxe sur le nom';
			return false;
		}
		
		return true;
	} 
	
	function bye() {
		require("./modele/GerantBD.php");
		$idProf=$_SESSION['profil']['id_prof'];
		session_destroy();
		modifBConnect(0,$idProf);
		$nexturl="index.php?controle=Gerant&action=ident";
		header("Location:" . $nexturl);
	}

	function modifProfiletu () {

		$nom=isset($_POST['nom'])?trim($_POST['nom']):'';
		$prenom=isset($_POST['prenom'])?trim($_POST['prenom']):'';
		$id_prof=isset($_POST['id_prof'])?trim($_POST['id_prof']):'';
		$email=isset($_POST['email'])?trim($_POST['email']):'';
		$login_prof=isset($_POST['login_prof'])?trim($_POST['login_prof']):'';
		$pass_prof=isset($_POST['pass_prof'])?trim($_POST['pass_prof']):'';
		$msg="";
		require ("./modele/modifProfBD.php");

		if (modifprofil($nom,$prenom,$id_prof,$email,$login_prof,$pass_prof,$profil)){
				$_SESSION['profil'] = $profil;
		}else {
			$msg = "Erreur";
		}
		require("vue/Gerant/modifProfil.tpl");			
	}

	function modifProfilprof() {

		$nom=isset($_POST['nom'])?trim($_POST['nom']):'';
		$prenom=isset($_POST['prenom'])?trim($_POST['prenom']):'';
		$id_prof=isset($_POST['id_prof'])?trim($_POST['id_prof']):'';
		$email=isset($_POST['email'])?trim($_POST['email']):'';
		$login_prof=isset($_POST['login_prof'])?trim($_POST['login_prof']):'';
		$pass_prof=isset($_POST['pass_prof'])?trim($_POST['pass_prof']):'';
		$msg="";
		require ("./modele/modifProfBD.php");

		if (modifprofilproff($nom,$prenom,$id_prof,$email,$login_prof,$pass_prof)){
				
		}else {
			$msg = "Erreur";
		}
		require("vue/Gerant/modifProfilprof.tpl");			
	}

	function modifProfiletudiant() {

		$nom=isset($_POST['nom'])?trim($_POST['nom']):'';
		$prenom=isset($_POST['prenom'])?trim($_POST['prenom']):'';
		$id_etu=isset($_POST['id_etu'])?trim($_POST['id_etu']):'';
		$email=isset($_POST['email'])?trim($_POST['email']):'';
		$login_etu=isset($_POST['login_etu'])?trim($_POST['login_etu']):'';
		$pass_etu=isset($_POST['pass_etu'])?trim($_POST['pass_etu']):'';
		$msg="";
		require ("./modele/modifProfBD.php");

		if (modifprofiletud($nom,$prenom,$id_etu,$email,$login_etu,$pass_etu)){
				
		}else {
			$msg = "Erreur";
		}
		require("vue/Gerant/modifProfilETU.tpl");			
	}

	function edt() {
		require ("modele/edtBD.php");
		$idProf=$_SESSION['profil']['id_prof'];
		$edt = edtBD($idProf);
		require ("vue/EDT/edt.tpl"); 

	}

	function edtAutree() {
		require ("modele/edtBD.php");
		$idProf=$_SESSION['profil']['id_prof'];
		$edtAutre = edtAutre($idProf);
		require ("vue/EDT/edAutre.tpl"); 

	}

	function edtMouradO() {
		require ("modele/edtBD.php");
		$idProf=$_SESSION['profil']['id_prof'];
		$edtAutre = edtMourad($idProf);
		require ("vue/EDT/edtMourad.tpl"); 

	}

	function edtilie() {
		require ("modele/edtBD.php");
		$idProf=$_SESSION['profil']['id_prof'];
		$edtAutre = edtJMilie($idProf);
		require ("vue/EDT/edtilie.tpl"); 

	}

	function edtCK() {
		require ("modele/edtBD.php");
		$idProf=$_SESSION['profil']['id_prof'];
		$edtAutre = edtKurtz($idProf);
		require ("vue/EDT/edtKurtz.tpl"); 

	}

	function edtsortaiss() {
		require ("modele/edtBD.php");
		$idProf=$_SESSION['profil']['id_prof'];
		$edtAutre = edtSortais($idProf);
		require ("vue/EDT/edtsortais.tpl"); 

	}

	function edtDir() {
		require ("modele/edtBD.php");
		$idProf=$_SESSION['profil']['id_prof'];
		$edtAutre = edtDirani($idProf);
		require ("vue/EDT/edtdirani.tpl"); 

	}

	function edtLM() {
		require ("modele/edtBD.php");
		$idProf=$_SESSION['profil']['id_prof'];
		$edtAutre = edtMar($idProf);
		require ("vue/EDT/edtMar.tpl"); 

	}

	function edtOP() {
		require ("modele/edtBD.php");
		$idProf=$_SESSION['profil']['id_prof'];
		$edtAutre = edtPO($idProf);
		require ("vue/EDT/edtPO.tpl"); 

	}

	function edtEtuN1() {
		require ("modele/edtBD.php");
		$idProf=$_SESSION['profil']['id_prof'];
		$edtAutre = edtEtu1($idProf);
		require ("vue/EDT/edtEtu1.tpl"); 
	}

	function edtEtuN11() {
		require ("modele/edtBD.php");
		$idProf=$_SESSION['profil']['id_prof'];
		$edtAutre = edtEtu11($idProf);
		require ("vue/EDT/edtEtu11.tpl"); 
	}

	function edtEtuN2() {
		require ("modele/edtBD.php");
		$idProf=$_SESSION['profil']['id_prof'];
		$edtAutre = edtEtu2($idProf);
		require ("vue/EDT/edtEtu2.tpl"); 
	}

	function edtEtuN3() {
		require ("modele/edtBD.php");
		$idProf=$_SESSION['profil']['id_prof'];
		$edtAutre = edtEtu3($idProf);
		require ("vue/EDT/edtEtu3.tpl"); 
	}
	function edtEtuN4() {
		require ("modele/edtBD.php");
		$idProf=$_SESSION['profil']['id_prof'];
		$edtAutre = edtEtu4($idProf);
		require ("vue/EDT/edtEtu4.tpl"); 
	}
	function edtEtuN5() {
		require ("modele/edtBD.php");
		$idProf=$_SESSION['profil']['id_prof'];
		$edtAutre = edtEtu5($idProf);
		require ("vue/EDT/edtEtu5.tpl"); 
	}
	function edtEtuN6() {
		require ("modele/edtBD.php");
		$idProf=$_SESSION['profil']['id_prof'];
		$edtAutre = edtEtu6($idProf);
		require ("vue/EDT/edtEtu6.tpl"); 
	}
	function edtEtuN7() {
		require ("modele/edtBD.php");
		$idProf=$_SESSION['profil']['id_prof'];
		$edtAutre = edtEtu7($idProf);
		require ("vue/EDT/edtEtu7.tpl"); 
	}
	function edtEtuN8() {
		require ("modele/edtBD.php");
		$idProf=$_SESSION['profil']['id_prof'];
		$edtAutre = edtEtu8($idProf);
		require ("vue/EDT/edtEtu8.tpl"); 
	}
	function edtEtuN9() {
		require ("modele/edtBD.php");
		$idProf=$_SESSION['profil']['id_prof'];
		$edtAutre = edtEtu9($idProf);
		require ("vue/EDT/edtEtu9.tpl"); 
	}
	function edtEtuN10() {
		require ("modele/edtBD.php");
		$idProf=$_SESSION['profil']['id_prof'];
		$edtAutre = edtEtu10($idProf);
		require ("vue/EDT/edtEtu10.tpl"); 
	}
	function edtEtuN12() {
		require ("modele/edtBD.php");
		$idProf=$_SESSION['profil']['id_prof'];
		$edtAutre = edtEtu12($idProf);
		require ("vue/EDT/edtEtu12.tpl"); 
	}
	function edtEtuN13() {
		require ("modele/edtBD.php");
		$idProf=$_SESSION['profil']['id_prof'];
		$edtAutre = edtEtu13($idProf);
		require ("vue/EDT/edtEtu13.tpl"); 
	}
	function edtEtuN14() {
		require ("modele/edtBD.php");
		$idProf=$_SESSION['profil']['id_prof'];
		$edtAutre = edtEtu14($idProf);
		require ("vue/EDT/edtEtu14.tpl"); 
	}
	function edtEtuN15() {
		require ("modele/edtBD.php");
		$idProf=$_SESSION['profil']['id_prof'];
		$edtAutre = edtEtu15($idProf);
		require ("vue/EDT/edtEtu15.tpl"); 
	}


	function modifCouleur(){ 
		$couleur=isset($_POST['couleur'])? trim($_POST['couleur']):'';
		$nom=isset($_POST['nom'])? trim($_POST['nom']):'';
		$msg="";
		require("./modele/ModifCouleurBD.php");
		require("./vue/Gerant/modifCouleur.tpl");
		if(!empty($couleur)){
			modifCouleurProf($couleur,$nom);
		}
		else{ 
			//echo "Aucune couleur choisis";
		}
		
	}
	function modifEDTprof(){ 
		$tDeb=isset($_POST['tDeb'])? trim($_POST['tDeb']):'';
		$nom=isset($_POST['nom'])? trim($_POST['nom']):'';
		$msg="";
		require("./modele/ModifDateBD.php");
		require("./vue/EDT/modifEDT.tpl");
		if(!empty($tDeb)){
			modifDateEDT($tDeb,$nom);
			$nexturl = "index.php?controle=Gerant&action=accueil";
			header ("Location:" . $nexturl);
		}
		else{ 
			//echo "Aucune couleur choisis";
		}
		
	}
	
	function EnvoyerMessage(){ 
		$idGerant=$_SESSION['profil']['id_prof'];
		require("./modele/listeEmailsProfs.php");
		$emails=listeEmailsProfs();
		require("vue/Gerant/EnvoyerUnMessage.tpl");
		$email=isset($_POST['email'])?trim($_POST['email']):'';
		$objet=isset($_POST['objet'])?trim($_POST['objet']):'';
		$contenu=isset($_POST['contenu'])?trim($_POST['contenu']):'';
		require("./modele/IdGerantEmail.php");
		$idDest=idGerantEmail($email);
		if(!empty($objet)&&!empty($contenu)){
		require("./modele/Messagerie.php");
		envoyerNouvMessage($objet,$idGerant,$idDest,$contenu);
		}
		else { 
			echo "message non valide";
		}
	}
	
	function MessageReçu(){ 
		$idGerant=$_SESSION['profil']['id_prof'];
		require("./modele/Messagerie.php");
		$Msg=recevoirMessages($idGerant);
		require("./vue/Gerant/messages.tpl");
	}
	
			
?>						