<?php 
	/*Fonctions-modèle réalisant les requètes de gestion des contacts en base de données*/
	
	// liste_contact_bd : retourne la liste des informations pour chaque contact de l'utilisateur $id
	
	function contacts($id_grpe) {
		require ("Modele/connectBD.php") ; 
		$sql="SELECT e.nom, e.prenom, e.id_grpe
				FROM etudiant e
				INNER JOIN etu_grps c
				ON c.id_grpe = e.id_grpe
				WHERE e.id_grpe =:id_grpe 
				LIMIT 2"; // LIMIT ne marche pas en MS SQL SERVER
		try {
			$commande = $pdo->prepare($sql);
			$commande->bindParam(':id_grpe', $id_grpe);
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
