<?php
include '../Controller/associationC.php';
$associationC = new associationC();

if (isset($_GET['nom_ass']) && !empty($_GET['nom_ass'])) {
    $list = $associationC->showa($_GET['nom_ass']);
} else {
    $list = $associationC->listassociation();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/upgrade-to-pro.html" />

    <title>Upgrade to Pro | AdminKit Demo</title>

    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
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

					<li class="sidebar-item">
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

            <li class="sidebar-item active ">
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

        <div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>
			</nav>

            <main class="content">
                <div class="container-fluid p-0">
                <div class="mb-3"> 

                    <h1 class="h3 mb-3">Liste Des Association</h1>
                    
                    <form action="" method="GET">
            <input type="text" name="nom_ass" id="nom_ass" placeholder="Enter nom d'association">
            <input type="submit" value="Search">
        </form>
                    <a class="badge bg-dark text-white ms-2" href="addassociation.php"> </a>

                    <div class= row align-items-center> 
                        <div class="col-40 col-md-40 col-lg-55 col-xl-99 col-xxl-45 mx-auto">
                            <div class="card">
                                
                                <div class="card-body">
                                    <div class="table-responsive table-upgrade">
                                        <table class="table">
                                            <thead>
                                                <tr>
                            
            <th class="text-center">Nom_ass</th>
            <th class="text-center">Img_ass</th>
            <th class="text-center">Datefondation</th>
            <th class="text-center">Objectif_ass</th>
            <th class="text-center">Adresse_ass</th>
            <th class="text-center">Num_ass</th>
            <th class="text-center">Nbpt_ass</th>
            <th class="text-center">Email_ass</th>
            <th class="text-center">Option</th>
                                                </tr>
                                                <?php
        foreach ($list as $association) {
        ?>
        <tr>
        
            <td><?php echo $association['nom_ass']; ?></td>
            <td><img src="img/<?php echo $association['img_ass']; ?>"     width="100"    height="100"></td>
            <td><?php echo $association['datefondation']; ?></td>
            <td><?php echo $association['objectif_ass']; ?></td>
            <td><?php echo $association['adresse_ass']; ?></td>
            <td><?php echo $association['num_ass']; ?></td>
            <td><?php echo $association['nbpt_ass']; ?></td>
            <td><?php echo $association['email_ass']; ?></td>
               
                </div>
        </div>
           
           </tr>
   
           <?php
           }
           ?>
                                               </thead>
                                                  
                                           </table>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
   
                   
                                   
   
                   <div class="col-12 col-lg-6">
                       <div class="card">
                           <div class="card-header">
                               <h5 class="card-title">Statistiques</h5>
                               <h6 class="card-subtitle text-muted">Les associations les plus bénéficaires</h6>
                           </div>
                           <div class="card-body">
                               <div class="chart chart-sm">
                                   <canvas id="chartjs-pie"></canvas>
                               </div>
                           </div>
                       </div>
                   </div>
                   
			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="https://adminkit.io/"
									target="_blank"><strong>AdminKit</strong></a> - <a class="text-muted"
									href="https://adminkit.io/" target="_blank"><strong>Bootstrap Admin
										Template</strong></a> &copy;
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

</html>


