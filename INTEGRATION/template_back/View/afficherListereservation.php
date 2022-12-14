<?php
/*include '../../controller/reservationC.php';*/
require_once('../Controller/reservationC.php');

$reservationC = new reservationC();
if (isset($_GET['label']) && !empty($_GET['label'])) {
    $Listereservation = $reservationC->afficherreservation($_GET['label']);
}
 else {
    $Listereservation= $reservationC->afficherListereservations();
}

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
					<li class="sidebar-item">
						<a class="sidebar-link" href="afficherListedemande.php">
							<i class="align-middle" data-feather="message-square"></i> <span class="align-middle">Demandes</span>
						</a>
					</li>

					<li class="sidebar-item active">
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

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						
						<li class="nav-item dropdown">
							
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
								
								
							</div>
						</li>
						
					</ul>
				</div>
			</nav>
			<div>
			<main class="content">
        <form action="" method="GET">
            <input type="text" name="label" id="label" placeholder="coordonnées de l'utulisateur">
            <input type="submit" value="Search">
        </form>
    </div>
			
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Liste Des reservation</h1>

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
													<th class="text-center">Idreservation</th>
													<th class="text-center">Firstname</th>
													<th class="text-center">lastName</th>
													<th class="text-center">address</th>
													<th class="text-center">phonenumber</th>
													<th class="text-center">reff</th>


												</tr>
											</thead>
											<tbody>
												<?php foreach ( $Listereservation as $reservation) {
												?>
													<tr>
														<td class="text-center"><?= $reservation['idReservation']; ?></td>
														<td class="text-center"><?= $reservation['lastName']; ?></td>
														<td class="text-center"><?= $reservation['firstName']; ?></td>
														<td class="text-center"><?= $reservation['address']; ?></td>
														<td class="text-center"><?= $reservation['phonenumber']; ?></td>
														<td class="text-center"><?= $reservation['reff']; ?></td>
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
								<a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>AdminKit</strong></a> - <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>Bootstrap Admin
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


							Lefi Amine
15:28 (il y a 0 minute)
À moi



						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>

</body>

</html>