<?PHP
class service{
	private $id_service;
	private $nom_service;
	private $idca;
	private $prix_service;
	private $description_service;
	private $img;
	function __construct($nom_service,$idca,$prix_service,$description_service,$img)
	{
		
		$this->nom_service=$nom_service;
		$this->idca=$idca;
		$this->prix_service=$prix_service;
		$this->description_service=$description_service;
		$this->img=$img;
	}

	function getId_service()
	{
		return $this->id_service;
	}
	function getNom_service()
	{
		return $this->nom_service;
	}
	function getIdca()
	{
		return $this->idca;
	}
	function getPrix_service()
	{
		return $this->prix_service;
	}
	function getDescription_service()
	{
		return $this->description_service;
	}
	function getImg()
	{
		return $this->img;
	}
	function setId_service($id_service)
	{
		 $this->id_service=$id_service;
	}
	function setNom_service($nom_service)
	{
		 $this->nom_service=$nom_service;
	}
	function setIdca($idca)
	{
		 $this->idca=$idca;
	}
	function setprix_service($prix_service)
	{
		 $this->prix_service=$prix_service;
	}
	function setdescription_service($description_service)
	{
		 $this->description_service=$description_service;
	}
	function setimg($img)
	{
		 $this->img=$img;
	}
}
?>