<?PHP
	include "C:/xampp9\htdocs\projetWeb\core/evenementsC.php";

	$evenementC=new EvenementC();
	
	if (isset($_POST["IDevent"])){
		$evenementC->supprimerEvent($_POST["IDevent"]);
		header('Location: blog.php');
	}

?>