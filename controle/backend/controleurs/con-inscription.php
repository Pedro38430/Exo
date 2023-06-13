<?php 
$objUtilisateur = new Utilisateur();
	if(isset($_POST["nom"])){
		$objUtilisateur->setNom($_POST["nom"]);
	}
	if(isset($_POST["prenom"])){
	$objUtilisateur->setPrenom($_POST["prenom"]);
	}
	if(isset($_POST["email"])){
	$objUtilisateur->setEmail($_POST["email"]);
	}
	
	if(isset($_POST["password"]) && isset($_POST["mdp-repeat"]) && ($_POST["password"] == $_POST["mdp-repeat"])){
		$objUtilisateur->setMdp($_POST["password"]);
		
	}
	if(isset($_POST["phone"])){
	$objUtilisateur->setPhone($_POST["phone"]);
	}
	
	if(isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["email"]) && isset($_POST["mdp-repeat"]) && isset($_POST["phone"])){
		$objUtilisateur->inserer();
		
	}
	
?>