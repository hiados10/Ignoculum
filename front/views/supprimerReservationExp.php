<?php

include "../../config.php";
include "../core/reservationExpC.php";
$reservationExpC=new reservationExpC();
if (isset($_POST["numReservationExp"])){
	$reservationExpC->supprimerReservationExp($_POST["numReservationExp"]);
	header('Location: AfficherReservationExp.php');
}

?>