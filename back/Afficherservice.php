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
    if(isset($_POST['triera']))
    {
      $listeservices=$service1C->triera();
    }
   
    if(isset($_POST['trierp']))
    {
      $listeservices=$service1C->trierp();
    }
    if(isset($_GET['trier']))
    {    $cat=$_GET['cat'];
      $listeservices=$service1C->trier($cat);
   

    }
//var_dump($listeEmployes->fetchAll());
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Arachnide-Admin</title>
    <meta name="description" content="Arachnide-Admin">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/mystyles.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/ARACHNIDE.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                        </li>
                    <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Categorie</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="AjouterCategorie.php">ajouter</a></li>
                            <li><i class="fa fa-bars"></i><a href="AfficherCategorie.php">consulter</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>services</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="Ajouterservice.php">ajouter</a></li>
                            <li><i class="fa fa-table"></i><a href="Afficherservice.php">consulter</a></li>
                        </ul>
                    </li>
    

                    <h3 class="menu-title">Categorie</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                    
                   
                        <div class="card">
                            
                            <div class="card-body">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a  href='Afficherservice.php' class="nav-link" id="v-pills-profile-tab" name="trier" id="trier" data-filter="category-1"  aria-controls="v-pills-profile" aria-selected="false">ALL</a>                                    
                                    <?PHP
                                    foreach($listeCategories as $row){
                                      ?>
                                    <a  href='Afficherservice.php?cat=<?PHP echo $row['id_categorie']; ?>&trier=rr' class="nav-link" id="v-pills-profile-tab" name="trier" id="trier" data-filter="category-1"  aria-controls="v-pills-profile" aria-selected="false"><?PHP echo $row['nom']; ?></a>                                    
                                    <?php } ?>
                                </div>
                                    
                                 
                                </div>
                            </div>
                      
                    
                    <li>
              
                    </li>
                    <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                         
                            <form class="search-form" method="post">
                                <input class="form-control mr-sm-2"name="search" type="text" placeholder="Chercher ..." aria-label="Search">
                                <button type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                       

                        
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

 
        <div class="content mt-3">
            <div class="animated fadeIn">
                           

                                
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Services</strong>
                                <form method="post">

      <input type="submit" class="btn btn-1 btn-danger" name="triera" value="trier par nom" style="position: absolute;
  top: 5px;
  right: 115px;">
      <input type="submit" class="btn btn-1 btn-danger" name="trierp" value="trier par prix" style="position: absolute;
  top: 5px;
  right: 0;">
  	</form>

                            </div>
                            <div>
                            <td>
	  
  </td>

<button class="btn btn-warning btn-lg btn-block">
 		<?php
  echo "<b  id='imprimer'><a href='' onclick='window.print();return false;'>Imprimer </a></b>";
  ?>
    	
    	</button>
  
      
				  <div class="clearfix"> </div>
                </div>
                
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-dark table-striped table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th >Categorie</th>
                                            <th  >Nom</th>
                                            <th >prix</th>
                                            <th >Description</th>
                                            <th >Supprimer</th>
                                            <th >Modifer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?PHP
                                    foreach($listeservices as $row){
                                      ?>
                                         <tr>
                                         <?php
		
		$categorieC=new CategorieC();
		$liste=$categorieC->afficherCategories(); ?>   
  <td><?PHP echo $row['nom']; ?></td>
  <td><?PHP echo $row['nom_service']; ?></td>
  <td><?PHP echo $row['prix_service']; ?></td>
  <td><?PHP echo $row['description_service']; ?></td>

  <td>
	  <form method="POST" action="supprimerservice.php">
  	<input type="submit" class="btn btn-1 btn-danger" name="supprimer" OnClick="return confirm('Voulez vous vraiment supprimer cette categorie ?');" value="supprimer">
  	<input type="hidden" value="<?PHP echo $row['id_service']; ?>" name="id_service">
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
  <td><a class="btn btn-1 btn-warning" href="Modifierservice.php?id_service=<?PHP echo $row['id_service']; ?>">
  Modifier</a></td>
  </tr>
  <?PHP
}
?>
                                    </tbody>
                                </table>
                               </div>
                            </div>
                    

                                           


                                          
                                        </div><!-- .animated -->
                                    </div><!-- .content -->
                                </div><!-- /#right-panel -->
                                <!-- Right Panel -->


                            <script src="vendors/jquery/dist/jquery.min.js"></script>
                            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="assets/js/main.js"></script>
</body>
</html>
