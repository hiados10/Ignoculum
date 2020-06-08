
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.0.3/leaflet.js"></script>
    <script src="https://cdn.maptiler.com/mapbox-gl-js/v0.53.0/mapbox-gl.js"></script>
    <script src="https://cdn.maptiler.com/mapbox-gl-leaflet/latest/leaflet-mapbox-gl.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.3.1/leaflet.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.3.1/leaflet.js"></script>
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

<!-- Contact header-section 
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

  <!-- Google map Study Sections 
  =========================-->
  <?php
include "C:/xampp9\htdocs\projetWeb\core/evenementsC.php";
$evenement = new EvenementC();
  $event= $evenement->getEventById($_GET['id']);
  $counter=count($evenement->checkIfClientParticipated($_GET['id'],1));
  
?>
<section class="contact-map">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 padding-0">
        <!-- map -->
        <div id="map-leaflet" style="height: 512px;width:1000px;float:right;margin-right:4em">
        </div>
        <!-- Contact Information -->
        <div class="contact-info">
          <div class="contact-img">
          
            <img src="<?php echo $event['img'] ?>" alt="Portfolio" style="max-width: 500px;max-height:500px;">
          </div>
          <div class="contact-content">
            <div class="content-title-section">
              <h3 class="content-title"> <?php echo $event['nom'];?> </h3>
            </div>
            <div class="home-address">
              <div class="flex">
                <div class="contact-icon">
                  <i class="tf-ion-ios-home-outline"></i>
                </div>
                <p class="ct-info"><?php echo $event['localisation'];?></p>
              </div>
            </div>
            <div class="web-address">
              <div class="flex">
                <div class="contact-icon">
                  <i class="tf-global"></i>
                </div>
                <a href="#" class="ct-info">Du  <?php echo $event['date_d'];?>  au  <?php echo $event['date_f'];?></a>
              </div>
            </div>
            
        
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="blog-single">
  	<div class="container">
  		<div class="row">
        <div class="title text-center">
          <h2><?php echo $event['Nom'];?> </h2>
        </div>
  			<section class="services">
    <div class="container">
      <div class="row">
        
        <div class="col-md-4">
          <div class="service-item text-center">
            <div class="services-icon">
              <i class="tf-mobile"></i>
            </div>
            
            <h4 class="service-title">Nombre de places</h4>
            <p class="service-description">
            <?php echo $event['nbmax'];?>  
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-item text-center">
            <div class="services-icon">
              <i class="tf-telescope"></i>
            </div>
            <h4 class="service-title">Description</h4>
            <p class="service-description">
            <?php echo $event['description'];?> 
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-item text-center">
            <div class="services-icon">
              <i class="tf-presentation"></i>
            </div>
            <h4 class="service-title">Nombre de participants</h4>
            <p class="service-description">
            <?php echo $event['nbpart'];?> 
            </p>
          </div>
        </div>
        
        
      </div>
    </div>
  </section>
            <div class="blog-single-form">
              
                
                <div class="col-md-12 padding-0">
                  <div class="form-submit-btn text-center">
                    <?php 
                    if ($counter==0){
                    ?>
                    <button  class="btn btn-default btn-main th-btn" onclick="participate(<?php echo $_GET['id']?>,1)">Participer</button>                                      
                    <?php }else{                      
                     ?>
                                         <button  class="btn btn-default btn-main th-btn" onclick="cancelParticipate(<?php echo $_GET['id']?>,1)">Annuler</button>                                      
                    <?php }?>
                    <input type="hidden" class="btn btn-default btn-main th-btn"  value="<?PHP echo $event['IDuser']; ?>" name="IDuser">
                    <input type="hidden" class="btn btn-default btn-main th-btn"  value="<?PHP echo $_GET['id'] ?>" name="IDevent">
                  </div>
                </div>

                
             
              

                
             
            </div>
           
            
           
            
         
          <!-- See All Post -->
          <div class="col-md-12">
            <div class="see-all-post text-center">
              <a class="btn btn-default th-btn solid-btn" href="#" role="button"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Retour au debut </a>
            </div>
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


    <script src="js/script.js"></script>
<script>
function participate(idevent,idclient){
  window.location.href="http://localhost/projetWeb/front/views/participer.php?IDuser="+idclient+"&IDevent="+idevent+"&operation=CREATION";  
}

function cancelParticipate(idevent,idclient){
  window.location.href="http://localhost/projetWeb/front/views/participer.php?IDuser="+idclient+"&IDevent="+idevent+"&operation=DELETE";  
}

</script>

<script>
        var map = L.map('map-leaflet').setView([0, 0], 1);
        let address="<?php echo $event['localisation'] ?>";
        console.log(address);
        L.tileLayer('https://api.maptiler.com/maps/topographique/{z}/{x}/{y}.png?key=8bGutARc14rtqc9rK1lg',{
            tileSize: 512,
            zoomOffset: -1,
            minZoom: 1,
            attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">© MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">© OpenStreetMap contributors</a>',
            crossOrigin: true,
            noWrap:true
        }).addTo(map);
        fetch("https://nominatim.openstreetmap.org/search.php?q="+address+"&format=json&accept-language=fr").then(response=>{
          console.log(response.json().then(payload=>{
            var marker = L.marker([payload[0].lat,payload[0].lon ]).addTo(map);
    
          }));
        })

    </script>
    
    </body>

    </html>

