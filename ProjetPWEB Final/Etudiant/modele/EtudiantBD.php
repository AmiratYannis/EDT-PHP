<?php
	/*Fonctions-modèle réalisant les requètes de gestion des utilisateurs en base de données*/
	
	// verif_bd : fonction booléenne. 
	// Si vraie, alors le profil de l'utilisateur est affecté en sortie à $profil
	
	
	function verif_bd($nom,$login_etu,&$profil) {
		require('modele/connectBD.php'); //$pdo est défini dans ce fichier
		$sql="SELECT * FROM etudiant WHERE login_etu=:nom AND pass_etu=:login_etu";
		//$sql="UPDATE etudiant SET nom =:nom WHERE login_etu=:login_etu" ;
		try {
			$commande = $pdo->prepare($sql);
			$commande->bindParam(':nom', $nom);
			$commande->bindParam(':login_etu', $login_etu);
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
	
	function modifBConnect($bConnect,$idEtu){ 
		require('modele/connectBD.php');
		$sql="UPDATE etudiant SET bConnect=:bConnect  WHERE id_etu=:idEtu LIMIT 1" ;
			$commande = $pdo->prepare($sql);
			$commande->bindParam(':bConnect', $bConnect);
			$commande->bindParam(':idEtu', $idEtu);
			$commande->execute();
	}

	function verif_etu(){
		require('modele/connectBD.php'); 
		$sql2="SELECT * FROM etudiant";
		$co = $pdo->prepare($sql2);
		$co->execute();
	}
	
	
?>