<?php
  // Démarrer la session

 include_once('backend/controleurs/define.php');
 include_once('backend/Database.php');
 include_once('backend/objets/utilisateurs.php');
 session_start();
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="css/styles.css" rel="stylesheet">
    <title>Evenement Voironnais - Acceuil</title>
</head>
<body>
<?php

include_once('header.php');
// Stocker des données de session
  if (isset($_SESSION["utilisateur"])){
	  $objUtilisateur = unserialize($_SESSION["utilisateur"]);
	  echo "Bonjour ".$objUtilisateur->getNom();
  }
  else {
	  echo "<h1>vous etes pas connecter</h1>";
  }

//*if (is_null($this->entnom)) 
  //	echo "Email est null";
  //	} else {
  //	echo "Email est pas";*//


?>

</body>
</html>