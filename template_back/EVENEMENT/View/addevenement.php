<?php

include '../Controller/evenementC.php';

$error = "";

// create evenement
$evenement = null;

// create an instance of the controller
$evenementC = new evenementC();
if (
    isset($_POST["nom_eve"]) &&
    isset($_POST["lieu_eve"]) &&
    isset($_POST["date_eve"]) &&
    isset($_POST["lieu_eve"]) && 
    isset($_POST["duree_eve"]) && 
    isset($_POST["association_ga"]) &&
    isset($_POST["somme"]) &&
    isset($_POST["nb_pt_eve"]) &&
    isset($_POST["maladie"]) 

) {
    if (
        !empty($_POST['nom_eve']) &&
        !empty($_POST["date_eve"]) && 
        !empty($_POST["lieu_eve"]) && 
        !empty($_POST["duree_eve"]) && 
        !empty($_POST["association_ga"]) &&
        !empty($_POST["somme"]) &&
        !empty($_POST["nb_pt_eve"]) &&
        !empty($_POST["maladie"])
       
    ) {
        $evenement = new evenement(
           
            $_POST['nom_eve'],
            $_POST['date_eve'],
            $_POST['lieu_eve'],
            $_POST['duree_eve'],
            $_POST['association_ga'],
            $_POST['somme'],
            $_POST['nb_pt_eve'],
            $_POST['maladie']
            
        );
        $evenementC->addevenement($evenement);
        header('Location:Listevenements.php');
    } else
        $error = "Missing information";
}


?>
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
	<script type="text/javascript" src="validation.js"></script>

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
						<a class="sidebar-link" href="index.html">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
					</li>

					<li class="sidebar-item ">
						<a class="sidebar-link" href="pages-profile.html">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-sign-in.html">
              <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Sign In</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-sign-up.html">
              <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Sign Up</span>
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
						<a class="sidebar-link" href="association.html">
              <i class="align-middle" data-feather="book"></i> <span class="align-middle">Associations</span>
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
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<span class="indicator">4</span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									4 New Notifications
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-danger" data-feather="alert-circle"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Update completed</div>
												<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
												<div class="text-muted small mt-1">30m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-warning" data-feather="bell"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Lorem ipsum</div>
												<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-primary" data-feather="home"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Login from 192.186.1.8</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-success" data-feather="user-plus"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">New connection</div>
												<div class="text-muted small mt-1">Christina accepted your request.</div>
												<div class="text-muted small mt-1">14h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="message-square"></i>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
									<div class="position-relative">
										4 New Messages
									</div>
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Vanessa Tucker</div>
												<div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
												<div class="text-muted small mt-1">15m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="William Harris">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">William Harris</div>
												<div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Christina Mason">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Christina Mason</div>
												<div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
												<div class="text-muted small mt-1">4h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Sharon Lessman</div>
												<div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all messages</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark">Charles Hall</span>
              </a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
            
            <main class="content">
        
        
       
        
        <form action="" method="POST" name="mayssa" onsubmit="return validateForm(event)">
        <button class="btn btn-warning"><a href="Listevenements.php">Retour à la liste des évenements</a></button>
        
                          
                 


                <div class="card">
				<div class="card-header">
									<h5 class="card-title mb-0">NOM D'ÉVÉNEMENT</h5>
								</div>
								<div class="card-body">
									<input type="text" class="form-control" placeholder="Nom d'evenement" id="nom_eve" name="nom_eve">
								</div>
								<p id="nomER" class="error"></P>
							</div>




                    
                <div class="card">
                <div class="card-header">
									<h5 class="card-title mb-0">DATE</h5>
								</div>
								<div class="card-body">
									<input type="datetime-local" id="date_eve" name="date_eve"  class="form-control" >
								</div>
								<p id="dateER" class="error"></P>
                                </div>
 
                 <div class="card">
				<div class="card-header">
									<h5 class="card-title mb-0">LIEU</h5>
								</div>
								<div class="card-body">
									<input type="text" class="form-control" placeholder="LIEU" id="lieu_eve" name="lieu_eve">
								</div>
								<p id="lieuER" class="error"></P>
							</div>

                            <div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">DURÉE</h5>
								</div>
								<div class="card-body">
									<input type="time"   id="duree_eve" name="duree_eve" >
								</div>
								<p id="dureeER" class="error"></P>
							</div>

                        

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">ASSOCIATION ASSOCIÉE</h5>
								</div>
								<div class="card-body">
									<input type="text" class="form-control"  placeholder="ASSOCIATION ASSOCIÉE" id="association_ga" name="association_ga">
								</div>
								<p id="associationER" class="error"></P>
							</div>
                           
                            <div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">SOMME</h5>
								</div>
								<div class="card-body">
									<input type="number" id="somme" name="somme"    placeholder="SOMME">
								</div>
								<p id="sommeER" class="error"></P>
							</div>

                            <div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">NOMBRE DE POINTS EN RÉCOMPENSE </h5>
								</div>
								<div class="card-body">
									<input type="number" id="nb_pt_eve" name="nb_pt_eve"    placeholder="NOMBRE DE POINTS EN RÉCOMPENSE">
								</div>
								<p id="pointER" class="error"></P>
							</div>

                            <div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">INTERDIT À CEUX QUI SOUFFRENT DE</h5>
								</div>
								<div class="card-body">
									<select class="form-select mb-3" type="text" id="maladie" name="maladie" >
                                       <option selected>Sélectionner </option>
                                       <option>L’asthme</option>
                                       <option>La polyarthrite rhumatoïde</option>
                                       <option>La bronchopneumopathie chronique obstructive </option>
		                               <option>L’infarctus ou l'insuffisance coronarienne</option>
		                               <option>L'hypertension artérielle</option>
                                    </select>
		                        </div>
								<p id="maladieER" class="error"></P>
							</div>

							<input class="btn btn-success" type="submit" value="Envoyer"> 
                   
                        <input type="reset" value="Annuler" >

						</form>
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

</html>