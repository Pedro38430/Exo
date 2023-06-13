<?php
// Classe qui permet de se connecter et de se déconnecter de la base de données.
// Elle permet également de donner l'instance à une autre classe
class Database {
  private $instance = null;
 
  // Constructeur, qui contient les informations de connexion à la base de données
  public function __construct() {
    $this->instance = new PDO('mysql:host='.SERVEUR_BDD.';dbname='.NOM_BDD.';charset=utf8', UTILISATEUR_BDD, MDP_BDD);
	//$this->instance = new PDO('mysql:host=.mysql.db;dbname=;charset=utf8', '', '');
  }
 
  // On donne l'instance
  public function getInstance() {
    return $this->instance;
  }
  
  // On ferme l'instance
  public function fermerInstance() {
    $this->instance = null;
  }
}


?>