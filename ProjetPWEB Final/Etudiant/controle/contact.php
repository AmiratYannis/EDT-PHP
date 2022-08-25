<?php 
	/*controleur contact.php :
		fonctions-action de gestion des contacts
	*/
	
	function liste_contacts() {
		require ("modele/contactBD.php");
		$id_grpe = (isset($_GET['id']))?$_GET['id']:$_SESSION['profil']['id_grpe'];
		$Contact = contacts($id_grpe);
		require ("vue/contact/liste_contacts.tpl");
	}

	function liste_Prof() {
		require ("modele/listeProfBD.php");
		//$idn = (isset($_GET['nom']))?$_GET['prenom']:$_SESSION['profil']['id_prof'];
		$Contact = contacts();
		require ("vue/LP/listeProf.tpl");
	}
	
	function ajout_c() {
		echo ("ajout_c :: ajout d'un contact <br/>");
	}
	
	function maj_c(){
		echo ("maj_c :: mise à jour d'un contact <br/>");
	}
	
	function destr_c () {
		echo ("destr_c :: destruction d'un contact <br/>");
	}
?>
