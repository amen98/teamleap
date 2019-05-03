<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php 
include 'User.php';
//$log="admin";
//$nom="admin";
/*$servername="localhost";
	$username="root";
	$password="";
	$dbname="dbmail";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", 
	$username, $password);
	$req="select * from users where user_name='$mail' && user_pass='$nom'";
	$rep=$conn->query($req);
	$res=$rep->fetchAll();
	*/
$c=new Database();
$conn=$c->connexion();
$user=new User($_POST['mail'],$_POST['nom'],$conn);
$u=$user->Logedin($conn,$_POST['mail'],$_POST['nom']);

	//var_dump($u);
//$logR=$_POST['mail'];
//$nomR=$_POST['nom'];
$vide=false;
if (!empty($_POST['mail']) && !empty($_POST['nom'])){
	
	foreach($u as $t){
		$vide=true;
	if ($t['mail']==$_POST['mail'] && $t['nom']==$_POST['nom']){
		
		session_start();
		$_SESSION['l']=$_POST['mail'];
		$_SESSION['p']=$_POST['nom'];
		$_SESSION['r']=$t['role'];
		header("location:index.php");
		
		}
	
}
if ($vide==false) { 
         // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'Membre non reconnu...\')">'; 
         // puis on le redirige vers la page d'accueil
         echo '<meta http-equiv="refresh" content="0;URL=auth.html">'; 
      } 
}	  
 
else { 
      echo "Les variables du formulaire ne sont pas déclarées.<br> Vous devez remplir le formulaire"; 
     ?> <a href="auth.html">Retour au formulaire</a>	 <?php 
}  

?> 
</body>
</html>