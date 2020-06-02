<?PHP
include "../config.php"; 
class user{
	private $cin;
	private $nom;
	private $mot_de_passe;
	private $type_compte;
	public $conn;	
	function __construct($cin,$nom,$mot_de_passe,$type_compte,$conn)
	{
		
		$this->cin=$cin;
		$this->nom=$nom;
		$this->mot_de_passe=$mot_de_passe;
		$this->type_compte=$type_compte;
		$c=new Database();
		$this->conn=$c->connexion();
	}

	function getCin()
	{
		return $this->cin;
	}
	function getNom()
	{
		return $this->nom;
	}
	function getMot_de_passe()
	{
		return $this->mot_de_passe;
	}
	function gettype_compte()
	{
		return $this->type_compte;
	}

	function setCin($cin)
	{
		 $this->cin=$cin;
	}
	function setNom($nom)
	{
		 $this->nom=$nom;
	}
	function setmot_de_passe($mot_de_passe)
	{
		 $this->mot_de_passe=$mot_de_passe;
	}
	function setType_compte($type_compte)
	{
		 $this->type_compte=$type_compte;
	}
}
?>