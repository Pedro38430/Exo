<?php
 include_once('backend/controleurs/define.php');
 include_once('backend/Database.php');
 include_once('backend/objets/utilisateurs.php');
 include_once('backend/controleurs/con-inscription.php');
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evenement Voironnais - Page d'inscription</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" >
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
		
<link href="css/styles.css" rel="stylesheet">
</head>
<body>
 <?php include_once('header.php')?>
<form action="inscription.php" method="post">
        <div class="container">
          <h1>Inscription</h1>
          <p>Remplissez les champs pour créer un compte.</p>
          <hr>
          <label for="name"><b>Nom</b></label>
          <input type="text" id="text" placeholder="Entrez votre Nom " name="nom" required>
        
        <label for="name"><b>Prenom</b></label>
          <input type="text" id="text" placeholder="Entrez votre Prenom " name="prenom" required>
        
          <label for="email"><b>Email</b></label>
          <input type="text" id="text" placeholder="Entrez l'Email" name="email" required>
      
          <label for="psw"><b>Mot de Passe</b></label>
          <input type="password" id="password" placeholder="Entrez le Mot de Passe" name="password" required>
      
          <label for="psw-repeat"><b>Entrez le mot de passe à nouveau</b></label>
          <input type="password" id="mdp-repeat" placeholder="Entrez le mot de passe à nouveau" name="mdp-repeat" required>
        
        <label for="phone"><b>Téléphone</b></label>
        <input  type="text" id="phone" placeholder="Numéro de Téléphone" name="phone" required> 
          
          <p>En créant un compte tu acceptes nos <a href="#" style="color:dodgerblue">Conditions et confidentialité</a>.</p>
      
          <div class="clearfix">
         
            <button id="submit" class="signupbtn" style="margin-bottom: 50px;margin-top : 50px">Inscription</button>
        
          </div>
        </div>
      </form>
</body>
	 <!-- inclusion du bas de page du site -->
    <?php include_once('footer.php'); ?>
</html>
