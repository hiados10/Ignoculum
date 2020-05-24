<?PHP
class Categorie{
	private $id_categorie;
	private $nom;
	function __construct($id_categorie,$nom)
	{
		$this->id_categorie=$id_categorie;
		$this->nom=$nom;
	}
	function getid_categorie(){
		return $this->id_categorie;
	}
	function getNom(){
		return $this->nom;
	}

	function setid_categorie($id_categorie){
		 $this->id_categorie=$id_categorie;
	}
		function setNom($nom){
		 $this->nom=$nom;
	}
	

}
?>