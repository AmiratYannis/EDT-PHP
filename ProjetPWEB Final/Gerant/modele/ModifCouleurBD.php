<?php

	
function modifCouleurProf($couleur,$nom){ 
	require('modele/connectBD.php');
	$sql="UPDATE matiere set couleur=:couleur WHERE label=:nom";
	try{ 
			$commande = $pdo->prepare($sql);
			$commande->bindParam(':couleur',$couleur);
			$commande->bindParam(':nom',$nom);
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