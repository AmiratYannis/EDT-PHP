<?php

function afficherContraintesMat($idMat){ 
	require('modele/connectSQL.php');
	$sql="SELECT m.typeEns FROM matiere m, prof_roles pr WHERE m.id_mat=:idMat AND pr.id_objet=m.id_mat AND pr.label like 'Responsable%'";
	try{ 
		$commande = $pdo->prepare($sql);
		$commande->bindParam(':idMat',$idMat);
		$bool=$commande->execute(); 
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

