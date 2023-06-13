<?php 
$objUtilisateur = new Utilisateur();
	if(isset($_POST["email"])){
	$objUtilisateur->setEmail($_POST["email"]);
	}
	
	if(isset($_POST["password"])){
		$objUtilisateur->setMdp($_POST["password"]);
		
	}
	
	
	if ($objUtilisateur->connexion()){
	
		$_SESSION["utilisateur"] = serialize($objUtilisateur);

		
	}
?>