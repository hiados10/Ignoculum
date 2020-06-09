<?PHP
	include "../core/typeC.php";

	$typeC=new TypeC();
	
	if (isset($_POST["IDtype"])){
		$typeC->supprimerType($_POST["IDtype"]);
		header('Location: types.php');
	}

?>