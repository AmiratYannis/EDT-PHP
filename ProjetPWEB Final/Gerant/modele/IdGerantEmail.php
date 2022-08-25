<?php


	
	function idGerantEmail($email){ 
		require('modele/connectBD.php');
		$sql="SELECT id_prof FROM prof WHERE email=:email";
		try {
			$commande = $pdo->prepare($sql);
			$commande->bindParam(':email', $email);
			$bool=$commande->execute(); 
			if($bool){
				$idProf=$commande->fetch();
			}
		}
		catch(PDOException $e){ 
			echo utf8_encode("Erreur de select:" .$e->getMessage() . "\n");
			die();
		}
		return $idProf;
		
	}