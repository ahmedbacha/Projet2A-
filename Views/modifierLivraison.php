


<?PHP

include "../Controller/LivraisonCore.php";
include "../Model/Livraison.php";
  include "../config.php";

if (isset($_GET['idLiv'])) 
{
    $livraisonC=new LivraisonCore();
    $result=$livraisonC-> recupererLivraison($_GET['idLiv']);
    foreach($result as $row)
    {
        $idLiv=$row['idLiv'];
      
        $date=$row['date'];
        
       
        $localisation=$row['localisation'];
         $idCmd=$row['idCmd'];
    
        
       
    ?>
    <?php
  if (isset($_POST['modifier'])) {
  
     
    
    $date=$_POST['date'];
    $localisation=$_POST['localisation'] ;
    $idCmd=$_POST['idCmd'] ;

        $livraisonC1=new LivraisonCore();
        
        $livraisonC1->modifierLivraison($idLiv,$date,$localisation,$idCmd);
        header('Location: afficherLivraison.php');

    
}
else{
  echo "";
}
}
?>


<?php require_once 'header.php'; ?>
<section id="main-content">
      <section class="wrapper">
       
 <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
update livraison              </header>
              <div class="panel-body">
                <div class="form">
 
  <div >
       <form name="myform" method="POST" class="form-validate form-horizontal " enctype="multipart/form-data" >
        <h1 class="prod"></h1>
   
       
     
  
    <div>
        <label class="label">Date</label></br>
        <input   class="controle" type="date" name="date"  required value="<?php echo $date ?>">
        <span class="resultat"></span>
    </div>
    
   
    <div>
        <label class="label">Localisation</label></br>
        <input  class="controle" type="text" name="localisation" required pattern="[0-9a-zA-Z-\.]{3,12}" placeholder="De 3 à 12 caractères" value="<?php echo $localisation ?>">
        <span class="resultat"></span>
    </div>
    
    <div >
  <label class="label">Commande</label> </br>
  <input class="controle" type="number" name="idCmd" min="1" max="100" required placeholder="Entre 1 et 100" value="<?php echo $idCmd ?>"> 
  <span class="resultat"></span>
</div>
   
    
</br>
   <input class="button" type="submit" name="modifier" id="modifier" value="Modifier" href="afficherLivraison.php" >
   
</br>
 
 </form>
 </div>
              </div>
            </section>
          </div>
        </div>

<?php
  }
?>
<style>
   input.controle {
  outline:0;
  font-size:14px;
  width:250px;
}	
label.label {
  display:inline-block;
  width:50px;
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
 