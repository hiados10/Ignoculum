<?php
session_start();
?>
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
        <img src="images/logo-yellow1.png" alt="">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav navbar-right menu">
        <?php 
        if (isset($_SESSION['email']) && isset($_SESSION['password'])){
          if ($_SESSION['role']==='prestataire'){
            ?>
                    <li><a href="<?php echo 'services.php'; ?>">Ajout</a></li>
        <li><a href="<?php echo 'blog.php'; ?>">Mes Evenements</a></li>
<?php
          }
        }
        ?>

        <li><a href="<?php echo 'portfolio.php'; ?>">Tout les Evenements</a></li>
        <li><a href="<?php echo 'logout.php'; ?>">Déconnexion</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>
