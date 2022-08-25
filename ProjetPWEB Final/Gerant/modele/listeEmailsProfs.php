<?php

 function listeEmailsProfs(){ 
	require('modele/connectBD.php');
	$sql="SELECT email FROM prof";
	try {
			
			$commande = $pdo->prepare($sql);
			$bool=$commande->execute(); 
			if($bool){
				while($e=$commande->fetch()){
					$emails[]=$e;
				}
			}
			
		}
		catch(PDOException $e){ 
			echo utf8_encode("Erreur de select:" .$e->getMessage() . "\n");
			die();
		}
		return $emails;
		
	}
