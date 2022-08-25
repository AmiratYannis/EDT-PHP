<?php

function modifCouleurProf($couleur,$idProf){ 
	require('modele/connectSQL.php');
	$sql="UPDATE prof set couleur=:couleur WHERE id_prof=:id_Prof";
	try{ 
			$commande = $pdo->prepare($sql);
			$commande->bindParam(':couleur',$couleur);
			$commande->bindParam(':id_Prof',$idProf);
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