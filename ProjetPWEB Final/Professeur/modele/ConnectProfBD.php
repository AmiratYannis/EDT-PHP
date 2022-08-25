<?php 

/*Fonctions-modèle réalisant les requètes de gestion des utilisateurs en base de données*/
	
	// verif_identification : fonction booléenne. 
	// Si vraie, alors le profil de l'utilisateur est affecté en sortie à $profil
	
	function verifProf_bd($login,$mdp,&$profil) {
		require('modele/connectSQL.php'); //$pdo est défini dans ce fichier
		$sql="SELECT * FROM prof_roles pr INNER JOIN prof p ON pr.id_prof = p.id_prof WHERE p.login_prof=:login AND p.pass_prof=:mdp AND pr.label != 'Responsable EDT - DUT 1 DUT 2' ";
		try {
			$commande = $pdo->prepare($sql);
			$commande->bindParam(':login', $login);
			$commande->bindParam(':mdp', $mdp);
			$bool = $commande->execute();
			if ($bool) {
				$resultat = $commande->fetchAll(PDO::FETCH_ASSOC); //tableau d'enregistrements
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
			return true;
		}
	}
	
	function modifBConnect($bConnect,$idProf){ 
		require('modele/connectSQL.php');
		$sql="UPDATE prof SET bConnect=:bConnect  WHERE id_prof=:idProf LIMIT 1" ;
			$commande = $pdo->prepare($sql);
			$commande->bindParam(':bConnect', $bConnect);
			$commande->bindParam(':idProf', $idProf);
			$commande->execute();
	}
	
?>