<?PHP
include "dbconfig.php"; 
class user{
	private $login;
	private $pwd;
	private $role;
	public $conn;	
	function __construct($login,$pwd,$conn)
	{
		
		$this->login=$login;
		$this->pwd=$pwd;
		$c=new Database();
		$this->conn=$c->connexion();
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


	public function Logedin($conn,$login,$pwd)
	{
		$req="select * from user where login='$login' && pwd='$pwd'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}

	}
	
	

	?>