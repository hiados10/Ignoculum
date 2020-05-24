<?PHP
include "../../config.php";
include "../../core/serviceC.php";
include "../../core/categorieC.php";
$categorie1C=new CategorieC();
$listeCategories=$categorie1C->afficherCategories();
$service1C=new serviceC();
$listeservices=$service1C->Affichservice();
$res=false;
$maction='afficher';
$cat="";
if (isset($_GET['search']))
  {
    $nomservice=$_GET['search'];
    $listeservices=$service1C-rechercherListeservice($nomservice);
    $res=true;
   }
   if (isset($_POST['search']))
   {
     $nomservice=$_POST['search'];
     $listeservices=$service1C->rechercherListeservice($nomservice);
     $res=true;
    }

    if(isset($_GET['triera']))
    {
      $listeservices=$service1C->triera();
    }
   
    if(isset($_GET['trierp']))
    {
      $listeservices=$service1C->trierp();
    }
    if(isset($_GET['trier']))
    {    $cat=$_GET['cat'];
      $listeservices=$service1C->trier($cat);
   echo "heyy";
      echo $cat;

    }

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
/************* */
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 0px;
  max-width: 500px;
  max-height:500px;
}
.gg
{
  width: 500px;
  height:500px;"
}
/* Clearfix (clear floats) */

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
        <li><a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">chercher</a>
        <ul class="sub-menu children dropdown-menu">
                            <li>
   
                          
                            <form class="search-form" method="post">
                                <input class="btn btn-default btn-main" name="search" type="text" placeholder="Chercher ..." aria-label="Search">
                            </form>
                           
                            </li>
                        </ul>
                        
      </li>

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
  <!-- Portfolio Sections 
 =========================-->
 <section class="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title text-center">
          <h2>Notre Services</h2>
        </div>
<!-- tri prix et alphabet--------------------------------------------------->
<div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav navbar-right menu">
        <li><a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TRIER PAR</a>
        <ul class="sub-menu children dropdown-menu">
                            <li>
   
                          
                            <form class="search-form" method="GET">
                            <input type="submit" class="btn btn-default btn-main" name="triera" value="trier par nom">
                   <input type="submit" class="btn btn-default btn-main" name="trierp" value="trier par prix">                            </form>
                           
                            </li>
                        </ul>
                        
      </li>

      </ul>
    </div>
<!--end tri prix et alphabet---------------------------------------------->

        <div class="protfolio-mixitup-btn text-center">
        <a  href='Afficherservice.php'><button class="filter btn btn-default btn-main" name="trier" id="trier" data-filter="category-1">ALL</button></a>                                    
        
            
        <?PHP
                                    foreach($listeCategories as $row){
                                      ?>
                                      
                                      <a  href='Afficherservice.php?cat=<?PHP echo $row['id_categorie']; ?>&trier=rr'><button class="filter btn btn-default btn-main" name="trier" id="trier" data-filter="category-1"><?PHP echo $row['nom']; ?></button></a>                                    
                                    <?php } ?></div>
    
        
        <?PHP
foreach($listeservices as $row){
  ?>
  <div>
          <div class="filtr-item col-md-4 col-sm-6 col-xs-12" data-category="category-1">
            <div class="portfolio-list">
              <a href="service.php?id_service=<?PHP echo $row['id_service']; ?>">
                <div class="th-mouse-portfolio-card">
                  <div class="thumbnail portfolio-thumbnail">
                    <img src="<?PHP echo $row['img']; ?>" alt="Portfolio">
                    <div class="caption portfolio-caption">
                      <p class="date"><?PHP echo $row['nom']; ?></p>
                      <h3 class="portfolio-title"><?PHP echo $row['nom_service']; ?></h3>
                      <p class="portfolio-subtitle"><?PHP echo $row['prix_service']; ?></p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div> 
  </div>       
          
          <?php
		
		$categorieC=new CategorieC();
		$liste=$categorieC->afficherCategories(); ?>
  




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

        </div>
      </div>
    </div>
  </div>
</section>

  <!-- Pricing Table Sections 
  =========================-->
  <div class="inner-block">
    <div class="product-block">
    	<div class="pro-head">  
    	</div>
    	<table border="1" id="myTable">

<?PHP
foreach($listeservices as $row){
  ?>
  <tr>
    <th>
  <div class="filtr-item col-md-4 col-sm-6 col-xs-12" data-category="category-2">
            <div class="portfolio-list">
              <a href="service.php?id_service=<?PHP echo $row['id_service']; ?>">
                <div class="th-mouse-portfolio-card">
                  <div class="thumbnail portfolio-thumbnail">
                    <img src="<?PHP echo $row['img']; ?>" alt="Portfolio" style="max-width: 500px;max-height:500px;">
                    <div class="caption portfolio-caption">
                      <p class="date"><?PHP echo $row['nom']; ?></p>
                      <h3 class="portfolio-title"><?PHP echo $row['nom_service']; ?></h3>
                      <p class="portfolio-subtitle"><?PHP echo $row['prix_service']; ?></p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div> 
</th>
</tr>
  <tr>
  <?php
		
		$categorieC=new CategorieC();
		$liste=$categorieC->afficherCategories(); ?>
  

  </form>

  </td>

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
</table>

  
    	
    	
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



  