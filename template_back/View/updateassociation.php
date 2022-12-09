<?php
include '../Controller/associationC.php';
$error = "";
$id=$_GET["id_ass"];
// create association
// create an instance of the controller
$associationC = new associationC();

$association = $associationC->showassociation($id);
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
        $associationC->updateassociation($association,$id);
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

					<li class="sidebar-item " >
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

					<li class="sidebar-item">
						<a class="sidebar-link" href="afficherListedemande.php">
							<i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Demandes</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="afficherListereservation.php">
							<i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Reservations</span>
						</a>
					</li>

					<li class="sidebar-item ">
						<a class="sidebar-link" href="Listevenements.php">
              <i class="align-middle" data-feather="book"></i> <span class="align-middle">Evenements</span>
            </a>
					</li>
					<li class="sidebar-item ">
						<a class="sidebar-link" href="Listparticipants.php">
              <i class="align-middle" data-feather="book"></i> <span class="align-middle">Participations</span>
            </a>
			</li>

            <li class="sidebar-item active ">
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
        
        

   
        <form  name ="mayssa" onsubmit="return validateForm(event)" action="" method="POST">
           
        <button class="btn btn-warning"><a href="Listassociation.php">Retour à la liste des associations</a></button>
        
                          
                 


                <div class="card">
				<div class="card-header">
									<h5 class="card-title mb-0">NOM D'ASSOCIATION </h5>
								</div>
								<div class="card-body">
									<input type="text" class="form-control" placeholder="NOM D'ASSOCIATION" id="nom_ass" name="nom_ass" value="<?php echo $association['nom_ass']; ?>">
								</div>
                                <p id="errorN" class="error"></p>
							</div>




                    
                <div class="card">
                <div class="card-header">
									<h5 class="card-title mb-0">IMAGE D'ASSOCIATION</h5>
								</div>
								<div class="card-body">
									<input type="text" id="img_ass" name="img_ass"  class="form-control" value="<?php echo $association['img_ass']; ?>">
								</div>
                                </div>
 
                 <div class="card">
				<div class="card-header">
									<h5 class="card-title mb-0">DATE DE FONDATION</h5>
								</div>
								<div class="card-body">
									<input type="text" class="form-control"  id="datefondation" name="datefondation" value="<?php echo $association['datefondation']; ?>">
								</div>
                                <p id="errorDF" class="error"></p>
							</div>

                            <div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">OBJECTIF D'ASSOCIATION</h5>
								</div>
								<div class="card-body">
									<input type="text"  placeholder= "OBJECTIF D'ASSOCIATION" id="objectif_ass" name="objectif_ass" value="<?php echo $association['objectif_ass']; ?>">
								</div>
                                <p id="errorOB" class="error"></p>
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">ADRESSE D'ASSOCIATION</h5>
								</div>
								<div class="card-body">
									<input type="text" class="form-control"  placeholder="ADRESSE D'ASSOCIATION" id="adresse_ass" name="adresse_ass" value="<?php echo $association['adresse_ass']; ?>">
								</div>
                                <p id="errorAD" class="error">
							</div>
                           
                            <div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">NUMÉRO D'ASSOCIATION</h5>
								</div>
								<div class="card-body">
									<input type="text" id="num_ass" name="num_ass"    placeholder="NUMÉRO D'ASSOCIATION" value="<?php echo $association['num_ass']; ?>">
								</div>
                                <p id="errorNu" class="error"></p>
							</div>

                            <div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">NOMBRE DE POINTS  </h5>
								</div>
								<div class="card-body">
									<input type="number" id="nbpt_ass" name="nbpt_ass"    placeholder="NOMBRE DE POINTS " value="<?php echo $association['nbpt_ass']; ?>">
								</div>
                                <p id="errorNP" class="error"></p>
							</div>
                            <div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">ÉMAIL D'ASSOCIATION </h5>
								</div>
								<div class="card-body">
									<input type="text" id="email_ass" name="email_ass"    placeholder="ÉMAIL D'ASSOCIATION" value="<?php echo $association['email_ass']; ?>">
								</div>
							</div>

                            
                            

                
                 <input class="btn btn-success" type="submit" value="Modifier"> 
                   
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