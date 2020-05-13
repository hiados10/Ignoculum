<?PHP
include "../../config.php";
include "../core/reservationC.php";
$reservationC=new reservationC();
if (isset($_POST["numReservation"])){
	$reservationC->supprimerReservation($_POST["numReservation"]);
	header('Location: AfficherReservation.php');
}

?>