<?php
	
	function modif_ProfilProf($email,$login,$mdp,$url,$idProf) {
		require('modele/connectSQL.php');
		$sql="UPDATE prof SET email=:email, login_prof=:login, pass_prof=:mdp,urlPhoto=:url WHERE id_prof=:idProf";
		
		try {
			
			$commande = $pdo->prepare($sql);
			$commande->bindParam(':email',$email);
			$commande->bindParam(':login', $login);
			$commande->bindParam(':mdp', $mdp);
			$commande->bindParam(':url',$url);
			$commande->bindParam(':idProf', $idProf);
			$bool=$commande->execute(); 
			if($bool){
				echo "modification réussie!";
			}
			
		}
		catch(PDOException $e){ 
			echo utf8_encode("Erreur de modification:" .$e->getMessage() . "\n");
			die();
		}
	}
	


?>