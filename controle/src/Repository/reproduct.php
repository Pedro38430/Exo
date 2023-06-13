<?php

use App\Entity\Product;



class ProductRepository
{
    private $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function persist(Product $product)
    {
        // Préparer la requête SQL avec des paramètres à insérer
        $query = "INSERT INTO evenements (title, prix, description, adresse, year, idUtilisateurs,image) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $statement = $this->connection->prepare($query);

        // Récupérer les valeurs du produit à insérer
        $title = $product->getTitle();
        $prix = $product->getPrix();
        $description = $product->getDescription();
        $year = $product->getYear();
        $adresse = $product->getAdresse();
        $idUtilisateurs = $product->getidUtilisateurs();
        $image = $product->getImage();

        // Exécuter la requête avec les valeurs du produit
        $statement->execute([ $title, $prix, $description, $year, $adresse, $idUtilisateurs, $image ]);
    }
    public function delete(int $id)
    {
        // Préparer la requête SQL pour supprimer le produit avec l'ID donné
        $query = "DELETE FROM product WHERE id = :id";
        $statement = $this->connection->prepare($query);

        // Lier la valeur de l'ID au paramètre nommé :id
        $statement->bindValue(':id', $id, PDO::PARAM_INT);

        // Exécuter la requête
        $statement->execute();
    }

    // ...
}


?>