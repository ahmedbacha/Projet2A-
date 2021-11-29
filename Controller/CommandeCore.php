<?php  
          include "../config.php";
    class CommandeCore {

	
	function ajouterCommande($commande){

		$sql="insert into commande (idCmd,fname,lname,idProd,email,adresse,quantity) values ( :idCmd, :fname, :lname, :idProd, :email, :adresse, :quantity)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $idCmd=$commande->getIdCmd();
          $fname=$commande->getFname();
  $lname=$commande->getLname();
     $idProd=$commande->getIdProd();  
 $email=$commande->getEmail();  
 $adresse=$commande->getAdresse(); 
 $quantity=$commande->getQuantity(); 
		$req->bindValue(':idCmd',$idCmd);
		$req->bindValue(':fname',$fname);
			$req->bindValue(':lname',$lname);
              $req->bindValue(':idProd',$idProd);
$req->bindValue(':email',$email);
$req->bindValue(':adresse',$adresse);
$req->bindValue(':quantity',$quantity);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherCommande(){
		$sql="SElECT * From commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	

	function supprimerCommande($idCmd){
		$sql="DELETE FROM commande where idCmd= :idCmd";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idCmd',$idCmd);

		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
function recupererCommande($idCmd){
		$sql="SELECT * from commande where idCmd=$idCmd";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierCommande($idCmd,$fname,$lname,$idProd,$email,$adresse,$quantity){
		$sql="UPDATE commande SET idCmd='$idCmd',fname='$fname',lname='$lname',idProd='$idProd',email='$email',adresse='$adresse',quantity='$quantity' WHERE idCmd='$idCmd'";

		
		$db = config::getConnexion();
		try{
				$db->query($sql);
				
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	

	





	


	
	
}

?>











