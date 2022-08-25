<?php 
	/*Fonctions-modèle réalisant les requètes de gestion des contacts en base de données*/
	
	// liste_contact_bd : retourne la liste des informations pour chaque contact de l'utilisateur $id
	
	function contacts() {
		require ("Modele/connectBD.php") ; 
		$sql="SELECT p.nom,p.prenom,p.email,c.label 
			FROM prof p 
			inner join prof_roles c 
			ON p.id_prof =c.id_prof"; // LIMIT ne marche pas en MS SQL SERVER
		try {
			$commande = $pdo->prepare($sql);
			$bool = $commande->execute();
			$C= array();
			if ($bool) {
				while ($c = $commande->fetch()) {
					$C[] = $c; //stockage dans $C des enregistrements sélectionnés
				}	
			}
		}
		catch (PDOException $e) {
			echo utf8_encode("Echec de select : " . $e->getMessage() . "\n");
			die(); // On arrête tout.
		}
		return $C;
	}
?>
