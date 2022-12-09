<?php
include '../Controller/evenementC.php';
$evenementC = new evenementC();
$list = $evenementC->listevenements();

if (isset($_GET['attribut']) && !empty($_GET['attribut'])) {
    $list = $evenementC->search_nor($_GET['attribut']);
} else {
    $list = $evenementC->listevenements();
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

	<link rel="preconnect" href="https://fonts.gstatic.com">
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

					<li class="sidebar-item">
						<a class="sidebar-link" href="trouverUser.php">
							<i class="align-middle" data-feather="sliders"></i> <span
								class="align-middle">Utilisateurs</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-profile.html">
							<i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
						</a>
					</li>

					<li class="sidebar-item ">
						<a class="sidebar-link" href="afficherListedemande.php">
							<i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Demandes</span>
						</a>
					</li>

					<li class="sidebar-item ">
						<a class="sidebar-link" href="afficherListereservation.php">
							<i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Reservations</span>
						</a>
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="Listevenements.php">
              <i class="align-middle" data-feather="book"></i> <span class="align-middle">Evenements</span>
            </a>
					</li>
					<li class="sidebar-item ">
						<a class="sidebar-link" href="Listparticipants.php">
              <i class="align-middle" data-feather="book"></i> <span class="align-middle">Participations</span>
            </a>
			</li>

			<li class="sidebar-item ">
						<a class="sidebar-link" href="Listassociation.php">
              <i class="align-middle" data-feather="book"></i> <span class="align-middle">Associations</span>
            </a>
			</li>

            <li class="sidebar-item ">
						<a class="sidebar-link" href="Listdon.php">
              <i class="align-middle" data-feather="book"></i> <span class="align-middle">Don</span>
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

					<h1 class="h3 mb-3">Liste Des Evenements</h1>
			
					<div class= row align-items-center> 
						<div class="col-40 col-md-40 col-lg-55 col-xl-99 col-xxl-45 mx-auto">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive table-upgrade">
									<form action="" method="GET">
            <input type="text" name="attribut" id="attribut" placeholder="chercher par nom ou lieu d'évenement">
            <input type="submit" value="Chercher" class="btn btn-success">
        </form>
										<table class="table">
											<thead>
												<tr>
												<th class="text-center">IMAGE D'ÉVÉNEMENT</th>
												   <th class="text-center">NOM D'ÉVÉNEMENT</th>
													<th class="text-center">DATE</th>
													<th class="text-center">LIEU</th>
													<th class="text-center">DURÉE</th>
													<th class="text-center">ASSOCIATION ASSOCIÉE</th>
													<th class="text-center">SOMME</th>
													<th class="text-center">NOMBRE DE POINTS EN RÉCOMPENSE</th>
													<th class="text-center">INTERDIT À CEUX QUI SOUFFRENT DE</th>
													<th class="text-center">NOTE</th>
													<th class="text-center">OPTION</th>
												</tr>
												<?php
		foreach ($list as $evenement) {
		?>
        <tr>
		<td><div class="card-body text-center"><img src="images/<?php echo $evenement['img_eve']; ?>  "  width="100"    height="50"></div></td>
		    <td><div class="card-body text-center"><?php echo $evenement['nom_eve']; ?></div></td>
			<td><div class="card-body text-center"><?php echo $evenement['date_eve']; ?></div></td>
			<td><div class="card-body text-center" id ="lieu_eve"><?php echo $evenement['lieu_eve']; ?></div></td>
			<td><div class="card-body text-center"><?php echo $evenement['duree_eve']; ?></div></td>
			<td><div class="card-body text-center"><?php echo $evenement['association_ga']; ?></div></td>
			<td><div class="card-body text-center"><?php echo $evenement['somme']; ?></div></td>
			<td><div class="card-body text-center"><?php echo $evenement['nb_pt_eve']; ?></div></td>
            <td><div class="card-body text-center"><?php echo $evenement['maladie']; ?></div></td>
			<td><div class="card-body text-center"><?php echo $evenement['note']; ?></div></td>
			<td>
		
			<td>
			<button><a href="updateevenement.php?id_eve=<?php echo $evenement['id_eve']; ?>" name="id_eve" ><i class="align-middle me-2" data-feather="edit-2"></a></i></button>
			<button><i class="align-middle me-2"><span role="img" aria-label="no">  <a href="deleteevenement.php?id_eve=<?php echo $evenement['id_eve']; ?>">❌</span></a> </i></button>
			</td>
			</tr>
         <?php
         }
        ?>
         </div>
           
       </thead>
											
								<div class="card-body text-center">
                                <div class="mb-3">
								<td>	<a href="addevenement.php">  <button class="btn btn-warning" >Ajouter</a></button></td>
								
								</div> </div>


										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				
								

				<div class="col-40 col-md-40 col-lg-55 col-xl-99 col-xxl-45 mx-auto">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title">Statistiques</h5>
							<h6 class="card-subtitle text-muted">Les évenements les plus recommandées</h6>
						</div>
						<div class="card-body">
							<div class="chart chart-sm">
								<canvas id="chartjs-pie"></canvas>
							</div>
						</div>
					</div>
				</div>
				<script>
					
      
		
					document.addEventListener("DOMContentLoaded", function() {
						//statistiques
						new Chart(document.getElementById("chartjs-pie"), {
							type: "pie",
							data: {
								labels: ["Tunis", "Sfax", "Sousse"],
								datasets: [{
									data: [<?php   echo  $tunis = $evenementC->tunis(); ?>, <?php   echo  $sfax = $evenementC->sfax(); ?>, <?php   echo  $sousse = $evenementC->sousse(); ?>],
									backgroundColor: [
										window.theme.primary,
										window.theme.warning,
										window.theme.danger
										
									],
									borderColor: "transparent"
								}]
							},
							options: {
								maintainAspectRatio: false,
								legend: {
									display: false
								}
							}
						});
					});
				</script>
                   
			</main> 

           

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














