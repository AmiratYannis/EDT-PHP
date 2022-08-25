<?php 
	/*Fonctions-modèle réalisant les requètes de gestion des contacts en base de données*/
	
	// liste_contact_bd : retourne la liste des informations pour chaque contact de l'utilisateur $id
	//, p.couleur
	function edtBD($id_prof) {
		require ("Modele/connectBD.php") ; 
		$sql="SELECT c.tDeb, c.tFin, m.label,p.nom, p.prenom, s.nom, g.num_grpe, m.couleur FROM creneau c INNER JOIN matiere m ON c.id_mat = m.id_mat INNER JOIN prof p ON c.id_prof = p.id_prof INNER JOIN salle s ON c.id_salle = s.id_salle INNER JOIN groupe g ON c.id_grpe = g.id_grpe Where p.id_prof=:id_prof";
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


	function edtAutre($nom) {
		require ("Modele/connectBD.php") ; 
		$sql="SELECT c.tDeb, c.tFin, m.label,p.nom, p.prenom, s.nom, g.num_grpe, m.couleur FROM creneau c INNER JOIN matiere m ON c.id_mat = m.id_mat INNER JOIN prof p ON c.id_prof = p.id_prof INNER JOIN salle s ON c.id_salle = s.id_salle INNER JOIN groupe g ON c.id_grpe = g.id_grpe Where p.id_prof=3";
			   // LIMIT ne marche pas en MS SQL SERVER
		try {
			$commande = $pdo->prepare($sql);			
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

	function edtJMilie($nom) {
		require ("Modele/connectBD.php") ; 
		$sql="SELECT c.tDeb, c.tFin, m.label,p.nom, p.prenom, s.nom, g.num_grpe, m.couleur FROM creneau c INNER JOIN matiere m ON c.id_mat = m.id_mat INNER JOIN prof p ON c.id_prof = p.id_prof INNER JOIN salle s ON c.id_salle = s.id_salle INNER JOIN groupe g ON c.id_grpe = g.id_grpe Where p.id_prof=2";
			   // LIMIT ne marche pas en MS SQL SERVER
		try {
			$commande = $pdo->prepare($sql);					
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

	function edtKurtz($nom) {
		require ("Modele/connectBD.php") ; 
		$sql="SELECT c.tDeb, c.tFin, m.label,p.nom, p.prenom, s.nom, g.num_grpe, m.couleur FROM creneau c INNER JOIN matiere m ON c.id_mat = m.id_mat INNER JOIN prof p ON c.id_prof = p.id_prof INNER JOIN salle s ON c.id_salle = s.id_salle INNER JOIN groupe g ON c.id_grpe = g.id_grpe Where p.id_prof=4";
			   // LIMIT ne marche pas en MS SQL SERVER
		try {
			$commande = $pdo->prepare($sql);					
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

	function edtSortais($nom) {
		require ("Modele/connectBD.php") ; 
		$sql="SELECT c.tDeb, c.tFin, m.label,p.nom, p.prenom, s.nom, g.num_grpe, m.couleur FROM creneau c INNER JOIN matiere m ON c.id_mat = m.id_mat INNER JOIN prof p ON c.id_prof = p.id_prof INNER JOIN salle s ON c.id_salle = s.id_salle INNER JOIN groupe g ON c.id_grpe = g.id_grpe Where p.id_prof=5";
			   // LIMIT ne marche pas en MS SQL SERVER
		try {
			$commande = $pdo->prepare($sql);					
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


	function edtMourad($nom) {
		require ("Modele/connectBD.php") ; 
		$sql="SELECT c.tDeb, c.tFin, m.label,p.nom, p.prenom, s.nom, g.num_grpe, m.couleur FROM creneau c INNER JOIN matiere m ON c.id_mat = m.id_mat INNER JOIN prof p ON c.id_prof = p.id_prof INNER JOIN salle s ON c.id_salle = s.id_salle INNER JOIN groupe g ON c.id_grpe = g.id_grpe Where p.id_prof=6";
			   // LIMIT ne marche pas en MS SQL SERVER
		try {
			$commande = $pdo->prepare($sql);					
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


	function edtDirani($nom) {
		require ("Modele/connectBD.php") ; 
		$sql="SELECT c.tDeb, c.tFin, m.label,p.nom, p.prenom, s.nom, g.num_grpe, m.couleur FROM creneau c INNER JOIN matiere m ON c.id_mat = m.id_mat INNER JOIN prof p ON c.id_prof = p.id_prof INNER JOIN salle s ON c.id_salle = s.id_salle INNER JOIN groupe g ON c.id_grpe = g.id_grpe Where p.id_prof=7";
			   // LIMIT ne marche pas en MS SQL SERVER
		try {
			$commande = $pdo->prepare($sql);					
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

	function edtMar($nom) {
		require ("Modele/connectBD.php") ; 
		$sql="SELECT c.tDeb, c.tFin, m.label,p.nom, p.prenom, s.nom, g.num_grpe, m.couleur FROM creneau c INNER JOIN matiere m ON c.id_mat = m.id_mat INNER JOIN prof p ON c.id_prof = p.id_prof INNER JOIN salle s ON c.id_salle = s.id_salle INNER JOIN groupe g ON c.id_grpe = g.id_grpe Where p.id_prof=9";
			   // LIMIT ne marche pas en MS SQL SERVER
		try {
			$commande = $pdo->prepare($sql);					
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

	function edtPO($nom) {
		require ("Modele/connectBD.php") ; 
		$sql="SELECT c.tDeb, c.tFin, m.label,p.nom, p.prenom, s.nom, g.num_grpe, m.couleur FROM creneau c INNER JOIN matiere m ON c.id_mat = m.id_mat INNER JOIN prof p ON c.id_prof = p.id_prof INNER JOIN salle s ON c.id_salle = s.id_salle INNER JOIN groupe g ON c.id_grpe = g.id_grpe Where p.id_prof=10";
			   // LIMIT ne marche pas en MS SQL SERVER
		try {
			$commande = $pdo->prepare($sql);					
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


	function edtEtu1($nom) {
		require ("Modele/connectBD.php") ; 
		$sql="SELECT c.tDeb, c.tFin, m.label,p.nom, p.prenom, s.nom, g.num_grpe, m.couleur FROM creneau c INNER JOIN matiere m ON c.id_mat = m.id_mat INNER JOIN prof p ON c.id_prof = p.id_prof INNER JOIN salle s ON c.id_salle = s.id_salle INNER JOIN groupe g ON c.id_grpe = g.id_grpe Where g.id_grpe=1";
			   // LIMIT ne marche pas en MS SQL SERVER
		try {
			$commande = $pdo->prepare($sql);					
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


	function edtEtu11($nom) {
		require ("Modele/connectBD.php") ; 
		$sql="SELECT c.tDeb, c.tFin, m.label,p.nom, p.prenom, s.nom, g.num_grpe, m.couleur FROM creneau c INNER JOIN matiere m ON c.id_mat = m.id_mat INNER JOIN prof p ON c.id_prof = p.id_prof INNER JOIN salle s ON c.id_salle = s.id_salle INNER JOIN groupe g ON c.id_grpe = g.id_grpe Where g.id_grpe=11";
			   // LIMIT ne marche pas en MS SQL SERVER
		try {
			$commande = $pdo->prepare($sql);					
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

	function edtEtu2($nom) {
		require ("Modele/connectBD.php") ; 
		$sql="SELECT c.tDeb, c.tFin, m.label,p.nom, p.prenom, s.nom, g.num_grpe, m.couleur FROM creneau c INNER JOIN matiere m ON c.id_mat = m.id_mat INNER JOIN prof p ON c.id_prof = p.id_prof INNER JOIN salle s ON c.id_salle = s.id_salle INNER JOIN groupe g ON c.id_grpe = g.id_grpe Where g.id_grpe=2";
			   // LIMIT ne marche pas en MS SQL SERVER
		try {
			$commande = $pdo->prepare($sql);					
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

	function edtEtu3($nom) {
		require ("Modele/connectBD.php") ; 
		$sql="SELECT c.tDeb, c.tFin, m.label,p.nom, p.prenom, s.nom, g.num_grpe, m.couleur FROM creneau c INNER JOIN matiere m ON c.id_mat = m.id_mat INNER JOIN prof p ON c.id_prof = p.id_prof INNER JOIN salle s ON c.id_salle = s.id_salle INNER JOIN groupe g ON c.id_grpe = g.id_grpe Where g.id_grpe=3";
			   // LIMIT ne marche pas en MS SQL SERVER
		try {
			$commande = $pdo->prepare($sql);					
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


	function edtEtu4($nom) {
		require ("Modele/connectBD.php") ; 
		$sql="SELECT c.tDeb, c.tFin, m.label,p.nom, p.prenom, s.nom, g.num_grpe, m.couleur FROM creneau c INNER JOIN matiere m ON c.id_mat = m.id_mat INNER JOIN prof p ON c.id_prof = p.id_prof INNER JOIN salle s ON c.id_salle = s.id_salle INNER JOIN groupe g ON c.id_grpe = g.id_grpe Where g.id_grpe=4";
			   // LIMIT ne marche pas en MS SQL SERVER
		try {
			$commande = $pdo->prepare($sql);					
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

	function edtEtu5($nom) {
		require ("Modele/connectBD.php") ; 
		$sql="SELECT c.tDeb, c.tFin, m.label,p.nom, p.prenom, s.nom, g.num_grpe, m.couleur FROM creneau c INNER JOIN matiere m ON c.id_mat = m.id_mat INNER JOIN prof p ON c.id_prof = p.id_prof INNER JOIN salle s ON c.id_salle = s.id_salle INNER JOIN groupe g ON c.id_grpe = g.id_grpe Where g.id_grpe=5";
			   // LIMIT ne marche pas en MS SQL SERVER
		try {
			$commande = $pdo->prepare($sql);					
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

	function edtEtu6($nom) {
		require ("Modele/connectBD.php") ; 
		$sql="SELECT c.tDeb, c.tFin, m.label,p.nom, p.prenom, s.nom, g.num_grpe, m.couleur FROM creneau c INNER JOIN matiere m ON c.id_mat = m.id_mat INNER JOIN prof p ON c.id_prof = p.id_prof INNER JOIN salle s ON c.id_salle = s.id_salle INNER JOIN groupe g ON c.id_grpe = g.id_grpe Where g.id_grpe=6";
			   // LIMIT ne marche pas en MS SQL SERVER
		try {
			$commande = $pdo->prepare($sql);					
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

	function edtEtu7($nom) {
		require ("Modele/connectBD.php") ; 
		$sql="SELECT c.tDeb, c.tFin, m.label,p.nom, p.prenom, s.nom, g.num_grpe, m.couleur FROM creneau c INNER JOIN matiere m ON c.id_mat = m.id_mat INNER JOIN prof p ON c.id_prof = p.id_prof INNER JOIN salle s ON c.id_salle = s.id_salle INNER JOIN groupe g ON c.id_grpe = g.id_grpe Where g.id_grpe=7";
			   // LIMIT ne marche pas en MS SQL SERVER
		try {
			$commande = $pdo->prepare($sql);					
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

	function edtEtu8($nom) {
		require ("Modele/connectBD.php") ; 
		$sql="SELECT c.tDeb, c.tFin, m.label,p.nom, p.prenom, s.nom, g.num_grpe, m.couleur FROM creneau c INNER JOIN matiere m ON c.id_mat = m.id_mat INNER JOIN prof p ON c.id_prof = p.id_prof INNER JOIN salle s ON c.id_salle = s.id_salle INNER JOIN groupe g ON c.id_grpe = g.id_grpe Where g.id_grpe=8";
			   // LIMIT ne marche pas en MS SQL SERVER
		try {
			$commande = $pdo->prepare($sql);					
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

	function edtEtu9($nom) {
		require ("Modele/connectBD.php") ; 
		$sql="SELECT c.tDeb, c.tFin, m.label,p.nom, p.prenom, s.nom, g.num_grpe, m.couleur FROM creneau c INNER JOIN matiere m ON c.id_mat = m.id_mat INNER JOIN prof p ON c.id_prof = p.id_prof INNER JOIN salle s ON c.id_salle = s.id_salle INNER JOIN groupe g ON c.id_grpe = g.id_grpe Where g.id_grpe=9";
			   // LIMIT ne marche pas en MS SQL SERVER
		try {
			$commande = $pdo->prepare($sql);					
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

	function edtEtu10($nom) {
		require ("Modele/connectBD.php") ; 
		$sql="SELECT c.tDeb, c.tFin, m.label,p.nom, p.prenom, s.nom, g.num_grpe, m.couleur FROM creneau c INNER JOIN matiere m ON c.id_mat = m.id_mat INNER JOIN prof p ON c.id_prof = p.id_prof INNER JOIN salle s ON c.id_salle = s.id_salle INNER JOIN groupe g ON c.id_grpe = g.id_grpe Where g.id_grpe=10";
			   // LIMIT ne marche pas en MS SQL SERVER
		try {
			$commande = $pdo->prepare($sql);					
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

	function edtEtu12($nom) {
		require ("Modele/connectBD.php") ; 
		$sql="SELECT c.tDeb, c.tFin, m.label,p.nom, p.prenom, s.nom, g.num_grpe, m.couleur FROM creneau c INNER JOIN matiere m ON c.id_mat = m.id_mat INNER JOIN prof p ON c.id_prof = p.id_prof INNER JOIN salle s ON c.id_salle = s.id_salle INNER JOIN groupe g ON c.id_grpe = g.id_grpe Where g.id_grpe=12";
			   // LIMIT ne marche pas en MS SQL SERVER
		try {
			$commande = $pdo->prepare($sql);					
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

	function edtEtu13($nom) {
		require ("Modele/connectBD.php") ; 
		$sql="SELECT c.tDeb, c.tFin, m.label,p.nom, p.prenom, s.nom, g.num_grpe, m.couleur FROM creneau c INNER JOIN matiere m ON c.id_mat = m.id_mat INNER JOIN prof p ON c.id_prof = p.id_prof INNER JOIN salle s ON c.id_salle = s.id_salle INNER JOIN groupe g ON c.id_grpe = g.id_grpe Where g.id_grpe=13";
			   // LIMIT ne marche pas en MS SQL SERVER
		try {
			$commande = $pdo->prepare($sql);					
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

	function edtEtu14($nom) {
		require ("Modele/connectBD.php") ; 
		$sql="SELECT c.tDeb, c.tFin, m.label,p.nom, p.prenom, s.nom, g.num_grpe, m.couleur FROM creneau c INNER JOIN matiere m ON c.id_mat = m.id_mat INNER JOIN prof p ON c.id_prof = p.id_prof INNER JOIN salle s ON c.id_salle = s.id_salle INNER JOIN groupe g ON c.id_grpe = g.id_grpe Where g.id_grpe=14";
			   // LIMIT ne marche pas en MS SQL SERVER
		try {
			$commande = $pdo->prepare($sql);					
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

	function edtEtu15($nom) {
		require ("Modele/connectBD.php") ; 
		$sql="SELECT c.tDeb, c.tFin, m.label,p.nom, p.prenom, s.nom, g.num_grpe, m.couleur FROM creneau c INNER JOIN matiere m ON c.id_mat = m.id_mat INNER JOIN prof p ON c.id_prof = p.id_prof INNER JOIN salle s ON c.id_salle = s.id_salle INNER JOIN groupe g ON c.id_grpe = g.id_grpe Where g.id_grpe=15";
			   // LIMIT ne marche pas en MS SQL SERVER
		try {
			$commande = $pdo->prepare($sql);					
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