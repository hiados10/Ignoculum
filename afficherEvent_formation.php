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
  <?php include "C:/xampp9\htdocs\projetWeb/front/views\header.php"; ?>

  <!-- Portfolio header-section 
  =========================-->
  <section class="page-header services-header" data-parallax="scroll" data-image-src="../views/images/header/slide-1.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center"></h1>
        </div>
      </div>
    </div>
  </section>


  <!-- Portfolio Single Sections 
  ================================-->
  <section class="portfolio-single">
    <div class="container-fluid padding-0">
      <div class="row margin-0">
        <div class="title text-center">
          <h2>Les formations</h2>
        </div>
        <div class="flex">
          <div class="col-md-12 col-lg-6  padding-0">
            <img src="images/portfolio/formation1.jpg" alt="">
          </div>
          <div class="col-md-12 col-lg-6 portfolio-single-description padding-0">
            <div class="portfolio-single-info">
              <p class="date">La formation professionnelle est un investissement rentable et durable. Elle vous permet de développer, d’approfondir vos compétences techniques (hard skills) et vos compétences comportementales (soft skills).</p>
              <h3 class="portfolio-single-title"> TROUVER LA FORMATION QUI VOUS CORRESPOND, C’EST FACILE</h3>
              <div class="row margin-0">
                <div class="col-md-12 protfolio-list padding-0">
                  <div class="col-md-4 col-sm-6 padding-0">
                    <p></p>
                  </div>


                </div>
              </div>
            </div>
          </div>
        </div>
  </section>

  <!-- Gallery Sections 
  =========================-->

  <section class="gallery">
    <div class="container">
      <div class="row">
        <div class="gallery-description text-center">
          <section class="contact-form">
            <div class="container">
              <div class="row">

                <form action="afficherEvent_foire.php" method="POST">
                  <div class="col-md-12 col-lg-6 portfolio-single-description padding-0">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Veuillez saisir la localisation" name="recherche">
                    </div>
                    <div>
                      <input class="btn btn-default btn-main" type="submit" value="Recherche">
                    </div>

                  </div>
                </form>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav navbar-right menu">
        <li><a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TRIER PAR</a>
        <ul class="sub-menu children dropdown-menu">
                            <li>
                            <form class="search-form" method="post">
                            <input type="submit" class="btn btn-default btn-main" name="triera" value="trier par nom">
                   <input type="submit" class="btn btn-default btn-main" name="trierp" value="trier par date">                            </form>
                            </li>
                        </ul>
      </li>
      </ul>
    </div>
              </div>
            </div>
          </section>

          <section class="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <table>
          <?php
          include "C:/xampp9\htdocs\projetWeb\core/evenementsC.php";
          $evenement = new EvenementC();
          if (@$_POST['recherche'] == null)
            $listeEvent = $evenement->afficherEvents_formation();
          else
            $listeEvent = $evenement->rechercher_evenement($_POST['recherche']);

            if(isset($_POST['triera']))
            {
              $listeEvent=$evenement->triera_formation();
            }
            if(isset($_POST['trierp']))
            {
              $listeEvent=$evenement->trierp_formation();
            }

          ?>
   <tr>
              <td>

          <div id="Container" class="filtr-container row">
            <?php foreach($listeEvent as $event){ ?>
            <div class="filtr-item col-md-4 col-sm-6 col-xs-12" data-category="category-1">
              <div class="portfolio-list">
                <a href="javascript:void(0)" onclick="redirectToProfile(<?php echo $event['IDevent']?>)">
                  <div class="th-mouse-portfolio-card">
                    <div class="thumbnail portfolio-thumbnail">
            <img src="<?php echo $event['img'] ?>" alt="Portfolio" style="max-width: 500px;max-height:500px;">
                      <div class="caption portfolio-caption">
                        <p class="date"><?PHP echo $event['date_d']; ?> </p>
                        <h3 class="portfolio-title"><?PHP echo $event['nom']; ?> </h3>
                        <p class="portfolio-subtitle">localisation : <?PHP echo $event['localisation']; ?> </p>
                        <p class="portfolio-subtitle">catégorie : <?PHP echo $event['Nom']; ?> </p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            </td>
            <?php }?>
            </tr>
            </table>

          </div>




        </div>



      </div>
    </div>
    </div>

  </section>


  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="container">
          <div class="footer-top">
            <div class="col-md-4">
              <!-- footer About section
                            ========================== -->
              <div class="footer-about">
                <h3 class="footer-title">About</h3>
                <p>Nemo enim ipsam voluptatem quia voluptas <br>
                  sit aspernatur aut odit aut fugit, sed quia <br>
                  magni dolores eos qui ratione. ed quia <br>
                  magni dolores</p>
              </div>
            </div>
            <div class="col-md-4">
              <!-- footer Address section
                            ========================== -->
              <div class="footer-address">
                <h3 class="footer-title">Address</h3>
                <p>DeviserWeb 24/A,Jalalabad amborkhana amagnina, Sylhet.</p>
                <p class="contact-address">
                  Contact us : <a href="tel:+610383666274">+61 (0) 3 8366 6274 </a> <br>
                  Write us : <a href="mailto:info@info.com">mail@itsnuman.com</a>
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <!-- footer Media link section
                            ========================== -->
              <div class="footer-social-media">
                <h3 class="footer-title">Keep in touch</h3>
                <ul class="footer-media-link">
                  <li><a href="#"><i class="tf-ion-social-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="tf-ion-social-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="tf-ion-social-linkedin-outline" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="tf-ion-social-google-outline" aria-hidden="true"></i></a>
                  </li>
                  <li><a href="#"><i class="tf-ion-social-instagram-outline" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-nav text-center">
            <div class="col-md-12">
              <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="#">Our Team</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="text-center">
            <div class="col-md-12">
              <div class="copyright">
                <p>&copy; 2013-2017 All rights reserved. <br>
                  Design and Developed By <a href="https://themefisher.com">Themefisher.com</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="plugins/jquery.min.js"></script>
<script>
  function redirectToProfile(id){
    window.location.href="afficherToutEvent.php?id="+id;
  }

</script>
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