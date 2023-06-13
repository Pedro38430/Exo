<?php

include_once('backend/controleurs/define.php');
include_once('backend/Database.php');
include_once('backend/objets/utilisateurs.php');
 session_start();
include_once('backend/controleurs/con-login.php');





/**
 * Le mélange HTML/PHP c'est un truc un peu vieux et pas top qui ne se fait plus trop à part dans du wordpress.
 * Maintenant on utilise plutôt soit des moteurs de template comme Twig, soit des frameworks front comme Angular/React/Vue.js
 */
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
    <title>Evenement Voironnais - A Propos</title>
</head>
<body>
  <?php include_once('header.php')?>
  <div class="container">
  <div class="row">
    <div class="col-md-6">
      <img src="images/photo-de-groupe.jpg" alt="Image des dev" class="img-fluid">
    </div>
    <div class="col-md-6">
      <h1>Bienvenue sur notre site d'événements sensationnels !</h1>
      <p>Nous sommes fiers de vous présenter  les événements les plus proche de chez vous et les plus époustouflants, conçus pour éveiller vos sens et stimuler votre imagination. Que vous soyez un fervent amateur de divertissement ou simplement à la recherche d'une expérience unique, nous avons ce qu'il vous faut.</p>
      <p>Nos événements sont soigneusement planifiés pour vous offrir des moments mémorables et des souvenirs inoubliables. Du spectacle de feux d'artifice à couper le souffle aux concerts en plein air mettant en vedette des artistes de renommée mondiale, en passant par les soirées thématiques extravagantes, chaque détail est pris en compte pour vous garantir une expérience hors du commun.</p>
      <p>Nous avons également une gamme d'événements pour les passionnés de la gastronomie. Des dégustations de vins exquis aux soirées gastronomiques mettant en avant les meilleurs chefs de la région, notre équipe d'experts culinaires est prête à vous emmener dans un voyage gustatif inégalé.</p>
      <p>Pour les amateurs de sport et d'aventure, nous proposons une série d'événements palpitants. Du saut en parachute au canyoning, en passant par les randonnées en montagne et les courses d'obstacles, préparez-vous à repousser vos limites et à ressentir l'adrénaline qui vous envahit.</p>
      <p>Nous sommes fiers de collaborer avec des partenaires exceptionnels qui partagent notre passion pour l'excellence. Leur expertise et leur dévouement garantissent que chaque événement que nous organisons dépasse vos attentes les plus folles.</p>
      <p>Que vous soyez en quête d'une aventure passionnante, d'une soirée glamour ou d'un moment de détente, notre site d'événements est là pour vous aider à trouver l'événement parfait. Nous nous engageons à vous offrir des expériences uniques et à créer des souvenirs qui dureront toute une vie.</p>
      <p>N'attendez plus, explorez notre site dès maintenant et plongez dans un monde d'événements extraordinaires !</p>
    </div>
  </div>
</div>
      <?php include_once('footer.php')?>
</body>
</html>