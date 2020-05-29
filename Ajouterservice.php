<?PHP
session_start ();  
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
        <img src="images/ARACHNIDE.png" alt="">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav navbar-right menu">
      <li><a href="Ajouterservice.php">ajouter</a></li>
        <li><a href="Afficherservice.php">consulter</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>

<section class="page-header services-header" data-parallax="scroll" data-image-src="images/header/services-folding-img.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center"> Our Services. <br> We Ensure Quality Design.</h1>
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
          <h2>Ajouter un service</h2>
        </div>
        <form class="" method="post" action="ajoutservice.php" enctype="multipart/form-data">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Nom" id="nom_service" name="nom_service" required pattern ='[A-z]{1,}' oninvalid="setCustomValidity('Veuillez entrer des lettres seulement')"  oninput="setCustomValidity('')">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Prix" name="prix_service" id="prix_service"required pattern="[0-9]+" oninvalid="setCustomValidity('Veuillez entrer des nombres seulement')"  oninput="setCustomValidity('')"  >
            </div>
            
          </div>


          <?PHP
	include "../../config.php";
    include "../../core/categorieC.php";

    $categorieC=new CategorieC();
    $liste=$categorieC->afficherCategories(); 
?>
          <div class="col-md-12">
            <div class="form-group">
            <select class="form-control" id="idca" name="idca">
            <option value="<?PHP echo $row['id_categorie']; ?>"> Categorie
              <?PHP
foreach($liste as $row){
	?>
	<option value="<?PHP echo $row['id_categorie']; ?>"> <?PHP echo $row['nom']; ?>
	</option>
	<?PHP } ?>
 
                   </select>
            </div>
          </div>
          <div class="form-group">
              <textarea type="text" class="form-control" placeholder="Description" name="description_service" id="description_service" ></textarea>
            </div>
            <div class="form-group">
            <input type="file" class="form-control" accept="image/jpg" name="img" id="imageFile" onchange="changeImage(row)">  
                      </div>
          <div class="col-md-12">
          </div>
            
          <div class="col-md-12">
            <div class="contact-btn text-center">
              <input class="btn btn-default btn-main" type="submit" value="Ajouter">
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>

  <script>
      function changeImage(event){
        let image=  $('#imageFile');
        let file=event.target.files[0];
        console.log(file);
        console.log('invoked ...');
      }

    </script>
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
                       
          

                            <?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
 
// On récupère nos variables de session
if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
{ 

	 echo 'Votre login est <b>'.$_SESSION['l'].'</b> <br>et votre mot de passe est <b>'.$_SESSION['p'].
	'</b><br>Votre role est : '.$_SESSION['r'].' <br/> Identifiant de la session est :'.session_id().'</br>'; 
	echo '<a href="./logout.php">Cliquer pour se déconnecter</a>';

}

else { 
      echo 'Veuillez vous connecter </br>';  
	  echo '<a href="./auth.php">Cliquer pour se connecter</a>';

}  
//définir la session une session est un tableau temporaire 
//1 er point c quoi une session
// 
?>

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



  