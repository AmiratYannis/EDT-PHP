<?php

function specifierTypeEns(){ 
		$idProf=$_SESSION['profil']['id_prof'];
		require("./modele/IdProfMatiere.php");
		$idMat=idMatProf($idProf);
		require("./vue/professeur/specifierTypeEns.tpl");
		$type=isset($_POST['type'])?trim($_POST['type']):'';
		$typegrpe1=isset($_POST['typegrpe1'])?trim($_POST['typegrpe1']):'';
		$typegrpe2=isset($_POST['typegrpe2'])?trim($_POST['typegrpe2']):'';
		$typegrpe3=isset($_POST['typegrpe3'])?trim($_POST['typegrpe3']):'';
		
		$nbHeures=isset($_POST['nbHeures'])?trim($_POST['nbHeures']):'';
		$nbHeures2=isset($_POST['nbHeures2'])?trim($_POST['nbHeures2']):'';
		$nbHeures3=isset($_POST['nbHeures3'])?trim($_POST['nbHeures3']):'';
		
		if(!empty($type)&&empty($typegrpe3)&&!empty($typegrpe1)&&!empty($typegrpe2)&&!empty($nbHeures)&&preg_match("#^[0-9]*.?[0-9]+$#", $nbHeures)&&!empty($nbHeures2)&&preg_match("#^[0-9]*.?[0-9]+$#", $nbHeures2)&&empty($nbHeures3)&&$type=="AM"&&$typegrpe1=="promo"||$type=="AT"&&$typegrpe1=="promo"||$type=="TM"&&$typegrpe1!="promo"){
			$te=array($type[0]=> array (0 =>$typegrpe1, 1 => $nbHeures), $type[1] =>  array (0 => $typegrpe2, 1 => $nbHeures2));
		$typeEns=json_encode($te);}
		else if(!empty($type)&&!empty($typegrpe1)&&!empty($typegrpe2)&&!empty($typegrpe3)&&!empty($nbHeures)&&preg_match("#^[0-9]*.?[0-9]+$#", $nbHeures)&&!empty($nbHeures2)&&preg_match("#^[0-9]*.?[0-9]+$#", $nbHeures2)&&!empty($nbHeures3)&&preg_match("#^[0-9]*.?[0-9]+$#", $nbHeures3)&&$type=="ATM"&&$typegrpe1=="promo"){ 
			$te=array ($type[0] => array (0 => $typegrpe1, 1 => $nbHeures), $type[1] =>  array (0 => $typegrpe2, 1 => $nbHeures2),$type[2] => array(0=>$typegrpe3, 1=>$nbHeures3));
			$typeEns=json_encode($te); 
		}
		else if(!empty($type)&&!empty($typegrpe1)&&empty($typegrpe2)&&empty($typegrpe3)&&!empty($nbHeures)&&preg_match("#^[0-9]*.?[0-9]+$#", $nbHeures)&&empty($nbHeures2)&&empty($nbHeures3)&&$typegrpe1!="promo"&&$type=="T"||$type=="M"){ 
			$te=array ($type[0] => array (0 => $typegrpe1, 1 => $nbHeures));
			$typeEns=json_encode($te); 
		}
		else { 
			echo "erreur de saisie";
		}
		
		require("./modele/modifTypeEns.php");
		if(!empty($typeEns)){
			modifTypeEns($idMat[0],$typeEns);
		}
		
	}
	
	function specifierLabelMatiere(){ 
		$idProf=$_SESSION['profil']['id_prof'];
		require("./modele/IdProfMatiere.php");
		$idMat=idMatProf($idProf);
		require("./vue/professeur/specifierLabelMatiere.tpl");
		$LabelM=isset($_POST['LabelM'])?trim($_POST['LabelM']):'';
		require("./modele/modifLabelMatiere.php");
		if(!empty($LabelM))
			modifLabelMatiere($idMat[0],$LabelM);
		else 
			echo "Label Matiere est vide!";
	}
	
	
	function AfficherContraintes(){ 
		$idProf=$_SESSION['profil']['id_prof'];
		require("./modele/IdProfMatiere.php");
		$idMat=idMatProf($idProf);
		require("./modele/afficherContraintesMat.php");
		$Cont=afficherContraintesMat($idMat[0]);
		$cont=json_decode($Cont[0]['typeEns']);
		require("./vue/professeur/GererContraintesMatieres.tpl");
	}