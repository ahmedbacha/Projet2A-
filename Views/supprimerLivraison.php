<?PHP
include "../Controller/LivraisonCore.php";
include "../config.php";
$livraisons1C=new LivraisonCore();
if (isset($_POST["idLiv"])) {
	$livraisons1C-> supprimerLivraison($_POST["idLiv"]);
	header('Location: afficherLivraison.php');
}

?>
