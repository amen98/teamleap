<?PHP
include "../entities/livraison.php";
include "../core/livraisonC.php";
include "../config.php";

include "../core/transporteurC.php";

	$transporteurC=new TransporteurC();
    $result=$transporteurC->recupererTransporteur2($_POST['idTransporteur']);
	foreach($result as $row){
    
    $montant=$row['montant'];
	}
	//$livraison= new Livraison($_POST['date'],$_POST['dest'],$_POST['adr'],$_POST['frais'],13016198,$_POST['idCommande'],$_POST['idTransporteur']);
	if($_POST['dest']=="Tunis" || $_POST['dest']=="Ariana" || $_POST['dest']=="Ben Arous"){
		$total=5*$row['montant'];
	}
	else if($_POST['dest']=="Bizerte"){
		$total=7*$row['montant'];
	}
	else if($_POST['dest']=="Béja" || $_POST['dest']=="Jendouba" || $_POST['dest']=="Nabeul"){
		$total=11*$row['montant'];
	}
	else if($_POST['dest']=="Kef" || $_POST['dest']=="Sousse" || $_POST['dest']=="Mahdia" || $_POST['dest']=="Monastir" || $_POST['dest']=="Kairouan" || $_POST['dest']=="Siliana"){
		$total=15*$row['montant'];
	}
	else if($_POST['dest']=="Sfax" || $_POST['dest']=="Sidi Bouzid" || $_POST['dest']=="Kasserine" || $_POST['dest']=="Gafsa"){
		$total=18*$row['montant'];
	}
	else{
		$total=20*$row['montant'];
	}

	$livraison= new Livraison($_POST['date'],$_POST['dest'],$_POST['adr'],$total,$_POST['cinClient'],$_POST['idCommande'],$_POST['idTransporteur']);



	//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$livraison1C=new LivraisonC();
$livraison1C->ajouterLivraison($livraison);

$result2=$livraison1C->recupererClient($_POST['cinClient']);
		foreach($result2 as $row1){
			
				$to=$row1['mail'];
	$sujet='Affectation d\'une livraison';
	$text='Bonjour Mr/Mm '.$row1['nom'].'. La demmande d\'affectation du livraison pour votre commande N°'.$_POST['idCommande'].' a effectué aves succes .A '.$_POST['adr'].'-'.$_POST['dest'].' le '.$_POST['date'].' .Vous pouvez Changer ou annuler la demmande avant 3 jours de la date de livraison.';
	$header='From : Strong Nutrition Tunisia';
	mail($to,$sujet,$text,$header);
header('Location: COMMANDE.html');
		}

//*/

?>