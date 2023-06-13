<?php 
  // Fonction pour démarrer la session
  include_once('backend/controleurs/define.php');
 include_once('backend/Database.php');
 include_once('backend/objets/utilisateurs.php');
  session_start(); 
     
  // Vérifier que le nom de session existe ou non
  if( isset($_SESSION['utilisateur']) ) { 
    echo 'La session est définie.' ; 
  } 
  else { 
    echo 'Les variables de session ont été supprimées'; 
  } 
    
  echo $_SESSION['utilisateur']; 
  
    
  // Détruire la session.
  session_destroy(); 
   if(!isset($_SESSION['id'])){ 
    header('Location: index.php'); 
   exit; }
?>