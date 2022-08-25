<?php 
	/*Fonctions-modèle réalisant les requètes de gestion des contacts en base de données*/
	
	// liste_contact_bd : retourne la liste des informations pour chaque contact de l'utilisateur $id
	
	function edt($id_prof) {
		require ("Modele/connectSQL.php") ; 
		$sql="SELECT c.tDeb, c.tFin, m.label,p.nom, p.prenom, s.nom, g.num_grpe, p.couleur FROM creneau c INNER JOIN matiere m ON c.id_mat = m.id_mat INNER JOIN prof p ON c.id_prof = p.id_prof INNER JOIN salle s ON c.id_salle = s.id_salle INNER JOIN groupe g ON c.id_grpe = g.id_grpe Where p.id_prof=:id_prof";
			   // LIMIT ne marche pas en MS SQL SERVER
		try {
			$commande = $pdo->prepare($sql);
			$commande->bindParam(':id_prof', $id_prof);			
			$bool = $commande->execute();
			$Edt= array();
			if ($bool) {
				while ($edt = $commande->fetch()) {
					$Edt[] = $edt; //stockage dans $C des enregistrements sélectionnés
				}	
			}
		}
		catch (PDOException $e) {
			echo utf8_encode("Echec de select : " . $e->getMessage() . "\n");
			die(); // On arrête tout.
		}
		return $Edt;
			
	}
?>