<?php
include "../Controller/produitC.php";

$produit=new produitC();
$produitC = new produitC();
//$listeproduit=$produit->afficherproduit();



$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$perpage = isset($GET['per-page']) && $_GET['per-page'] <= 50 ? (int)$_GET['per-page'] : 3;

//echo $page;
//echo $perpage;


$listeproduit = $produit->AfficherproduitPaginer($page, $perpage);
$totalP = $produit->calcTotalRows($perpage);



if(isset($_GET['recherche']))
                       {
                        $search_value=$_GET["recherche"];
                        
                        $listeproduit= $produit->recherche($search_value);
                        }
 

?>

<!-- html -->
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-profile.html" />

	<title>Profile | AdminKit Demo</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
<style>
  .error{
    color: red;
}
</style>
<script type="text/javascript" src="valida.js"></script>
</head>

<body>
<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
					<span class="align-middle">AdminKit</span>
				</a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item " >
						<a class="sidebar-link" href="trouverUser.php">
							<i class="align-middle" data-feather="user"></i> <span
								class="align-middle">Utilisateurs</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="afficher_categ.php">
							<i class="align-middle" data-feather="database"></i> <span class="align-middle">Categorie</span>
						</a>
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="afficher_produit.php">
							<i class="align-middle" data-feather="shopping-bag"></i> <span class="align-middle">Produit</span>
						</a>
						
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="afficherListedemande.php">
							<i class="align-middle" data-feather="message-square"></i> <span class="align-middle">Demandes</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="afficherListereservation.php">
							<i class="align-middle" data-feather="message-circle"></i> <span class="align-middle">Reservations</span>
						</a>
					</li>

					<li class="sidebar-item  ">
						<a class="sidebar-link" href="Listevenements.php">
              <i class="align-middle" data-feather="aperture"></i> <span class="align-middle">Evenements</span>
            </a>
					</li>
					<li class="sidebar-item ">
						<a class="sidebar-link" href="Listparticipants.php">
              <i class="align-middle" data-feather="users"></i> <span class="align-middle">Participations</span>
            </a>
			</li>

            <li class="sidebar-item  ">
						<a class="sidebar-link" href="Listassociation.php">
              <i class="align-middle" data-feather="home"></i> <span class="align-middle">Associations</span>
            </a>
			</li>

            <li class="sidebar-item ">
						<a class="sidebar-link" href="Listdon.php">
              <i class="align-middle" data-feather="heart"></i> <span class="align-middle">Don</span>
            </a>
			</li>

					

				
			</div>
		</nav>

		<thead>            
         
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Liste des produits :</strong>
                       
                                


 

<div class="wrapper">
  <!-- Navbar -->
  
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  
      <!-- Sidebar Menu -->
     

  <!-- Content Wrapper. Contains page content -->
  <button style="margin-left: 20px;" class="btn btn-primary" type="submit"><a style="color: white; " href="ajouter_produit.php">ajouter un produit</a></button>

			           <div class="form-group">
                            <div class="input-group input-group-lg">
                                <!--<input type="search" class="form-control form-control-lg" placeholder="entrer votre produit" value="">
								-->

                                   <form method="get" action="afficher_produit.php"  class="mb-4">
                                   <input type="text" class="form-control" name="recherche" placeholder="chercher un produit">
                                   <br>
                                   <input type="submit" class="btn btn-primary "  value="Chercher">
                                   <style>
							                  	  input{
                                         right:-800px;
                                         margin:-11px;

                                        position:relative;
                                      
                                        }
								                    </style>
                                    </form>

                            

<!-- jQuery -->
			  <!-- card-body-->
			  
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped" name="prod">
                  <thead>
				  
                  <tr>
                 
                    <th>Id_Produit</th>
                    <th>Réfference</th>
                    <th>Nom_Produit</th>
                    <th>Categorie</th>
                    <th>pt</th>
                    <th>Quantite</th>
                    <th>Image</th>
                    <th>Modifier</th>
					<th>Supprimer</th>
                   
					
                  </tr>
				  
				  
                  </thead>
				  
                  <tbody>
                  
                  
				  <?php
				  foreach($listeproduit as $row){
				  ?>

                  <tr>
                    <td> <?php echo $row['id_produit'];?></td>
                    <td> <?php echo $row['idC'];?></td>
					<td> <?php echo $row['nom_produit'];?></td>
					<td> <?php echo $row['categorie'];?></td>
					<td> <?php echo $row['pt'];?></td>
					 <td> <?php echo $row['quantite'];?></td>
                     
					 <!--
					 <td> <img src="../View/assets/images/ <?php echo $row['image'];?>"  width="90" height="90" alt="Image"></td>
                       -->
                        
                      <td><?PHP echo "<img  src='../View/assets/images/".$row['image']."' >"; ?>
					  <style>
					  img{
						width: 90px;
                        height:	90px;					
					  }
					  
					  </style>
					  
					  </td>					   

					
					 
					 
					 
                     <td><a type="button" class="btn btn-primary" href = "modifierproduit1.php?id_produit=<?= $row['id_produit'] ?>">modifier</a></td>                            
                     <td> 
                     <form method="POST" action="../View/supprimer_produit.php">
                                        <button type="submit"  id="supprimer"  class="btn btn-danger" onclick="Supp()">supprimer</button>
                                        <input type="hidden" value=<?PHP echo $row['id_produit']; ?> name="id_produit">
                                        </form>
                                        
                                       
                                   </td>    
						                                                                                                                                                                                    


                   </tr> 
                                     				  
				  </tbody>
				  
				  
                  <?PHP
				      }
		  	         ?>
                    	
               
                 <!-- tri -->
                 <div>
                <a class="btn btn-success" href="trier_produit.php?id_produit=<?PHP echo $row['nom_produit']; ?>"> Trier par pt </a>
				
				  
				  				  <a class="btn btn-primary" onclick="refresh()"> rafraichir la page </a>
								  <style>
								  button{
                                       margin: 13px 12px 12px 10px;
                                        }
								  </style>
								 
                  </div>

                  						
				</table>
				<br>
				
				

                <tbody>
				 
			
                				 
         </tbody>			
              </table>


              <script>
   function print(pdf)
       {
                    // Créer un IFrame.
        var iframe = document.createElement('iframe');  
        // Cacher le IFrame.    
        iframe.style.visibility = "hidden"; 
        // Définir la source.    
        iframe.src = pdf;        
        // Ajouter le IFrame sur la page Web.    
        document.body.appendChild(iframe);  
        iframe.contentWindow.focus();       
        iframe.contentWindow.print(); // Imprimer.
             }
</script>

            <br>
                  <!------------- EXCEL---------------->
		
		<button class="btn btn-info" id="btnExport" onclick="exportReportToExcel(this)"><i class="far fa-file-excel"></i> export To Excel</button>
		               <!-- PDF button-->
        <button class="btn btn-primary" onclick="print('afficher_produit.php')">Imprimer le PDF</button>
         <br>     
         <?php 
				for ($x = 1; $x <= $totalP; $x++) :

?>

    <a href="?page=<?php echo $x; ?>&per-page=<?php echo $perpage; ?>"><?php echo $x; ?><style>margin:  13px 12px 12px 10px; </style> </a>

<?php endfor; ?>           
        </div>
      
    </div>
  
    </thead>


              </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
        
<!---->
<script>
function refresh(){
window.location.reload();
}


function exportReportToExcel() {
let table = document.getElementsByTagName("table"); // you can use document.getElementById('tableId') as well by providing id to the table tag
TableToExcel.convert(table[0], { // html code may contain multiple tables so here we are refering to 1st table tag
name: `gestion des produits.xlsx`, // fileName you could use any name
sheet: {
name: 'Produits' // sheetName
}
});
}

</script>
<!-- Excel table-->
<script src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script>







        <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>


	
    <footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>AdminKit</strong></a> - <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>Bootstrap Admin Template</strong></a>								&copy;
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>

</body>	
				
			    
</body>
</html>
