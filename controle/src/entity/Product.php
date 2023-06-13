<?php

namespace App\Entity;

/**
 * Une entité (ou entity) est une classe dont l'objectif est de représentant sous forme d'objet
 * une table de notre base de données. On se servira de cette classe pour faire transiter les données entre
 * les différentes couches de l'application
 */
class Product
{
    private ?string $title;
    private ?string $adresse;
    private string $year;
    private int $prix;
    private string $description;
    private ?int $id;
    private int $idUtilisateurs;
    private string $image;
    /**
     * Ici le constructeur a un argument optionnel, l'id, car avant d'avoir persisté, l'instance n'a pas
     * encore d'id, il faut donc pouvoir créer une instance de produit sans id
     */
    public function __construct(?string $title, ?string $adresse,  string $year, float $prix, string $description, ?int $id = null, int $idUtilisateurs, string $image)
    {
        $this->title = $title;
        $this->adresse = $adresse;
        $this->year = $year;
        $this->prix = $prix;
        $this->description = $description;
        $this->id = $id;
        $this->idUtilisateurs = $idUtilisateurs;
        $this->image = $image;
    }


    /**
     * @return 
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param  $title 
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }
  /**
     * @return 
     */
    public function getAdresse(): string
    {
        return $this->adresse;
    }

    /**
     * @param $adresse
     * @return self
     */
    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;
        return $this;
    }
    /**
     * @return 
     */
    public function getYear(): string
    {
        return $this->year;
    }

    /**
     * @param  $year 
     * @return self
     */
    public function setYear(string $year): self
    {
        $this->year = $year;
        return $this;
    }


 /**
     * @return 
     */
    public function getPrix(): int
    {
        return $this->prix;
    }

    /**
     * @param $prix
     * @return self
     */
    public function setPrix(int $prix): self
    {
        $this->prix = $prix;
        return $this;
    }
   /**
     * @return 
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param $description
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }


      /**
     * @return 
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param  $id 
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }
     /**
     * @return 
     */
    public function getidUtilisateurs(): int
    {
        return $this->idUtilisateurs;
    }

    /**
     * @param $idUtilisateurs
     * @return self
     */
    public function setidUtilisateurs(int $idUtilisateurs): self
    {
        $this->idUtilisateurs = $idUtilisateurs;
        return $this;
    }

    /**
 * @return string|null
 */
public function getImage(): ?string
{
    return $this->image;
}

/**
 * @param string|null $image
 * @return self
 */
public function setImage(?string $image): self
{
    $this->image = $image;
    return $this;
}
}