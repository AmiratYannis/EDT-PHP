<?php
function modifLabelMatiere($idMat,$LabelM){ 
	require('modele/connectSQL.php');
	$sql="UPDATE matiere m,prof_roles pr set m.label=:LabelM 
	WHERE m.id_mat=:idMat and pr.id_objet=m.id_mat and pr.label like 'Responsable%'";
	try { 
		$commande = $pdo->prepare($sql);
		$commande->bindParam(':idMat',$idMat);
		$commande->bindParam(':LabelM',$LabelM);
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