<?php 
	/*Fonctions-modèle réalisant les requètes de gestion des contacts en base de données*/
	
	// liste_contact_bd : retourne la liste des informations pour chaque contact de l'utilisateur $id
	//, p.couleur
	function edtbd($id_grpe) {
		require ("Modele/connectBD.php") ; 
		$sql="SELECT c.tDeb, c.tFin, m.label, p.prenom, s.nom, g.num_grpe, p.couleur
			  FROM creneau c
  			  INNER JOIN matiere m
			  ON c.id_mat = m.id_mat
              INNER JOIN prof p
              ON c.id_prof = p.id_prof
              INNER JOIN salle s
              ON c.id_salle = s.id_salle
              INNER JOIN groupe g
              ON c.id_grpe = g.id_grpe
			  Where c.id_grpe =:id_grpe
			  "; // LIMIT ne marche pas en MS SQL SERVER
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