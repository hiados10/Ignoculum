<?PHP
include "../../config.php";
include "../core/reservationExpC.php";
include "../entities/reservationExp.php";


if (isset($_POST['id_service']) and isset($_POST['cin']) )
{
	$reservationExp1=new reservationExp($_POST['id_service'],$_POST['cin']);
	
	$reservationExp1C=new reservationExpC();
	$reservationExp1C->ajouterReservationExp($reservationExp1);
	header('Location: AfficherReservationExp.php');
}
else
{
	
	echo "vérifier les champs";
	
}
//*/

?>