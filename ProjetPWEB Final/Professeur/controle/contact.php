<?php 
	
	function liste_Etu11() {
		require ("modele/Contact-Prof-Etudiant.php");
		$Contact = contacts11();
		require ("vue/contact/liste_contacts.tpl");
	}

	function liste_Etu1() {
		require ("modele/Contact-Prof-Etudiant.php");
		$Contact = contacts1();
		require ("vue/contact/liste_contacts1.tpl");
	}

	function liste_Etu2() {
		require ("modele/Contact-Prof-Etudiant.php");
		$Contact = contacts2();
		require ("vue/contact/liste_contacts2.tpl");
	}

	function liste_Etu3() {
		require ("modele/Contact-Prof-Etudiant.php");
		$Contact = contacts3();
		require ("vue/contact/liste_contacts3.tpl");
	}

	function liste_Etu4() {
		require ("modele/Contact-Prof-Etudiant.php");
		$Contact = contacts4();
		require ("vue/contact/liste_contacts4.tpl");
	}

	function liste_Etu5() {
		require ("modele/Contact-Prof-Etudiant.php");
		$Contact = contacts5();
		require ("vue/contact/liste_contacts5.tpl");
	}

	function liste_Etu6() {
		require ("modele/Contact-Prof-Etudiant.php");
		$Contact = contacts1();
		require ("vue/contact/liste_contacts6.tpl");
	}

	function liste_Etu7() {
		require ("modele/Contact-Prof-Etudiant.php");
		$Contact = contacts7();
		require ("vue/contact/liste_contacts7.tpl");
	}

	function liste_Etu8() {
		require ("modele/Contact-Prof-Etudiant.php");
		$Contact = contacts8();
		require ("vue/contact/liste_contacts8.tpl");
	}

	function liste_Etu9() {
		require ("modele/Contact-Prof-Etudiant.php");
		$Contact = contacts9();
		require ("vue/contact/liste_contacts9.tpl");
	}

	function liste_Etu10() {
		require ("modele/Contact-Prof-Etudiant.php");
		$Contact = contacts10();
		require ("vue/contact/liste_contacts10.tpl");
	}

	function liste_Etu12() {
		require ("modele/Contact-Prof-Etudiant.php");
		$Contact = contacts12();
		require ("vue/contact/liste_contacts12.tpl");
	}

	function liste_Etu13() {
		require ("modele/Contact-Prof-Etudiant.php");
		$Contact = contacts13();
		require ("vue/contact/liste_contacts13.tpl");
	}
	
	function liste_Etu14() {
		require ("modele/Contact-Prof-Etudiant.php");
		$Contact = contacts14();
		require ("vue/contact/liste_contacts14.tpl");
	}
	function liste_Etu15() {
		require ("modele/Contact-Prof-Etudiant.php");
		$Contact = contacts15();
		require ("vue/contact/liste_contacts15.tpl");
	}


	function liste_professeur() {
		require ("modele/Contact-Prof-Etudiant.php");
		
		$Prof = Contact_Prof();
		require ("vue/contact/liste_professeur.tpl");
	}
?>
