




<?PHP
include "../Model/Commande.php";
include "../Controller/CommandeCore.php";
if (isset($_GET['idCmd'])){
  $commandeC=new CommandeCore();
    $result=$commandeC->recupererCommande($_GET['idCmd']);
  foreach($result as $row){
    $idCmd=$row['idCmd'];
    $fname=$row['fname'];
    $lname=$row['lname'];
    $idProd=$row['idProd'];
    $email=$row['email'];
    $adresse=$row['adresse'];
    $quantity=$row['quantity'];
?>
<?PHP
if (isset($_POST['modifier'])){
  
  $fname=$_POST['fname'];
  $lname=$_POST['lname'] ;
  $idProd=$_POST['idProd'] ;
  $email=$_POST['email'] ;
  $adresse=$_POST['adresse'] ;
  $quantity=$_POST['quantity'] ;
      $commandeC1=new CommandeCore();
      
      $commandeC1->modifierCommande($idCmd,$fname,$lname,$idProd,$email,$adresse,$quantity);
  header('Location: afficherCommande.php');
}
?>

<?php require_once 'header.php'; ?>


  
        <section id="main-content">
      <section class="wrapper">
        
 <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
Ajout commande              </header>
              <div class="panel-body">
                <div class="form">
<form  method="POST"  name="monFormulaire" id="monFormulaire" class="form-validate form-horizontal>
            <div class="form-group">
  <label class="label">First name</label> 
  <input class="controle" type="text" name="fname" required pattern="[0-9a-zA-Z-\.]{3,12}" placeholder="De 3 à 12 caractères" value="<?PHP echo $fname ?>"> 
  <span class="resultat"></span>
</div>
<div class="form-group">
  <label class="label">Last name</label> 
  <input class="controle" type="text" name="lname" required pattern="[0-9a-zA-Z-\.]{3,12}" placeholder="De 3 à 12 caractères" value="<?PHP echo $lname ?>"> 
  <span class="resultat"></span>
</div>
<div class="form-group">
  <label class="label">Produit:</label> 
  <input class="controle" type="number" name="idProd" min="1" max="100" required placeholder="Entre 1 et 100" value="<?PHP echo $idProd ?>"> 
  <span class="resultat"></span>
</div>
<div class="form-group">
  <label class="label"> Email :</label> 
  <input class="controle" type="email" name="email" required placeholder="mail@serveur.com" value="<?PHP echo $email ?>"> 
  <span class="resultat"></span>
</div>
<div class="form-group">
  <label class="label">Adresse</label> 
  <input class="controle" type="text" name="adresse" required pattern="[0-9a-zA-Z-\.]{3,12}" placeholder="De 3 à 12 caractères" value="<?PHP echo $adresse ?>"> 
  <span class="resultat"></span>
</div>
<div class="form-group">
  <label class="label">Quantity:</label> 
  <input class="controle" type="number" name="quantity" min="1" max="100" required placeholder="Entre 1 et 100"  value="<?PHP echo $quantity ?>"> 
  <span class="resultat"></span>
</div>


<input class="button" type="submit" name="modifier" id="modifier" value="Modifier" href="afficherCommande.php" >

</form>
</div>
              </div>
            </section>
          </div>
        </div>
<?PHP
}}	
?>
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
  color:black;
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

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php require_once 'footer.php'; ?>
 
