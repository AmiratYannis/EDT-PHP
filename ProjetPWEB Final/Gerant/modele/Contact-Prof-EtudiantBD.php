<?php
	function Contact_Prof(){ 
		require("modele/connectBD.php");
		$sql="SELECT p.nom,p.prenom,p.email,c.label FROM prof p inner join prof_roles c ON p.id_prof=c.id_prof";
		try{ 
			$commande=$pdo->prepare($sql);
			$bool=$commande->execute();
			$P=array();
			if($bool){ 
				while($p=$commande->fetch()){ 
					$P[]=$p;
				}
			}
		}
		catch(PDOException $e){ 
			echo utf8_encode("Echec de select : " . $e->getMessage() . "\n");
			die(); // On arrête tout.
		}
		return $P;
	
	}
	
		function contacts11() {
		require ("Modele/connectBD.php") ; 
		$sql="SELECT e.nom, e.prenom, e.id_grpe, e.email
				FROM etudiant e
				INNER JOIN etu_grps c
				ON c.id_grpe = e.id_grpe
				WHERE e.id_grpe =11 
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


	function contacts1() {
	require ("Modele/connectBD.php") ; 
	$sql="SELECT e.nom, e.prenom, e.id_grpe, e.email
				FROM etudiant e
				INNER JOIN etu_grps c
				ON c.id_grpe = e.id_grpe
				WHERE e.id_grpe =1 
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

	function contacts2() {
		require ("Modele/connectBD.php") ; 
		$sql="SELECT e.nom, e.prenom, e.id_grpe, e.email
				FROM etudiant e
				INNER JOIN etu_grps c
				ON c.id_grpe = e.id_grpe
				WHERE e.id_grpe =2 
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

	function contacts3() {
		require ("Modele/connectBD.php") ;  
		$sql="SELECT e.nom, e.prenom, e.id_grpe, e.email
				FROM etudiant e
				INNER JOIN etu_grps c
				ON c.id_grpe = e.id_grpe
				WHERE e.id_grpe =3 
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

	function contacts4() {
		require ("Modele/connectBD.php") ; 
		$sql="SELECT e.nom, e.prenom, e.id_grpe, e.email
				FROM etudiant e
				INNER JOIN etu_grps c
				ON c.id_grpe = e.id_grpe
				WHERE e.id_grpe =4 
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

	function contacts5() {
		require ("Modele/connectBD.php") ;  
		$sql="SELECT e.nom, e.prenom, e.id_grpe, e.email
				FROM etudiant e
				INNER JOIN etu_grps c
				ON c.id_grpe = e.id_grpe
				WHERE e.id_grpe =5 
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

	function contacts6() {
		require ("Modele/connectBD.php") ;  
		$sql="SELECT e.nom, e.prenom, e.id_grpe, e.email
				FROM etudiant e
				INNER JOIN etu_grps c
				ON c.id_grpe = e.id_grpe
				WHERE e.id_grpe =6 
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

	function contacts7() {
		require ("Modele/connectBD.php") ;  
		$sql="SELECT e.nom, e.prenom, e.id_grpe, e.email
				FROM etudiant e
				INNER JOIN etu_grps c
				ON c.id_grpe = e.id_grpe
				WHERE e.id_grpe =7 
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

	function contacts8() {
		require ("Modele/connectBD.php") ; 
		$sql="SELECT e.nom, e.prenom, e.id_grpe, e.email
				FROM etudiant e
				INNER JOIN etu_grps c
				ON c.id_grpe = e.id_grpe
				WHERE e.id_grpe =8 
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

	function contacts9() {
		require ("Modele/connectBD.php") ;  
		$sql="SELECT e.nom, e.prenom, e.id_grpe, e.email
				FROM etudiant e
				INNER JOIN etu_grps c
				ON c.id_grpe = e.id_grpe
				WHERE e.id_grpe =9 
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

	function contacts10() {
		require ("Modele/connectBD.php") ; 
		$sql="SELECT e.nom, e.prenom, e.id_grpe, e.email
				FROM etudiant e
				INNER JOIN etu_grps c
				ON c.id_grpe = e.id_grpe
				WHERE e.id_grpe =10 
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

	function contacts12() {
		require ("Modele/connectBD.php") ; 
		$sql="SELECT e.nom, e.prenom, e.id_grpe, e.email
				FROM etudiant e
				INNER JOIN etu_grps c
				ON c.id_grpe = e.id_grpe
				WHERE e.id_grpe =12 
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

	function contacts13() {
		require ("Modele/connectBD.php") ; 
		$sql="SELECT e.nom,e.prenom,e.email,g.num_grpe FROM etudiant e,groupe g WHERE e.id_grpe=g.id_grpe ";
		try{ 
			$commande=$pdo->prepare($sql);
			$bool=$commande->execute();
			$C=array();
			if($bool){ 
				while($c=$commande->fetch()){
					$C[]=$c;
				}
			}
		}
		catch(PDOException $e){ 
			echo utf8_encode("Echec de select : " . $e->getMessage() . "\n");
			die(); // On arrête tout.
		}
		return $C;
	}
	
		function contacts14() {
		require ("Modele/connectBD.php") ; 
		$sql="SELECT e.nom, e.prenom, e.id_grpe, e.email
				FROM etudiant e
				INNER JOIN etu_grps c
				ON c.id_grpe = e.id_grpe
				WHERE e.id_grpe =14 
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
	

	function contacts15() {
		require ("Modele/connectBD.php") ; 
		$sql="SELECT e.nom, e.prenom, e.id_grpe, e.email
				FROM etudiant e
				INNER JOIN etu_grps c
				ON c.id_grpe = e.id_grpe
				WHERE e.id_grpe =15 
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