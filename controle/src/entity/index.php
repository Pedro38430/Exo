<?php
use App\Repository\ProductRepository;
include_once('backend/controleurs/define.php');
include_once('backend/Database.php');
include_once('backend/objets/utilisateurs.php');
 session_start();
include_once('backend/controleurs/con-login.php');

require 'vendor/autoload.php';


$repository = new ProductRepository();

$products = $repository->findAll();


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
    <title>Evenement Voironnais - Acceuil</title>
</head>
<body>
  <?php include_once('header.php')?>
  <div class="container-fluid">
        <h1>Liste des évenements</h1>
        <div class="row g-3">
            <?php foreach ($products as $item) { ?>
                <div class="col-md-4">
                    <div class="card">

                        <div class="card-body">
                        <img src="<?= $item->getImage() ?>" alt="Image de l'item">
                            <h3 class="card-title">
                                <?= $item->getTitle() ?>
                            </h3>
                            <p class="card-text">
                                <!-- le htmlspecialchars sert à échaper tous les caractères HTML (et donc Javascript) pour éviter que le navigateur exécute du code qui aurait été rentré dans le formulaire -->
                                <?= htmlspecialchars($item->getDescription()) ?>
                            </p>
                            <p class="card-text text-end">
                                <?= $item->getPrix() ?>€
                            </p>
                            <a href="single-product.php?id=<?= $item->getId() ?>" class="card-link">Details</a>
                        </div>
                    </div>
                </div>

                <?php

            }

            ?>
        </div>
    </div>
      <?php include_once('footer.php')?>
</body>
</html>