<?php
session_start();
            include "C:/xampp9\htdocs\projetWeb\core/evenementsC.php";
           // include "C:/xampp9\htdocs\projetWeb/front/views\afficherToutEvent.php";
            $evenement = new EvenementC();

            echo $_GET["IDuser"];
            echo $_GET["IDevent"];
            if (isset($_GET["IDuser"]) && isset($_GET["IDevent"]) && isset($_GET['operation']))
            {
                if ($_GET['operation']=="CREATION")
                {                
            $evenement->participerClient($_SESSION["IDuser"],$_GET["IDevent"]);
                }
                else {
                    $evenement->cancelParticipation($_SESSION["IDuser"],$_GET["IDevent"]);
                }
                $nb=$evenement->calculerPart($_GET["IDevent"]);
                echo $nb;
                $evenement->incrementPart($_GET["IDevent"],$nb);
            header('Location:afficherToutEvent.php?id='.$_GET['IDevent']);
            }
            
            ?>