<?php
include_once('backend/controleurs/define.php');
include_once('backend/Database.php');
include_once('backend/objets/utilisateurs.php');
 session_start();
include_once('backend/controleurs/con-login.php');

use App\Entity\Product;
use App\Repository\ProductRepository;

require 'vendor/autoload.php';


$repository = new ProductRepository();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="css/styles.css" rel="stylesheet">

</head>
<?php include_once('header.php') ?>
<body>
    <div class="container-fluid">
        <h1>Ajouter un Évenement</h1>
        <form action="add-product.php" method="post">
            <label for="title">Titre de l'Évenement :</label>
            <input type="text" name="title" id="title" class="input" required>

            <label for="prix">Prix :</label>
            <input type="number" step=".01" name="prix" id="prix" class="input">

            <label for="adresse">Adresse :</label>
            <input type="text" step=".01" name="adresse" id="adresse" class="input" required>
           
            <label for="date">Date :</label>
            <input type="datetime" step=".01" name="date" id="year" class="input" required>

            <label for="description">Description :</label>
            <textarea name="description" id="description" class="form-control" required></textarea>
            
            <label for="image">Image:</label>
            <input type="file" name="image">
          
            <button class="btn btn-primary">Add</button>
        </form>

        <?php
        if (!empty($_POST['title']) && !empty($_POST['prix']) && !empty($_POST['description']) && !empty($_POST['adresse']) && !empty($_POST['date']) && !empty($_FILES['image'])) {
            $file = $_FILES['image']['tmp_name'];
            $image = addslashes(file_get_contents($file));
            if (is_null($this->prix)) 
		echo "oui";
	} else {
	echo "";
            $product = new Product($_POST['title'], $_POST['prix'], $_POST['description'], $_POST['adresse'], $_POST['date'], $_POST['id'], $_POST['idUtilisateurs'], $image);
            $repository->persist($product);
            echo "<p class=\"text-success\">You successfully added a product with id {$product->getId()}</p>";
        }
        ?>
    </div>
</body>
        
    </div>
</body>

</html>