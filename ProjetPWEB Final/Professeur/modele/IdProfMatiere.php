<?php

function idMatProf($idProf){ 
		require('modele/connectSQL.php');
		$sql="SELECT m.id_mat FROM prof p ,prof_roles pr , matiere m WHERE p.id_prof=pr.id_prof AND m.id_mat=pr.id_objet AND pr.id_prof=:idProf";
		try {
			
			$commande = $pdo->prepare($sql);
			$commande->bindParam(':idProf', $idProf);
			$bool=$commande->execute(); 
			if($bool){
				$idMat=$commande->fetch();
			}
			
		}
		catch(PDOException $e){ 
			echo utf8_encode("Erreur de select:" .$e->getMessage() . "\n");
			die();
		}
		return $idMat;
		
	}
	
	function idProfEmail($email){ 
		require('modele/connectSQL.php');
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