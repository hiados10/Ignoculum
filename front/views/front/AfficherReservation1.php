<?PHP
include "../../config.php";
include "../../core/reservationC.php";
$reservation1C=new reservationC();
$listereservations=$reservation1C->afficheReservation();

//var_dump($listeEmployes->fetchAll());
?>
<!doctype html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fiction Multipage Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <!-- ThemeFisher Icon -->
    <link rel="stylesheet" href="plugins/themefisher-fonts/themefisher-fonts.css">
    <!-- Light Box -->
    <link rel="stylesheet" href="plugins/magnific-popup/magnific-popup.css">
    <!-- animation css -->
    <link rel="stylesheet" href="plugins/animate/animate.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="plugins/slick/slick.css">

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="css/style.css">

    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map_canvas {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
    </style>
    <script src="plugins/modernizr.min.js"></script>
  </head>
  <body>
    <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <!-- Loader to display before content Load-->
  



 <!-- Navigation -section
  =========================-->
<nav class="navbar navbar-fixed-top navigation" >
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand logo" href="index.html">
        <img src="images/logo-yellow.png" alt="">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav navbar-right menu">
        <li><a href="index.html">Acceuil</a></li>
        <li><a href="http://localhost/arachnide/views/front/AjouterReservation.php">Reservation</a></li>
        <li><a href="http://localhost/arachnide/views/front/AjouterReservationExp.php">Reservation EXPRESS</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="contact.html">Contacte</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>

<section class="page-header reservations-header" data-parallax="scroll" data-image-src="images/header/reservation.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center"> Reservation <br></h1>
      </div>
    </div>
  </div>
</section>

<!--
------------------------->

  <!-- reservation Item Sections 
  =========================-->
 

  <!-- Pricing Table Sections 
  =========================-->
  <div class="inner-block">
    <div class="product-block">
    	<div class="pro-head">
    		<h2>Vos reservations : </h2>
  
    	</div>
 
    	<table border="1" id="myTable" class="table table-bordered">
<tr>
<th>Num de la reservation</th>
<th>Nom du client</th>
<th>service</th>
<th>Date de la reservation</th>
<th>Heure de la reservation</th>
<th>Accepter</th>
<th>Refuser</th>
</tr>

<?PHP
foreach($listereservations as $row){

$s1=$reservation1C->recupererService();
$s2=$reservation1C->recupererCompte();
  ?>
  <tr>
  <td><?PHP echo $row['numReservation']; ?></td>
  <td><?PHP 
  foreach ($s2 as $key) {
     if(  $row['cin'] == $key['cin'] ){
      echo $key['Nom']." ".$key['Prenom'];
      break;
    }
  }
  ?></td>
  <td><?PHP
  foreach ($s1 as $key) {
     if(  $row['id_service'] == $key['id_service'] ){
      echo $key['NomService'];
      break;
    }
  }
   ?></td>
  <td><?PHP echo $row['dateReservation']; ?></td>
  <td><?PHP echo $row['heureReservation']; ?></td>

<?php
  if ($row['etatReservation']==1)
  {
?>
  <td><form method="POST"><input class="btn btn-default btn-main" type="submit" name="Accepter" value=" Accepter" disabled>
 </form>
</td>
<?php
}
else
{
?>
  <td><form method="POST"><input class="btn btn-default btn-main" type="submit" name="Accepter" value=" Accepter">
 </form>
</td>
<?php
}
?>

<?php
  if ($row['etatReservation']==0)
  {
?>
  <td><form method="POST"><input class="btn btn-default btn-main" type="submit" name="Refuser" value=" Refuser" disabled>
 </form>
</td>
<?php
}
else
{
?>
  <td><form method="POST"><input class="btn btn-default btn-main" type="submit" name="Refuser" value=" Refuser">
 </form>
</td>
<?php
}
?>

  <script>

function myFunction() {

  var input, filter, table, tr, td, i, txtValue;

  input = document.getElementById("myInput");

  filter = input.value.toUpperCase();

  table = document.getElementById("myTable");

  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++) {

    td = tr[i].getElementsByTagName("td")[2];

    if (td) {

      txtValue = td.textContent || td.innerText;

      if (txtValue.toUpperCase().indexOf(filter) > -1) {

        tr[i].style.display = "";

      } else {

        tr[i].style.display = "none";

      }

    }      

  }

}

</script>


  </tr>
  <?PHP
}
?>

<?php
  if(isset($POST['Refuser']))
  {
    $_POST['etatReservation']==1;
  }
?>

</table>

    	
 <form method="POST">
  <input class="btn btn-default btn-main" type="submit" name="imprimer" OnClick= 'window.print();return false;' value="Imprimer">
 </form>
  
    	
    	
      <div class="clearfix"> </div>

    </div>
</div>
            <!-- pricing table
            ===================== -->
            
            <!-- pricing table
            ===================== -->
           
            <!-- pricing table
            ===================== -->
                            <!-- footer Media link section
                            ========================== -->
                       


    <script src="plugins/jquery.min.js"></script>

    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="plugins/slick/slick.min.js"></script>
    <!-- filter -->
    <script src="plugins/filterizr/jquery.filterizr.min.js"></script>
    <!-- Lightbox -->
    <script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Parallax -->
    <script src="plugins/parallax.min.js"></script>
    <!-- Video -->
    <script src="plugins/jquery.vide.js"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
    <script src="plugins/google-map/gmap.js"></script>

    <script src="js/script.js"></script>
    </body>

    </html> 