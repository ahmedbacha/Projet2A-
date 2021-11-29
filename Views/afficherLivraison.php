





<?PHP
include "../Controller/LivraisonCore.php";
include "../config.php";
$livraisonC=new LivraisonCore();
$listelivraisons=$livraisonC->afficherLivraison();

?>

<?php require_once 'header.php'; ?>
<section id="main-content">
			<section class="wrapper">
				<div class="row">
					<div class="col-lg-12">
						<h3 class="page-header">
							<i class="fa fa fa-bars"></i> 
						</h3>
						<ol class="breadcrumb">
							<li><i class="fa fa-home"></i><a href="afficherCommande.php">livraisons</a></li>

							
						</ol>
					</div>
				</div>
 
<table id="example" class="display" style="width:100%">


<thead>
            <tr>
                <th>Date</th>
                <th>Localisation</th>
                <th>Commande</th>
               
             <th>Delete</th>
<th>Update</th>
            </tr>
        </thead>
        <tbody>
         <?PHP
foreach($listelivraisons as $row){
  ?>
  <tr>
  
  <td><?PHP echo $row['date']; ?></td>
  <td><?PHP echo $row['localisation']; ?></td>
  <td ><?PHP echo $row['fname']," ", $row['lname'] ?></td>

<td > 
                                  
<form method="POST" 
	action="supprimerLivraison.php">
	<input type="submit" name="supprimer" 
	value="supprimer" class="btn btn-danger" onclick="return confirm('Vous êtes sure de supprimer cette livraison ?');" >
	<input  type="hidden" value="<?PHP echo $row['idLiv']; ?>" name="idLiv">
	</form>  
</td>
<td>

<a  class="btn btn-success" onclick="return confirm('Vous êtes sure de modifier cette livraison ?');" href="modifierLivraison.php?idLiv=
	<?PHP echo $row['idLiv']; ?>">
	Modifier</a>
   



</td>



  <?PHP
}
?>
        </tbody>
        <tfoot>
            <tr>
            <th>Date</th>
                <th>Localisation</th>
                <th>Commande</th>
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

<!-- footer -->
<!-- footer -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php require_once 'footer.php'; ?>
