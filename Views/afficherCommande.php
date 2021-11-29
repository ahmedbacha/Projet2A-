<?php require_once 'header.php'; ?>
<section id="main-content">
			<section class="wrapper">
				<div class="row">
					<div class="col-lg-12">
						<h3 class="page-header">
							<i class="fa fa fa-bars"></i> 
						</h3>
						<ol class="breadcrumb">
							<li><i class="fa fa-home"></i><a th:href="afficherCommande.php">commandes</a></li>

							
						</ol>
					</div>
				</div>
<div class="modal fade bd-example-modal-lg" id="addClassModal" tabindex="-1"
				role="dialog" aria-labelledby="addClassModalLabel"
				aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="addClassModalLabel">Ajouter d'une commande</h5>
							<button type="button" class="close" data-dismiss="modal"
								aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
            <form  method="POST" action="ajoutCommande.php" name="monFormulaire" id="monFormulaire">
            <div class="form-group">
  <label class="label">First name</label> 
  <input class="controle" type="text" name="fname" required pattern="[0-9a-zA-Z-\.]{3,12}" placeholder="De 3 à 12 caractères"> 
  <span class="resultat"></span>
</div>
<div class="form-group">
  <label class="label">Last name</label> 
  <input class="controle" type="text" name="lname" required pattern="[0-9a-zA-Z-\.]{3,12}" placeholder="De 3 à 12 caractères"> 
  <span class="resultat"></span>
</div>
<div class="form-group">
  <label class="label">Produit:</label> 
  <input class="controle" type="number" name="idProd" min="1" max="100" required placeholder="Entre 1 et 100"> 
  <span class="resultat"></span>
</div>
<div class="form-group">
  <label class="label"> Email :</label> 
  <input class="controle" type="email" name="email" required placeholder="mail@serveur.com"> 
  <span class="resultat"></span>
</div>
<div class="form-group">
  <label class="label">Adresse</label> 
  <input class="controle" type="text" name="adresse" required pattern="[0-9a-zA-Z-\.]{3,12}" placeholder="De 3 à 12 caractères"> 
  <span class="resultat"></span>
</div>
<div class="form-group">
  <label class="label">Quantity:</label> 
  <input class="controle" type="number" name="quantity" min="1" max="100" required placeholder="Entre 1 et 100"> 
  <span class="resultat"></span>
</div>
  <button type="submit" class="btn btn-primary">ajouter </button>
  <button type="button" class="btn btn-secondary"
									data-dismiss="modal">Close</button>
</form>
</div>
				</div>
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
  width:100px;
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
} </style>

 
<?PHP
include "../Controller/CommandeCore.php";
$commande1C=new CommandeCore();
$listeCommande=$commande1C->afficherCommande();

?>

<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
               
                <th>First name</th>
                <th>Last name</th>
                <th>Produit</th>
                <th>Email</th>
                <th>Adresse</th>
             <th>Quantity</th>
             <th>Delete</th>
<th>Update</th>
            </tr>
        </thead>
        <tbody>
         <?PHP
foreach($listeCommande as $row){
  ?>
  <tr>
  
  
  <td><?PHP echo $row['fname']; ?></td>
<td><?PHP echo $row['lname']; ?></td>
<td><?PHP echo $row['idProd']; ?></td>
<td><?PHP echo $row['email']; ?></td>
<td><?PHP echo $row['adresse']; ?></td>
<td><?PHP echo $row['quantity']; ?></td>
<td > 
                                  
<form method="POST" 
	action="supprimerCommande.php">
	<input type="submit" name="supprimer" 
	value="supprimer" class="btn btn-danger" onclick="return confirm('Vous êtes sure de supprimer cette commande ?');" >
	<input  type="hidden" value="<?PHP echo $row['idCmd']; ?>" name="idCmd">
	</form>  
</td>
<td>

<a  class="btn btn-success" onclick="return confirm('Vous êtes sure de modifier cette commande ?');" href="modifierCommande.php?idCmd=
	<?PHP echo $row['idCmd']; ?>">
	Modifier</a>



</td>



  <?PHP
}
?>
        </tbody>
        <tfoot>
            <tr>
             
                <th>First name</th>
                <th>Last name</th>
                <th>Produit</th>
                <th>Email</th>
                <th>Adresse</th>
             <th>Quantity</th>
             <th>Delete</th>
<th>Update</th>
            </tr>
        </tfoot>
    </table>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" />
 <script src="https://code.jquery.com/jquery-3.5.1.js" type='text/javascript'></script>
 <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" type='text/javascript'></script>
 <script type="text/javascript" language="javascript"
								src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
                <script type="text/javascript" language="javascript"
								src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
                <script type="text/javascript" language="javascript"
								src=" https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
               
<script>

$('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'print'
        ]
    } );
</script>
<a class="btn btn-primary" data-toggle="modal"data-target="#addClassModal"></i>Ajouter </a></td>
<!-- footer -->
<!-- footer -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php require_once 'footer.php'; ?>