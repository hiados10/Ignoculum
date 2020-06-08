
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

    <link rel="stylesheet" href="../views/plugins/bootstrap/bootstrap.min.css">
    <!-- ThemeFisher Icon -->
    <link rel="stylesheet" href="../views/plugins/themefisher-fonts/themefisher-fonts.css">
    <!-- Light Box -->
    <link rel="stylesheet" href="../views/plugins/magnific-popup/magnific-popup.css">
    <!-- animation css -->
    <link rel="stylesheet" href="../views/plugins/animate/animate.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="../views/plugins/slick/slick.css">

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="../views/css/style.css">

    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map_canvas {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
    </style>
    <script src="../views/plugins/modernizr.min.js"></script>
  </head>
  <body>
    <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->




 <!-- Navigation -section
  =========================-->

  
 <?php include "C:/xampp9\htdocs\projetWeb/front/views\header.php"; ?> 
  
<section class="page-header services-header" data-parallax="scroll" data-image-src="../views/images/header/slide-1.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center"> Proposez un évenement <br> Pour vous faire connaître</h1>
      </div>
    </div>
  </div>
</section>

  <!-- Service Item Sections 
  =========================-->
  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title text-center">
            <h2>Les types</h2>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-item text-center">
            <div class="services-icon">
              <i class="tf-mobile"></i>
            </div>
            <h4 class="service-title">Foire</h4>
            <p class="service-description">
             C’est un point de rencontres et d’échanges entre le vendeur et le client permettant ainsi aux exposants de se faire connaître, et de prospecter de nouveaux marchés. 
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-item text-center">
            <div class="services-icon">
              <i class="tf-telescope"></i>
            </div>
            <h4 class="service-title">Formation</h4>
            <p class="service-description">
              La formation professionnelle est un investissement rentable et durable.elle vous permet de développer, d’approfondir vos compétences techniques (hard skills) et vos compétences comportementales (soft skills).
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-item text-center">
            <div class="services-icon">
              <i class="tf-presentation"></i>
            </div>
            <h4 class="service-title">Meeting</h4>
            <p class="service-description">
              N’attendez plus qu’une occasion spéciale se présente pour commencer à organiser votre meeting avec vos clients : au contraire, planifiez vos meeting dans le cadre de votre stratégie, et provoquez les occasions !
            </p>
          </div>
        </div>
        
        
      </div>
    </div>
  </section>


  <!-- ajouter Table Sections 
  =========================-->
  <section class="contact-form">
    <div class="container">
      <div class="row">
        <div class="title text-center">
          <h2>modifier un évenement</h2>
        </div>
        <?PHP
include "C:/xampp9/htdocs/projetWeb/entities/evenements.php";
include "C:/xampp9/htdocs/projetWeb/core/evenementsC.php";
			if (isset($_GET['id'])){
                echo ($_GET['id']);
				$evenementC=new EvenementC();
				$result=$evenementC->getEventById($_GET['id']);
				foreach($result as $row){
                    $nom=$row['nom'];
                    $localisation=$row['localisation'];
					$nbmax=$row['nbmax'];
					$IDtype=$row['IDtype'];
                    $date_d=$row['date_d'];
                    $date_f=$row['date_f'];
                    $IDcat=$row['IDcat'];
                    $description=$row['description'];
                    $img=$row['img'];
					
		?>
        <form class="" method="post" enctype="multipart/form-data">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Nom" name="nom"  value="<?PHP echo $nom ?>">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Localisation" name="localisation"  value="<?PHP echo $localisation ?>" >
            </div>
            <div class="form-group">
              <input type="number" class="form-control" placeholder="Nombre de participants" name="nbmax"  value="<?PHP echo $nbmax ?>">
            </div>
            
          </div>
          <?PHP

include "C:/xampp9/htdocs/projetWeb/core/typeC.php";
$typeC=new TypeC();
$listeType=$typeC->AfficherType();
?>
          <div class="col-md-6 margin-0">
            <div class="form-group">
              <select class="form-control"  name="IDtype" value="<?PHP echo $IDtype ?>">
              <?PHP
foreach($listeType as $row){
	?>
	<option value="<?PHP echo $IDtype ?>"> <?PHP echo $row['libelle']; ?>
	</option>
	<?PHP } ?>
 
                   </select>
            </div>
            
            <div class="form-group">
              <input  placeholder="Date Debut" class="form-control"  value="<?PHP echo $date_d ?>" name="date_d" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date">
          </div> 
            <div class="form-group margin-0">
              <input  placeholder="Date Fin" class="form-control" name="date_f"   value="<?PHP echo $date_f ?>" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date">
            </div>
            
          </div>
          <?PHP
include "C:/xampp9\htdocs\projetWeb\core\categorieC.php";

$categorieC=new CategorieC();
$listeCateg=$categorieC->AfficherCategories();
?>
          <div class="col-md-12">
            <div class="form-group">
            <select class="form-control"  name="IDcat" value="<?PHP echo $IDcat ?> ">
              <?PHP
foreach($listeCateg as $row){
	?>
	<option value="<?PHP echo $row['id_categorie']; ?>"> <?PHP echo $row['Nom']; ?>
	</option>
	<?PHP } ?>
 
                   </select>
            </div>
          </div>
          <div class="col-md-12">
          <div class="form-group">
              <input type="file" class="form-control" valure="<?PHP echo $img ?>" accept="image/jpg" name="img" id="imageFile" onchange="changeImage(event)">
            </div>
          </div>
            
          <div class="col-md-12">
            <div class="form-group">
              <textarea class="form-control " rows="100" placeholder="Description" name="description" value="<?PHP echo $description ?>"></textarea>
            </div>
            <div class="contact-btn text-center">
              <input class="btn btn-default btn-main" type="submit" value="modifier" name="modifier">
            </div>
          </div>
          <input type="hidden" name="id_ini" value=<?PHP echo $_GET['id'];?>>
        </form>
        <?PHP
			}
		}
		if (isset($_POST['modifier'])){
            $fileTmpPath = $_FILES['img']['tmp_name'];
            $fileName = $_FILES['img']['name'];
            $fileSize = $_FILES['img']['size'];
            $fileType = $_FILES['img']['type'];
            $fileNameCmps = explode(".", $fileName);
            $fileExtension = strtolower(end($fileNameCmps));
            $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
            $uploadFileDir = './uploaded_files/';
            $dest_path = $uploadFileDir . $newFileName;
             
            if(move_uploaded_file($_FILES['img']['tmp_name'], 'uploads/'.$_POST['nom'].'.jpg'))
            {
                $evenement1=new Evenement($_POST['nom'],$_POST['localisation'],$_POST['nbmax'],$_POST['IDtype'],$_POST['date_d'],$_POST['date_f'],
                $_POST['IDcat'],$_POST['description'],"1",'./uploads/'.$_POST['nom'].'.jpg');
                $evenementC->modifierEvent($evenement1, $_POST['id_ini']);
              $message ='File is successfully uploaded.';
              header('Location: profile.php');
            }


		}
		?>
      </div>
    </div>
  </section> <!-- fin ajouter =========================-->
 

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
                                    <li><a href="#"><i class="tf-ion-social-linkedin-outline"
                                                aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-google-outline" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="tf-ion-social-instagram-outline"
                                                aria-hidden="true"></i></a></li>
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
                   
                </div>
            </div>
        </div>
    </footer>

    <script>
      function changeImage(event){
        let image=  $('#imageFile');
        let file=event.target.files[0];
        console.log(file);
        console.log('invoked ...');
      }

    </script>

    <script src="../views/plugins/jquery.min.js"></script>

    <script src="../views/plugins/bootstrap/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="../views/plugins/slick/slick.min.js"></script>
    <!-- filter -->
    <script src="../views/plugins/filterizr/jquery.filterizr.min.js"></script>
    <!-- Lightbox -->
    <script src="../views/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Parallax -->
    <script src="../views/plugins/parallax.min.js"></script>
    <!-- Video -->
    <script src="../views/plugins/jquery.vide.js"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
    <script src="../views/plugins/google-map/gmap.js"></script>

    <script src="../views/js/script.js"></script>
    </body>

    </html>
 