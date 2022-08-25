<?php
	/*Fonctions-modèle réalisant les requètes de gestion des utilisateurs en base de données*/
	
	// verif_bd : fonction booléenne. 
	// Si vraie, alors le profil de l'utilisateur est affecté en sortie à $profil
	
	
	function modifprofil($nom,$prenom,$id_etu,$email,$login_etu,$pass_etu,&$profil) {
		require('modele/connectBD.php'); //$pdo est défini dans ce fichier
		/**$sql="UPDATE etudiant
			  SET nom =:nom
			  WHERE id_etu =:id_etu LIMIT 1" ;
			$commande = $pdo->prepare($sql);
			$commande->bindParam(':nom', $nom);
			$commande->bindParam(':id_etu', $id_etu);
			$commande->execute();*/
			$sql="UPDATE etudiant 
					SET nom =:nom, prenom =:prenom, email =:email,login_etu =:login_etu, pass_etu =:pass_etu
					WHERE id_etu =:id_etu" ;
			$commande = $pdo->prepare($sql);
			$commande->bindParam(':nom', $nom);
			$commande->bindParam(':prenom', $prenom);
			$commande->bindParam(':id_etu', $id_etu);
			$commande->bindParam(':email', $email);
			$commande->bindParam(':login_etu', $login_etu);
			$commande->bindParam(':pass_etu', $pass_etu);
			$commande->execute();
			//$resultat = $commande->fetchAll(PDO::FETCH_ASSOC);
	}
?>