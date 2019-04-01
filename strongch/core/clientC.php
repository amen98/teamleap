<?PHP
include "../config.php";
class ClientC {
function afficherClient ($client){
		echo "Pseudo: ".$client->getuser()."<br>";
		echo "Telephone: ".$client->gettel()."<br>";
		echo "e-mail: ".$client->getmail()."<br>";
		echo "mot de passe: ".$client->getmdp()."<br>";
	}
	/*function calculerSalaire($employe){
		echo $employe->getNbHeures() * $employe->getTarifHoraire();
	}*/
	function ajouterClient($client){
		$sql="insert into client (user,telephone,mail,mdp) values (:user, :telephone,:mail,:mdp)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $user=$client->getuser();
        $telephone=$client->gettel();
        $mail=$client->getmail();
        $mdp=$client->getmdp();
		$req->bindValue(':user',$user);
		$req->bindValue(':telephone',$telephone);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':mdp',$mdp);
	   $req->execute();
         return true;  
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage(); return false;
        }
		
	}
	
	function afficherClients(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerClient($user){
		$sql="DELETE FROM client where user= :user";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':user',$user);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierClient($client,$user){
		$sql="UPDATE client SET user=:userr, telephone=:telephone,mail=:mail,mdp=:mdp WHERE user=:user";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$userr=$client->getuser();
        $telephone=$client->gettel();
        $mail=$client->getmail();                              
        $mdp=$client->getmdp();
    
		$datas = array(':userr'=>$userr, ':user'=>$user, ':telephone'=>$telephone,':mail'=>$mail,':mdp'=>$mdp);
		$req->bindValue(':userr',$userr);
		$req->bindValue(':user',$user);
		$req->bindValue(':telephone',$telephone);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':mdp',$mdp);
	
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererClient($user){
		$sql="select * from client  where user='".$user."'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function rechercherListeClients($user){
		$sql="select * from client  where user like '%$user%'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>