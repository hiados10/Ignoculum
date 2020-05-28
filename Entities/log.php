<?PHP
include "../config.php"; 
class user{
	private $iduser;
	private $login;
	private $pwd;
	private $role;
	public $conn;	
	function __construct($iduser,$login,$pwd,$role,$conn)
	{
		
		$this->iduser=$iduser;
		$this->login=$login;
		$this->pwd=$pwd;
		$this->role=$role;
		$c=new Database();
		$this->conn=$c->connexion();
	}

	function getIduser()
	{
		return $this->iduser;
	}
	function getLogin()
	{
		return $this->login;
	}
	function getPwd()
	{
		return $this->pwd;
	}
	function getRole()
	{
		return $this->role;
	}

	function setIduser($iduser)
	{
		 $this->iduser=$iduser;
	}
	function setLogin($login)
	{
		 $this->login=$login;
	}
	function setpwd($pwd)
	{
		 $this->pwd=$pwd;
	}
	function setRole($role)
	{
		 $this->role=$role;
	}
}
?>