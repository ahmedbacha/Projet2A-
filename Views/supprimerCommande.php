<?PHP
include "../Controller/CommandeCore.php";

$commandeC=new CommandeCore();
if (isset($_POST["idCmd"])) {
	$commandeC-> supprimerCommande($_POST["idCmd"]);
	header('Location: afficherCommande.php');
}

?>