<?php
include "C:/xampp9\htdocs\projetWeb\core/evenementsC.php";
$evenement = new EvenementC();
  $event= $evenement->getEventById($_GET['id']);
echo $event['nom'];