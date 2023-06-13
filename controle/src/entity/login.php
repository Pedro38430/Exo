<?php

 include_once('backend/controleurs/define.php');
 include_once('backend/Database.php');
 include_once('backend/objets/utilisateurs.php');
  session_start();
 include_once('backend/controleurs/con-login.php');
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evenement Voironnais - Page de Connexion</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
	<link href="css/styles.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="css/styles.css" rel="stylesheet">
	
</head>
<?php include_once('header.php'); ?>
<body>
    <div class="container">

	<form action="login.php" method="post">
		<div class="mb-3" style="margin-top: 150px;" 80px="">
			<label for="email" ;="" class="form-label" ><b> Email :</b></label>
			<input type="email"  class="input" id="email" name="email">
			<div class="form-text">L'email utilisé lors de la création de compte.</div>
    
		</div>
		<div class="mb-3"style=margin-top: 80px >
			<label for="password" class="form-label"><b>Mot de passe :</b></label>
			<input type="password" id="password" name="password">
		</div>
		<button type="submit" class="btn btn-primary" style="margin-bottom: 10px;">Envoyer</button>
		
		<p><b> Vous n'avez pas de compte ? </b><p>
		
		<a href="inscription.php">
		<p> Inscrivez-vous </p>
		</a>
		
	</form>
    
 </div>


   <?php include_once('footer.php'); ?>
