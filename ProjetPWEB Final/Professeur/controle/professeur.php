<?php
	
	function identProf(){ 
		$login=isset($_POST['login'])? trim($_POST['login']):'';
		$mdp=isset($_POST['MotDePasse'])? trim($_POST['MotDePasse']):'';
		$msg="";

		require("./modele/ConnectProfBD.php");
		if(count($_POST)==0){
			require("./vue/professeur/ident.tpl");
		}
		else { 
			if (($bool=verifS_ident($login, $mdp, $err)) && verifProf_bd($login,$mdp,$profil)){
					
				$_SESSION['profil'] = $profil;
				$idProf=$_SESSION['profil']['id_prof'];
				modifBconnect(1,$idProf);
				$nexturl = "index.php?controle=professeur&action=accueil";
				header ("Location:" . $nexturl);
			}
			else {
				 $msg = "Utilisateur inconnu !";
				 echo $msg;
				require("./vue/professeur/ident.tpl");
			}
		}
	}
	
	function verifS_ident($nom, $login_prof,&$err) {
		if (!preg_match("`^[[:alpha:][:digit:]\-]{1,30}$`", $nom)) {
			$err = 'erreur de syntaxe sur le nom';
			return false;
		}
		
		return true;
	} 
	
	function modifProfilProf(){ 
		$email=isset($_POST['email'])? trim($_POST['email']):'';
		$login=isset($_POST['login'])? trim($_POST['login']):'';
		$mdp=isset($_POST['MotDePasse'])? trim($_POST['MotDePasse']):'';
		$Cmdp=isset($_POST['CMotDePasse'])? trim($_POST['CMotDePasse']):'';
		$url=isset($_POST['pictureToUpload'])? trim($_POST['pictureToUpload']):'';
		$idProf=$_SESSION['profil']['id_prof'];
		$msg="";
		require("./modele/Modif_Profil_Prof.php");
		require("./vue/professeur/modifProfilProf.tpl");
		if(!empty($email)&&!empty($login)&&!empty($mdp)&&!empty($Cmdp)&&$mdp==$Cmdp){
			modif_ProfilProf($email,$login,$mdp,$url,$idProf);
			$nexturl = "index.php?controle=professeur&action=identProf";
			header ("Location:" . $nexturl);
		}
		else {
			echo "Les deux mots de passes doivent êtres identiques!";
		
			
		}
	}
	
	function modifCouleur(){ 
		$couleur=isset($_POST['couleur'])? trim($_POST['couleur']):'';
		$idProf=$_SESSION['profil']['id_prof'];
		$msg="";
		require("./modele/ModifCouleur.php");
		require("./vue/professeur/modifCouleur.tpl");
		if(!empty($couleur)){
			modifCouleurProf($couleur,$idProf);
		}
		else{ 
			echo "Aucune couleur choisis";
		}
		
	}
	
	
	
	
	function SpecifierContraintes(){ 
		$idProf=$_SESSION['profil']['id_prof'];
				if(count($_POST)==0){ 
					require("./vue/professeur/specifierContrainte.tpl");
				}
				
				$bPositive=isset($_POST['bPositive'])? trim($_POST['bPositive']):'';
				$type_cont=isset($_POST['type_cont'])? trim($_POST['type_cont']):'';
				$val_cont=isset($_POST['val_cont'])? trim($_POST['val_cont']):'';
				require("./modele/IdProfMatiere.php");
				
				$idMat=idMatProf($idProf);
			
				if(!empty($val_cont)){
					require("./modele/SpecifierContrainte.php");
					specifierNouvelleContrainte($bPositive,$idMat,$idProf,NULL,$type_cont,$val_cont);
					echo "coucou";
					$nexturl="index.php?controle=professeur&action=accueil";
					header("Location:" . $nexturl);
				}		
	}
	
	function emploi_du_temps(){ 
		require ("modele/edt.php");
		$idProf=$_SESSION['profil']['id_prof'];
		$edt = edt($idProf);
		require("vue/edt/edt.tpl");
	}
	
	
	
	
	
	function EnvoyerMessage(){ 
		$idProf=$_SESSION['profil']['id_prof'];
		require("./modele/listeEmailsProfs.php");
		$emails=listeEmailsProfs();
		require("./vue/professeur/EnvoyerUnMessage.tpl");
		$email=isset($_POST['email'])?trim($_POST['email']):'';
		$objet=isset($_POST['objet'])?trim($_POST['objet']):'';
		$contenu=isset($_POST['contenu'])?trim($_POST['contenu']):'';
		require("./modele/IdProfMatiere.php");
		$idDest=idProfEmail($email);
		if(!empty($objet)&&!empty($contenu)){
		require("./modele/Messagerie.php");
		envoyerNouvMessage($objet,$idProf,$idDest,$contenu);
		}
		else { 
			echo "message non valide";
		}
	}
	
	function MessageReçu(){ 
		$idProf=$_SESSION['profil']['id_prof'];
		require("./modele/Messagerie.php");
		$Msg=recevoirMessages($idProf);
		require("./vue/professeur/messages.tpl");
	}
	
	function accueil() {
		require ("modele/Contact-Prof-Etudiant.php");
		
		require ("./vue/professeur/accueil.tpl");
	}
	
	function bye() {
		require("./modele/ConnectProfBD.php");
		$idProf=$_SESSION['profil']['id_prof'];
		session_destroy();
		modifBconnect(0,$idProf);
		$nexturl="index.php?controle=professeur&action=ident";
		header("Location:" . $nexturl);
	}
?>

