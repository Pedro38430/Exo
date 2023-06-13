<?php

use App\Entity\Product;

class ProductRepository {
    private $list;

    public function __construct() {
        $this->list = array();
    
    }

    /**
     * @return Product[]
     */
    public function findAll():array {
       $list = [];
       $connection = new PDO("mysql:host=localhost;dbname=controle", "root");

         $query = $connection->prepare("SELECT `title`,`adresse`,`year`, `prix`, `description`, `idUtilisateurs`,`image` FROM `evenements` WHERE 1");

         $query-> execute();

         foreach($query->fetchAll()as $line){
            $list[] = new Product ($line["title"],$line["adresse"], $line["year"], $line["prix"], $line["description"], $line["id"], $line["idUtilisateurs"],'data:image/jpeg;base64'.base64_encode($line["image"]));
    }
    return $this->list;
}
}
//connexion title,adresse,year,prix,description,idUtilisateurs


echo $line ['price'];
echo $line ['description'];
echo $line ['adresse'];





?>