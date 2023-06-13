<?php
use App\Repository\ProductRepository;

require 'vendor/autoload.php';


$repository = new ProductRepository();


$product = $repository->findById($_GET["id"]);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details - <?= $product->getTitle() ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>
    <div class="container-fluid">
        
    <img src="<?= $product->getImage() ?>" alt="Image de l'item">
        <h1><?= $product->getTitle() ?></h1>
        <p><?= $product->getDescription() ?></p>
        <p><?= $product->getPrix() ?></p>
        </div>
    </div>
</body>

</html>