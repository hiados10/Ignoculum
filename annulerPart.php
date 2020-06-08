<?php
            include "C:/xampp9\htdocs\projetWeb\core/evenementsC.php";
           // include "C:/xampp9\htdocs\projetWeb/front/views\afficherToutEvent.php";
            $evenement = new EvenementC();
            echo $_POST["IDuser"];
            echo $_POST["IDevent"];
            $_SESSION['clic']=0;
            if (isset($_POST["IDuser"]) && isset($_POST["IDevent"]))
            {
                session_start();
                $_SESSION['clic']=0;
            $evenement->participerClient($_POST["IDuser"],$_POST["IDevent"]);
            $nb=$evenement->calculerPart($_POST["IDevent"]);
            echo $nb;
            $evenement->incrementPart($_POST["IDevent"],$nb);
            header('Location:afficherToutEvent.php');
            }
            
            ?>