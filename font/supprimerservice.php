<?PHP
include "../../core/serviceC.php";
include "../../config.php";
session_start ();
$serviceC=new serviceC();
if (isset($_POST["id_service"])){
	$serviceC->supprimerservice($_POST["id_service"]);
	if($_SESSION['r']=="admin")
header('Location: Afficherservice.php');
else if ($_SESSION['r']=="donneur")
header("location:Afficherservicedonneur.php");
}
}

?>