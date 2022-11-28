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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="refresh" content="30">
  <title> afficher produit </title>
  <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>


   
  
</head>
<body class="hold-transition sidebar-mini">
   <!-- Left Panel -->

   <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="./"> <i class="menu-icon fa fa-dashboard"></i> Espace Admin </a>
                    </li>
                    <h3 class="menu-title"> Éléments IU</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                        <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="afficher_categ.php">Categories</a></li>
                            <li><i class="fa fa-table"></i><a href="afficher_produit.php">Produits</a></li>
                             </ul>
                    </li>
                

                    <h3 class="menu-title">Icons</h3><!-- /.menu-title -->
                    <li>
                        <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Graphiques</a>
                        <ul class="sub-menu children dropdown-menu">

<li><i class="menu-icon fa fa-area-chart"></i><a href="../view/linechart/stat.php"> GraphiqueProduit</a></li>
<li><i class="menu-icon fa fa-area-chart"></i><a href="../View/linechart/stat_c.php"> GraphiqueCategorie</a></li>

                        </ul>
                    </li>
                    
                    <h3 class="menu-title">Suppléments</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">S'identifier</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">S'inscrire</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Mot De Passe Oublier</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->
    <div id="right-panel" class="right-panel">

<!-- Header-->
<header id="header" class="header">

    <div class="header-menu">

        <div class="col-sm-7">
            <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
            <div class="header-left">
                <button class="search-trigger"><i class="fa fa-search"></i></button>
                <div class="form-inline">
                    <form class="search-form">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                        <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                    </form>
                </div>

                <div class="dropdown for-notification">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bell"></i>
                        <span class="count bg-danger">5</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="notification">
                        <p class="red">vous avez 3 Notifications</p>
                        <a class="dropdown-item media bg-flat-color-1" href="#">
                        <i class="fa fa-check"></i>
                        <p>Serveur # 1 surchargé.</p>
                    </a>
                        <a class="dropdown-item media bg-flat-color-4" href="#">
                        <i class="fa fa-info"></i>
                        <p>Serveur #2  surchargé.</p>
                    </a>
                        <a class="dropdown-item media bg-flat-color-5" href="#">
                        <i class="fa fa-warning"></i>
                        <p>Serveur # 1 surchargé.</p>
                    </a>
                    </div>
                </div>

                <div class="dropdown for-message">
                   
                    <div class="dropdown-menu" aria-labelledby="message">
                        <p class="red">vous avez 4 Mails</p>
                        <a class="dropdown-item media bg-flat-color-1" href="#">
                        <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                        <span class="message media-body">
                            <span class="name float-left">Jonathan Smith</span>
                            <span class="time float-right"> Juste maintenant </span>
                                <p>salut,c'est un  example msg</p>
                        </span>
                    </a>
                        <a class="dropdown-item media bg-flat-color-4" href="#">
                        <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                        <span class="message media-body">
                            <span class="name float-left">Jack Sanders</span>
                            <span class="time float-right"> Il y a 5 minutes</span>
                                <p>salut,c'est un  example msg</p>
                        </span>
                    </a>
                        <a class="dropdown-item media bg-flat-color-5" href="#">
                        <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                        <span class="message media-body">
                            <span class="name float-left">Cheryl Wheeler</span>
                            <span class="time float-right"> Il y a 10 minutes </span>
                                <p>salut,c'est un  example msg</p>
                        </span>
                    </a>
                        <a class="dropdown-item media bg-flat-color-3" href="#">
                        <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                        <span class="message media-body">
                            <span class="name float-left">Rachel Santos</span>
                            <span class="time float-right">Il y a 15 minutes </span>
                                <p>salut,c'est un  example msg</p>
                        </span>
                    </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-5">
            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                </a>

                <div class="user-menu dropdown-menu">
                    <a class="nav-link" href="#"><i class="fa fa-user"></i> Mon Profile</a>

                    <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                    <a class="nav-link" href="#"><i class="fa fa-cog"></i> paramétre</a>

                    <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Se déconnecter</a>
                </div>
            </div>

            <div class="language-select dropdown" id="language-select">
                <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                    <i class="flag-icon flag-icon-us"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="language">
                    <div class="dropdown-item">
                        <span class="flag-icon flag-icon-fr"></span>
                    </div>
                    <div class="dropdown-item">
                        <i class="flag-icon flag-icon-es"></i>
                    </div>
                    <div class="dropdown-item">
                        <i class="flag-icon flag-icon-us"></i>
                    </div>
                    <div class="dropdown-item">
                        <i class="flag-icon flag-icon-it"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>

</header><!-- /header -->
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Espace Admin</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Espace Admin</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active"> table de donnée  </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Liste des produits :</strong>
                            </div>
                            <div class="card-body">
                                


 

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
                    <th>Prix</th>
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
					<td> <?php echo $row['prix'];?></td>
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
                <a class="btn btn-success" href="trier_produit.php?id_produit=<?PHP echo $row['nom_produit']; ?>"> Trier par prix </a>
				
				  
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


		
				
			    
</body>
</html>
