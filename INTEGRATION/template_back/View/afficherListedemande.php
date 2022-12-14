<?php
include '../controller/demandeC.php';


$demandeC = new demandeC();
$listedemande = $demandeC->afficherListedemande();

$nb_accepter = $demandeC -> count_accepter();
$nb_a = array_values($nb_accepter)[0];
$nb_refuser = $demandeC -> count_refuser();
$nb_r = array_values($nb_refuser)[0];
?>
<html>

<head></head>

<!DOCTYPE html>
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
					<li class="sidebar-item active">
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
		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Liste Des demande</h1>

					<div class=row align-items-center>
						<div class="col-40 col-md-40 col-lg-55 col-xl-99 col-xxl-45 mx-auto">
							<div class="card">
								<!--<img class="card-img-top"
									src="https://assets.adminkit.io/banners/adminkit-bootstrap-5-admin-template-social-preview.png"
									alt="AdminKit - Free & Premium Bootstrap 5 Admin Template">
								<div class="card-header">
									<h5 class="card-title">AdminKit PRO</h5>
									<h6 class="card-subtitle text-muted">Looking for more components and customizations?
										Check out our premium version. </h6>
								</div>-->
								<div class="card-body">
									<div class="table-responsive table-upgrade">
										<table class="table">
											<thead>
												<tr>
													<th class="text-center">Iddemande</th>
													<th class="text-center">name</th>
													<th class="text-center">mdp</th>
													<th class="text-center">email</th>
													<th class="text-center">reffd</th>
													<th class="text-center">telp</th>
                                                    <th class="text-center">status</th>


												</tr>
											</thead>
											<tbody>
												<?php foreach ($listedemande as $demande) {
												?>
													<tr>
														<td class="text-center"><?= $demande['iddemande']; ?></td>
														<td class="text-center"><?= $demande['mdp']; ?></td>
														<td class="text-center"><?= $demande['name']; ?></td>
														<td class="text-center"><?= $demande['email']; ?></td>
														<td class="text-center"><?= $demande['reffd']; ?></td>
														<td class="text-center"><?= $demande['telp']; ?></td>
														<td class="text-center"><?= $demande['status']; ?></td>
													</tr>
												<?php } ?>
											</tbody>
											<!--<tbody>
												<tr>
													<td class="text-center"></td>
													<td class="text-center">
														<a target="_blank" href="https://adminkit.io/"
															class="btn btn-light">Download</a>
													</td>
													<td class="text-center">
														<a target="_blank" href="https://adminkit.io/pricing"
															class="btn btn-primary">Upgrade to Pro</a>
													</td>
												</tr>
												<tr>
													<td>Demo Pages</td>
													<td class="text-center">15</td>
													<td class="text-center"><strong>45+</strong></td>
												</tr>
												<tr>
													<td>Plugins</td>
													<td class="text-center">1</td>
													<td class="text-center"><strong>10+</strong></td>
												</tr>
												<tr>
													<td>Color Schemes</td>
													<td class="text-center">1</td>
													<td class="text-center"><strong>3</strong></td>
												</tr>
												<tr>
													<td>All Bootstrap 5 Components</td>
													<td class="text-center"><span role="img" aria-label="no">❌</span>
													</td>
													<td class="text-center"><span role="img" aria-label="yes">✔</span>
													</td>
												</tr>
												<tr>
													<td>Dark Mode 🌙</td>
													<td class="text-center"><span role="img" aria-label="no">❌</span>
													</td>
													<td class="text-center"><span role="img" aria-label="yes">✔</span>
													</td>
												</tr>
												<tr>
													<td>Compact Sidebar</td>
													<td class="text-center"><span role="img" aria-label="no">❌</span>
													</td>
													<td class="text-center"><span role="img" aria-label="yes">✔</span>
													</td>
												</tr>
												<tr>
													<td>Calendar</td>
													<td class="text-center"><span role="img" aria-label="no">❌</span>
													</td>
													<td class="text-center"><span role="img" aria-label="yes">✔</span>
													</td>
												</tr>
												<tr>
													<td>Advanced Forms</td>
													<td class="text-center"><span role="img" aria-label="no">❌</span>
													</td>
													<td class="text-center"><span role="img" aria-label="yes">✔</span>
													</td>
												</tr>
												<tr>
													<td>Drag and Drop</td>
													<td class="text-center"><span role="img" aria-label="no">❌</span>
													</td>
													<td class="text-center"><span role="img" aria-label="yes">✔</span>
													</td>
												</tr>
												<tr>
													<td>Toast Notifications</td>
													<td class="text-center"><span role="img" aria-label="no">❌</span>
													</td>
													<td class="text-center"><span role="img" aria-label="yes">✔</span>
													</td>
												</tr>
												<tr>
													<td>WYSIWYG Editors</td>
													<td class="text-center"><span role="img" aria-label="no">❌</span>
													</td>
													<td class="text-center"><span role="img" aria-label="yes">✔</span>
													</td>
												</tr>
												<tr>
													<td>Premium Support</td>
													<td class="text-center"><span role="img" aria-label="no">❌</span>
													</td>
													<td class="text-center"><span role="img" aria-label="yes">✔</span>
													</td>
												</tr>
												<tr>
													<td></td>
													<td class="text-center">Free</td>
													<td class="text-center">Starting from $59</td>
												</tr>
												<tr>
													<td class="text-center"></td>
													<td class="text-center">
														<a target="_blank" href="https://adminkit.io/"
															class="btn btn-light">Download</a>
													</td>
													<td class="text-center">
														<a target="_blank" href="https://adminkit.io/pricing"
															class="btn btn-primary">Upgrade to Pro</a>
													</td>
												</tr>
											</tbody>-->
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>



			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								
							</p>
							<div class="col-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Pie Chart</h5>
                                    <h6 class="card-subtitle text-muted"> sattistique</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart chart-sm">
                                        <canvas id="chartjs-pie"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
	<script>
        document.addEventListener("DOMContentLoaded", function() {
            // Pie chart
            new Chart(document.getElementById("chartjs-pie"), {
                type: "pie",
                data: {
                    labels: ["demandea accepter", "demande refuser"],
                    datasets: [{
                        data: [<?php echo $nb_r; ?> , <?php echo $nb_a ;?>],
                        backgroundColor: [
                            window.theme.primary,
                            window.theme.warning,
                        
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
	<a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>AdminKit</strong></a> - <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>Bootstrap Admin
										Template</strong></a> &copy;
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