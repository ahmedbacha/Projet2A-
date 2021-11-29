<?php  
       
   
    class LivraisonCore {

	function ajouterLivraison($livraison){
		$sql="insert into livraison(idLiv,date,localisation,idCmd) values (:idLiv,:date,:localisation,:idCmd)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		 $idLiv=$livraison->getIdLiv();
                 $date=$livraison->getDate();
                 $localisation=$livraison->getLocalisation();
                  $idCmd=$livraison->getIdCmd();
        $req->bindValue(':idLiv',$idLiv);
		$req->bindValue(':date',$date);
		$req->bindValue(':localisation',$localisation);
		$req->bindValue(':idCmd',$idCmd);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	
	function afficherLivraison(){
		$sql="SElECT idLiv,date,localisation,fname,lname From livraison inner join commande on livraison.idCmd=commande.idCmd ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function recupererLivraison($idLiv){
		$sql="SELECT * from livraison where idLiv=$idLiv";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }}
	function supprimerLivraison($idLiv){
		$sql="DELETE FROM livraison where idLiv= :idLiv";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idLiv',$idLiv);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}



	function modifierLivraison($idLiv,$date,$localisation,$idCmd){
		$sql="UPDATE livraison SET idLiv='$idLiv',date='$date',localisation='$localisation',idCmd='$idCmd' WHERE idLiv='$idLiv'";
		
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

