<?PHP
include "../core/livraisonC.php";
include "../config.php";

$livraisonC=new LivraisonC();
if (isset($_POST["supprimer"])){
	$result=$livraisonC->recupererLivraison($_POST['num1']);
	
	foreach($result as $row){
		
		$result2=$livraisonC->recupererClient($row['cinClient']);
		foreach($result2 as $row1){
			
				$to=$row1['mail'];
	$sujet='Annulation du livraison';
	$text='Bonjour Mr/Mm '.$row1['nom'].'/n Votre demmande a été annuler. Vous pouvez contacter le 27 925 666 pour plus d information.';
	$header='From : Strong Nutrition Tunisia';
	mail($to,$sujet,$text,$header);
	

		}
	}
	$livraisonC->supprimerLivraison($_POST["num1"]);
	header('Location: afficherLivraison.php');
}

?>