<?php
 
class Utilisateur
{
    private int $id=0;
    private string $nom;
	private string $prenom;
	private string $mdp="";
	private string $email="";
	private string $phone;
 
    public function setId(int $id): void
    {
		 $this->id = htmlspecialchars($id, ENT_QUOTES, 'UTF-8');
    }
 
    public function setNom(string $nom): void
    {
        $this->nom = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');
    }
	
	public function setPrenom(string $prenom): void
    {
        $this->prenom = htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8');
    }
 
	public function setMdp(string $mdp): void
    {
        $this->mdp = htmlspecialchars($mdp, ENT_QUOTES, 'UTF-8');
    }
	
	public function setEmail(string $email): void
    {
        $this->email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    }
	
	public function setPhone(string $phone): void
    {
        $this->phone = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
    }

	public function getId (): string
	{
		    return htmlspecialchars($this->id, ENT_QUOTES, 'UTF-8');
	}
	    public function getNom(): string
	{
		    return htmlspecialchars($this->nom, ENT_QUOTES, 'UTF-8');
	}
		public function getPrenom(): string
	{
		    return htmlspecialchars($this->prenom, ENT_QUOTES, 'UTF-8');
	}
		public function getMdp(): string
	{
		    return htmlspecialchars($this->mdp, ENT_QUOTES, 'UTF-8');
	}
		public function getEmail(): string
	{	
		    return htmlspecialchars($this->email, ENT_QUOTES, 'UTF-8');
	}
		public function getPhone(): string	
	{		
		    return htmlspecialchars($this->phone, ENT_QUOTES, 'UTF-8');
	}	
	
	/* Cette fonction permet d'inscrire un utilisateur 
		
	*/
	public function inserer(): void
	{
		
		// Inscription avec BDD

		$database = new Database();
        
        $requete = $database->getInstance()->prepare("INSERT INTO utilisateur (nom, prenom, mdp, email, phone) VALUES(:nom, :prenom, :mdp, :email, :phone);");   
        
        $requete->bindParam(':nom', $this->nom, PDO::PARAM_STR,100);
		$requete->bindParam(':prenom', $this->prenom, PDO::PARAM_STR,100);
		$requete->bindParam(':email', $this->email, PDO::PARAM_STR,100);
		$requete->bindParam(':mdp', $this->mdp, PDO::PARAM_STR,128);
		$requete->bindParam(':phone', $this->phone, PDO::PARAM_STR,12);

        $requete->execute();
        $requete->closeCursor();
        $database->fermerInstance();

	}
	public function connexion(): bool
	{
		
        $database = new Database();
        $database->getInstance()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
    
        $sql="SELECT * FROM utilisateur WHERE email=:email AND mdp=:mdp";
        $requete = $database->getInstance()->prepare($sql);
		$requete->bindParam(':email', $this->email, PDO::PARAM_STR,100);
        $requete->bindParam(':mdp', $this->mdp, PDO::PARAM_STR,128);
        $requete->execute();
		//$requete->debugDumpParams();
        $connexion=false;
        if ($row = $requete->fetch()){
			$this->setId($row["id"]);
            $this->setMdp($row["mdp"]);
            $this->setEmail($row["email"]);
            $this->setNom($row["nom"]);
            $this->setPrenom($row["prenom"]); 
			$this->setPhone($row["phone"]);
			 $connexion=true;
        }
        $requete->closeCursor();
        $database->fermerInstance();
		return $connexion;
    }
}

?>