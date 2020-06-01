<?PHP
include "dbconfig.php"; 
class user{
	private $login;
	private $pwd;
	private $role;
	public $conn;	
	function __construct($nom,$mot_de_passe,$conn)
	{
		
		$this->nom=$nom;
		$this->mot_de_passe=$mot_de_passe;
		$c=new Database();
		$this->conn=$c->connexion();
	}


	function getNom()
	{
		return $this->nom;
	}
	function getMot_de_passe()
	{
		return $this->mot_de_passe;
	}
	function getType_compte()
	{
		return $this->type_compte;
	}


	public function Logedin($conn,$nom,$mot_de_passe)
	{
		$req="select * from compte where nom='$nom' && mot_de_passe='$mot_de_passe'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}

	}
	
	

	?>