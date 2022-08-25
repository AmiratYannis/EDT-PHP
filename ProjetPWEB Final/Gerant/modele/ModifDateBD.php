<?php

	
function modifDateEDT($tDeb,$nom){ 
	require('modele/connectBD.php');
	$sql="UPDATE creneau c INNER JOIN prof p ON c.id_prof = p.id_prof set c.tDeb=:tDeb WHERE p.nom =:nom ";
	try{ 
			$commande = $pdo->prepare($sql);
			$commande->bindParam(':tDeb',$tDeb);
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