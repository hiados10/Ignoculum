<?PHP
include "../../config.php";
include "../../core/reservationC.php";
include "../../entities/reservation.php";


if (isset($_POST['id_service']) and isset($_POST['cin']) and isset($_POST['dateReservation']) and isset($_POST['heureReservation']) )
{
	$reservation1=new reservation($_POST['id_service'],$_POST['cin'],$_POST['dateReservation'],$_POST['heureReservation']);
	
	$reservation1C=new reservationC();
	$reservation1C->ajouterReservation($reservation1);
	header('Location: AfficherReservation.php');
}
else
{
	
	echo "vérifier les champs";
	
}
//*/

?>