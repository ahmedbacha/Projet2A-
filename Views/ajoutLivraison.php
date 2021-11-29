


				
<?PHP
if (isset($_GET['ajouter']) ){

    include "../Model/Livraison.php";

include "../config.php";


$livraisons=new livraison($_GET['idLiv'],$_GET['date'],$_GET['localisation'],$_GET['idCmd']);
include "../Controller/LivraisonCore.php";
$livraisons1C=new LivraisonCore();
$livraisons1C->ajouterLivraison($livraisons);


header('Location: afficherLivraison.php');

	
}


?>
<?PHP
include "../Controller/CommandeCore.php";
$commandeC=new CommandeCore();
$listeCommande=$commandeC->afficherCommande();

?>
<?php require_once 'header.php'; ?>
 <section id="main-content">
      <section class="wrapper">
        
       
 <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
Ajout livraison              </header>
              <div class="panel-body">
                <div class="form">

<form name="monFormulaire" id="monFormulaire" class="form-validate form-horizontal" >


<div>
  <label class="label">Date</label> 
  <input class="controle" type="date" name="date"  required> 
  <span class="resultat"></span>
</div> 
<div>
  <label class="label">Localisation</label> 
  <input class="controle" type="text" name="localisation" required pattern="[0-9a-zA-Z-\.]{3,12}" placeholder="De 3 à 12 caractères"> 
  <span class="resultat"></span>
</div>
<div>
  <label class="label">Commande</label> 
  <select name="idCmd">
    <?PHP
foreach($listeCommande as $row){
    ?>
    <option value="<?PHP echo $row['idCmd']; ?>"><?PHP echo $row['fname']," ", $row['lname'] ?>
    </option>
    <?PHP } ?>
</select> 
</div>






<div class="controle">
  <input type="submit" value="Ajouter" name="ajouter">
</div>


</form>
</div>
              </div>
            </section>
          </div>
        </div>
<style> 
input.controle {
  outline:0;
  font-size:14px;
  width:250px;
}	
label.label {
  display:inline-block;
  width:200px;
  text-align: right;
  font-style: italic;
  margin-right:5px;
  color : black;
}
input.controle:valid {
  border:3px solid #0a0;
}
input.controle:invalid {
  border:3px solid #a00;
}
input.controle:valid + span:before  {
  content: "\f00c";
  font-family: "FontAwesome";
  color:#0a0;
  font-size: 1.5em;
}	
input.controle:invalid + span:before  {
  content: "\f00d";
  font-family: "FontAwesome";
  color:#a00;
  font-size: 1.5em;
}
 </style>
<?php require_once 'footer.php'; ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>