<?php 
	
	function specifierNouvelleContrainte($bPositive,$idMat,$idProf,$idSalle,$type_cont,$val_cont){
		require('modele/connectSQL.php');
		$sql="INSERT INTO contrainte(bPositive,id_mat,id_prof,id_salle,type_cont,valeur) VALUES(:bPositive,:idMat,:idProf,:idSalle,:type_cont,:val_cont)";
		
		try{ 
			$commande = $pdo->prepare($sql);
			$commande->bindParam(':bPositive',$bPositive);
			$commande->bindParam(':idMat', $idMat[0]);
			$commande->bindParam(':idProf',$idProf);
			$commande->bindParam(':idSalle', $idSalle);
			$commande->bindParam(':type_cont', $type_cont);
			$commande->bindParam(':val_cont', $val_cont);
			$bool=$commande->execute(); 
			if($bool){
				echo "insertion réussie!";
			}
			
		}
		catch(PDOException $e){ 
			echo utf8_encode("Erreur d'insertion:" .$e->getMessage() . "\n");
			die();
		}
	}
	
	
	
?>