<?php
	/*Fonctions-modèle réalisant les requètes de gestion des utilisateurs en base de données*/
	
	// verif_bd : fonction booléenne. 
	// Si vraie, alors le profil de l'utilisateur est affecté en sortie à $profil
	
	
	function verif_bd($nom,$login_prof,&$profil) {
		require('modele/connectBD.php'); //$pdo est défini dans ce fichier
		//$sql="SELECT * FROM etudiant WHERE nom=:nom AND login_etu=:login_etu";
		$sql = "SELECT * FROM prof_roles pr INNER JOIN prof p ON pr.id_prof = p.id_prof WHERE p.login_prof=:nom AND p.pass_prof=:login_prof AND pr.label = 'Responsable EDT - DUT 1 DUT 2' "  ;
		//$sql="UPDATE etudiant SET nom =:nom WHERE login_etu=:login_etu" ;
		try {
			$commande = $pdo->prepare($sql);
			$commande->bindParam(':nom', $nom);
			$commande->bindParam(':login_prof', $login_prof);
			$bool = $commande->execute();
			if ($bool) {
				$resultat = $commande->fetchAll(PDO::FETCH_ASSOC); //tableau d'enregistrements
				// var_dump($resultat); die();
				/*while ($ligne = $commande->fetch()) { // ligne par ligne
					print_r($ligne);
				}*/
			}
		}
		catch (PDOException $e) {
			echo utf8_encode("Echec de select : " . $e->getMessage() . "\n");
			die(); // On arrête tout.
		}
		if (count($resultat) == 0) {
			$profil=array(); // Pour qu'il y ait quand même quelque chose...
			return false; 
		}
		else {
			$profil = $resultat[0];
			//var_dump($profil);
			return true;
		}
	}
	function modifBConnect($bConnect,$idProf){ 
		require('modele/connectBD.php');
		$sql="UPDATE prof SET bConnect=:bConnect  WHERE id_prof=:idProf LIMIT 1" ;
			$commande = $pdo->prepare($sql);
			$commande->bindParam(':bConnect', $bConnect);
			$commande->bindParam(':idProf', $idProf);
			$commande->execute();
	}

	function verif_etu(){
		require('modele/connectBD.php'); 
		$sql2="SELECT * FROM etudiant";
		$co = $pdo->prepare($sql2);
		$co->execute();
	}
	
	
?>