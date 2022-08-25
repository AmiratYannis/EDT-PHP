<?php

function envoyerNouvMessage($objet,$idSrc,$idDest,$contenu){ 
	require('modele/connectBD.php');
	$sql="INSERT INTO message(objetMsg,id_src,id_dest,contenu) VALUES(:objet,:idSrc,:idDest,:contenu)";
	try{ 
		$commande=$pdo->prepare($sql);
			$commande->bindParam(':objet',$objet);
			$commande->bindParam(':idSrc', $idSrc);
			$commande->bindParam(':idDest',$idDest[0]);
			$commande->bindParam(':contenu', $contenu);	
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

function recevoirMessages($idProf){ 
	require('modele/connectBD.php');
	$sql="SELECT p.email,m.objetMsg,m.contenu FROM message m inner join prof p WHERE m.id_src=p.id_prof AND m.id_dest=:idProf";
	try{ 
		$commande=$pdo->prepare($sql);
			$commande->bindParam(':idProf',$idProf);
			$bool=$commande->execute();
			$Msg=array();
			if($bool){
				while($m=$commande->fetch()){
					$Msg[]=$m;
				}
			}
	}
		catch(PDOException $e){ 
			echo utf8_encode("Echec de select : " . $e->getMessage() . "\n");
			die(); // On arrête tout.
		}
		return $Msg;
}
