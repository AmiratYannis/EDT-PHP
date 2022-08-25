<?php

function listegrpe(){
	require('modele/connectSQL.php');
	$sql='SELECT num_grpe FROM groupe WHERE type_grpe!="bi" AND type_grpe!="1/2promo"';
			try{ 
			$commande=$pdo->prepare($sql);
			$bool=$commande->execute();
			$G=array();
			if($bool){ 
				while($e=$commande->fetch()){
					$G[]=$g;
				}
			}
		}
		catch(PDOException $e){ 
			echo utf8_encode("Echec de select : " . $e->getMessage() . "\n");
			die(); // On arrête tout.
		}
		return $G;
}