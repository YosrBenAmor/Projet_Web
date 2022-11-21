<?php

include '../Controller/associationC.php';

$error = "";

// create association
$association = null;

// create an instance of the controller
$associationC = new associationC();
if (
    isset($_POST["nom_ass"]) &&
    isset($_POST["img_ass"]) &&
    isset($_POST["datefondation"]) &&
    isset($_POST["objectif_ass"]) &&
    isset($_POST["adresse_ass"])&&
    isset($_POST["num_ass"]) &&
    isset($_POST["nbpt_ass"]) &&
    isset($_POST["email_ass"]) 
) {
    if (
        !empty($_POST['nom_ass']) &&
        !empty($_POST["img_ass"]) &&
        !empty($_POST["datefondation"])&&
        !empty($_POST["objectif_ass"])&&
        !empty($_POST["adresse_ass"])&&
        !empty($_POST["num_ass"])&&
        !empty($_POST["nbpt_ass"])&&
        !empty($_POST["email_ass"])
       
    ) {
        $association = new association(
           
            $_POST['nom_ass'],
            $_POST['img_ass'],
            $_POST['datefondation'],
            $_POST['objectif_ass'],
            $_POST['adresse_ass'],
            $_POST['num_ass'],
            $_POST['nbpt_ass'],
            $_POST['email_ass']
            
        );
        $associationC->addassociation($association);
        header('Location:Listassociation.php');
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

					
					</li>
                    <li class="sidebar-item">
						<a class="sidebar-link" href="evenement.html">
              <i class="align-middle" data-feather="book"></i> <span class="align-middle">Evenements</span>
            </a>
					</li>
					<li class="sidebar-item  active ">
						<a class="sidebar-link" href="Listassociation.php">
              <i class="align-middle" data-feather="book"></i> <span class="align-middle">Associations</span>
            </a>
					</li>
					<li class="sidebar-item ">
						<a class="sidebar-link" href="Listdon.php">
              <i class="align-middle" data-feather="book"></i> <span class="align-middle">Dons</span>
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
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">UNE ASSOCIATION</h1>
						 
     
 

    <form name ="mayssa" onsubmit="return validateForm(event)"  action="" method="POST" >
    <div class="card">
            <div class="card-header">
                                <h5 class="card-title mb-0">NOM D'ASSOCIATION</h5>
                            </div>
                            <div class="card-body">
                                <input type="text" class="form-control" placeholder="Nom d'association" id="nom_ass" name="nom_ass">
								
                            </div>
							<p id="errorN" class="error"></p>
                        </div>

            <div class="card">
           <div class="card-header">
                                <h5 class="card-title mb-0">IMAGE D'ASSOCIATION</h5>
                            </div>
                            <div class="card-body">
                            <input type="text" class="form-control"  id="img_ass" name="img_ass">
                            </div>
                            </div>

               <div class="card">
           <div class="card-header">
                                <h5 class="card-title mb-0">DATE DE FONDATION</h5>
                            </div>
                            <div class="card-body">
                                <input type= "date" class="form-control"  id="datefondation" name="datefondation">
                            </div>
							<p id="errorDF" class="error"></p>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">OBJECTIVE D'ASSOCIATION</h5>
                            </div>
                            <div class="card-body">
                                <textarea type="text"   id="objectif_ass" name="objectif_ass" rows="5" cols="135" ></textarea>
								<p id="errorOB" class="error"></p>
                            </div>
                        </div>

                    

                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">ADRESSE D'ASSOCIATION</h5>
                            </div>
                            <div class="card-body">
                                <input type="text" class="form-control"  id="adresse_ass" name="adresse_ass">
                            </div>
							<p id="errorAD" class="error">
                        </div>
                       
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">NUMERO D'ASSOCIATION</h5>
                            </div>
                            <div class="card-body">
                                <input type="text" class="form-control" id="num_ass" name="num_ass"   >
                            </div>
							<p id="errorNu" class="error"></p>
                        </div> 

                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">NOMBRE DU POINT</h5>
                            </div>
                            <div class="card-body">
                                <input type="number"   id="nbpt_ass" name="nbpt_ass"  >
                            </div>
							<p id="errorNP" class="error"></p>
                        </div> 
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">EMAIL</h5>
                            </div>
                            <div class="card-body">
                                <input type="text"   id="email_ass" name="email_ass"  >
                            </div>
							<p id="errorEmail" class="error"></p>
                        </div> 
						 

                
            
                    <input class="btn btn-success" type="submit" value="Envoyer"  > 
               
                    <input type="reset" value="Annuler" >
                
    </form>



            
  </a>
					

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
