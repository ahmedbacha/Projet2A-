<?PHP
include "../Model/Commande.php";
include "../Controller/CommandeCore.php";

if (isset($_POST['fname']) and isset($_POST['lname'])and isset($_POST['idProd'])and isset($_POST['email'])and isset($_POST['adresse'])and isset($_POST['quantity'])){
$commande1=new commande($_POST['idCmd'],$_POST['fname'],$_POST['lname'],$_POST['idProd'],$_POST['email'],$_POST['adresse'],$_POST['quantity']);
$commande1C=new CommandeCore();
$commande1C->ajouterCommande($commande1);
header('Location: afficherCommande.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>
