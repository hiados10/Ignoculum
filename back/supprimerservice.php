<?PHP
include "../../core/serviceC.php";
include "../../config.php";
$serviceC=new serviceC();
if (isset($_POST["id_service"])){
	$serviceC->supprimerservice($_POST["id_service"]);
	header('Location: Afficherservice.php');
}

?>