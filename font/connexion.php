<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php 
include 'User.php';
//$log="admin";
//$pwd="admin";
/*$servername="localhost";
	$username="root";
	$password="";
	$dbname="dblogin";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", 
	$username, $password);
	$req="select * from users where user_name='$login' && user_pass='$pwd'";
	$rep=$conn->query($req);
	$res=$rep->fetchAll();
	*/
$c=new Database();
$conn=$c->connexion();
$user=new User($_POST['nom'],$_POST['mot_de_passe'],$conn);
$u=$user->Logedin($conn,$_POST['nom'],$_POST['mot_de_passe']);

	//var_dump($u);
//$logR=$_POST['login'];
//$pwdR=$_POST['pwd'];
$vide=false;
if (!empty($_POST['nom']) && !empty($_POST['mot_de_passe'])){
	
	foreach($u as $t){
		$vide=true;
	if ($t['nom']==$_POST['nom'] && $t['mot_de_passe']==$_POST['mot_de_passe']){
		
		session_start();
		$_SESSION['l']=$_POST['nom'];
		$_SESSION['p']=$_POST['mot_de_passe'];
		$_SESSION['r']=$t['type_compte'];
		$_SESSION['u']=$t['cin'];
		//header("location:Afficherservice.php");
		if($t['type_compte']=="admin")
		header("location:Afficherservice.php");
	else if ($t['type_compte']=="donneur")
	header("location:Afficherservicedonneur.php");
	else if ($t['type_compte']=="client")
	header("location:Afficherserviceclient.php");

	
		}
	
}
if ($vide==false) { 
         // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'Membre non reconnu...\')">'; 
         // puis on le redirige vers la page d'accueil
         echo '<meta http-equiv="refresh" content="0;URL=auth.php">'; 
      } 
}	  
 
else { 
      echo "Les variables du formulaire ne sont pas déclarées.<br> Vous devez remplir le formulaire"; 
     ?> <a href="auth.php">Retour au formulaire</a>	 <?php 
}  

?> 
</body>
</html>