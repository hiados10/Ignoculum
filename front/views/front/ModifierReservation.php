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
<?PHP

      include "../../entities/reservation.php";
      include "../../config.php";
      include "../../core/reservationC.php";

if (isset($_GET['numReservation'])){
  $reservationC=new reservationC();
    $result=$reservationC->recupererReservation($_GET['numReservation']);
  foreach($result as $row)
  {
    $numReservation=$row['numReservation'];
    $dateReservation=$row['dateReservation'];
    $heureReservation=$row['heureReservation'];
   
?>
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
        <li><a href="http://localhost/arachnide/views/front/AfficherReservation.php">Reservation</a></li>
        <li><a href="http://localhost/arachnide/views/front/AfficherReservationExp.php">Portfolio</a></li>
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
  <!-- Service Item Sections 
  =========================-->
  <section class="contact-form">
    <div class="container">
      <div class="row">
        <div class="title text-center">
          <h2>Modifier la reservation</h2>
        </div>
        <form class="" method="post" >
          <div class="col-md-6">

          <div class="form-group">
              <input value="<?php echo $row['dateReservation']; ?>" type="date" class="form-control" placeholder="Date de la reservation" id="dateReservation" name="dateReservation" oninvalid="setCustomValidity('')" 
              oninput="setCustomValidity('')">
            </div>
            
            <div class="form-group">
              <input value="<?php echo $row['heureReservation']; ?>" type="time" class="form-control" placeholder="Heure de la reservation" name="heureReservation" id="heureReservation">
            </div>
            
          </div>

<?PHP
	  //include "../../config.php";
    //include "../../core/reservationC.php";

    $reservationC=new reservationC();
    $reserv=$reservationC->afficheReservation(); 
?>
          
          <div class="col-md-12">
          </div>
            
          <div class="col-md-12">
            <div class="contact-btn text-center">
              <input class="btn btn-default btn-main" type="submit" name="modifierReservation" id="modifierReservation" value="Modifier">
            </div>
			<div>
			<input type="hidden" name="numReservation_ini" value="<?PHP echo $_GET['numReservation'];?>">
			</div>
          </div>
        </form>
      </div>
    </div>
  </section>


  <!-- Pricing Table Sections 
  =========================-->

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
<?PHP
  }
}
if (isset($_POST['modifierReservation'])){
  $reservation=new reservation(0,0,$_POST['dateReservation'],$_POST['heureReservation']);
  $reservationC->modifierReservation($reservation,$_POST['numReservation_ini']);
  
 //echo $_POST['numReservation_ini'];
  header('Location: AfficherReservation.php');
    echo "<script language=javascript>
  notifyMe();
  </script>"; 
}
?>            