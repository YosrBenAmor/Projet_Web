<?php

include '../Controller/evenementC.php';

$error = "";
$id=$_GET["id_eve"];

$evenementC = new evenementC();

$evenement = $evenementC->showevenement($id);
if (
    
    isset($_POST["nom_eve"]) &&
    isset($_POST["date_eve"])&&
    isset($_POST["lieu_eve"]) &&
    isset($_POST["duree_eve"])&&
    isset($_POST["association_ga"]) &&
    isset($_POST["somme"]) &&
    isset($_POST["nb_pt_eve"]) && 
	isset($_POST["maladie"]) &&
	isset($_POST["img_eve"])&&
	isset($_POST["note"])

    
) {
    if (
        
        !empty($_POST['nom_eve']) &&
        !empty($_POST['date_eve'])&&
        !empty($_POST['lieu_eve'])&&
        !empty($_POST['duree_eve'])&&
        !empty($_POST["association_ga"]) &&
        !empty($_POST["somme"]) &&
        !empty($_POST["nb_pt_eve"]) &&
        !empty($_POST["maladie"]) &&
		!empty($_POST["img_eve"])&&
		!empty($_POST["note"])

    ) {
        $evenement = new evenement(
            
            $_POST['nom_eve'],
            $_POST['date_eve'],
            $_POST['lieu_eve'],
            $_POST['duree_eve'],
            $_POST['association_ga'],
            $_POST['somme'],
            $_POST['nb_pt_eve'],
            $_POST['maladie'],
			$_POST['img_eve'],
			$_POST['note']
           
        );
        $evenementC->updateevenement($evenement,$id);
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
 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
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

					<li class="sidebar-item active ">
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
        
        

   
        <form action="" method="POST" name="mayssa" >
           
        <button class="btn btn-warning"><a href="Listevenements.php">Retour à la liste des évenements</a></button>
        
                          
                 


                <div class="card">
				<div class="card-header">
									<h5 class="card-title mb-0">NOM D'ÉVÉNEMENT</h5>
								</div>
								<div class="card-body">
									<input type="text" class="form-control" placeholder="Nom d'evenement" id="nom_eve" name="nom_eve" value="<?php echo $evenement['nom_eve']; ?>">
								</div>
								<p id="nomER" class="error"></P>
							</div>




                    
                <div class="card">
                <div class="card-header">
									<h5 class="card-title mb-0">DATE</h5>
								</div>
								<div class="card-body">
									<input type="datetime-local" id="date_eve" name="date_eve"  class="form-control" value="<?php echo $evenement['date_eve']; ?>">
								</div>
								<p id="dateER" class="error"></P>
                                </div>
 
								<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">LIEU</h5>
								</div>
								<div class="card-body">
									<select class="form-select mb-3" type="text" id="lieu_eve" name="lieu_eve" >
                                       <option selected>Sélectionner </option>
                                       <option>Tunis</option>
                                       <option>Sfax</option>
                                       <option>Sousse </option>
		                               
                                    </select>
		                        </div>
								<p id="lieuER" class="error"></P>
							</div>

							
                            <div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">DURÉE</h5>
								</div>
								<div class="card-body">
									<input type="time"   id="duree_eve" name="duree_eve" value="<?php echo $evenement['duree_eve']; ?>">
								</div>
								<p id="dureeER" class="error"></P>
							</div>

                        

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">ASSOCIATION ASSOCIÉE</h5>
								</div>
								<div class="card-body">
									<input type="text" class="form-control"  placeholder="ASSOCIATION ASSOCIÉE" id="association_ga" name="association_ga" value="<?php echo $evenement['association_ga']; ?>">
								</div>
								<p id="associationER" class="error"></P>
							</div>
                           
                            <div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">SOMME</h5>
								</div>
								<div class="card-body">
									<input type="number" id="somme" name="somme"    placeholder="SOMME" value="<?php echo $evenement['somme']; ?>">
								</div>
								<p id="sommeER" class="error"></P>
							</div>

                            <div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">NOMBRE DE POINTS EN RÉCOMPENSE </h5>
								</div>
								<div class="card-body">
									<input type="number" id="nb_pt_eve" name="nb_pt_eve"    placeholder="NOMBRE DE POINTS EN RÉCOMPENSE" value="<?php echo $evenement['nb_pt_eve']; ?>">
								</div>
								<p id="pointER" class="error"></P>
							</div>

                            <div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">INTERDIT À CEUX QUI SOUFFRENT DE</h5>
								</div>
								<div class="card-body">
									<select class="form-select mb-3" type="text" id="maladie" name="maladie" value="<?php echo $evenement['maladie']; ?>" >
                                       <option selected>Sélectionner </option>
                                       <option>L’asthme</option>
                                       <option>La polyarthrite rhumatoïde</option>
                                       <option>La bronchopneumopathie chronique obstructive </option>
		                               <option>L’infarctus ou l'insuffisance coronarienne</option>
		                               <option>L'hypertension artérielle</option>
                                    </select>
		                        </div>
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">IMAGE </h5>
								</div>
								<div class="card-body">
								<input type="file" id="img_eve" name="img_eve" value="<?php echo $evenement['img_eve']; ?>">
								</div>
							</div>
                            
							
         <div class="rateyo" id= "note" value="<?php echo $evenement['note']; ?>"
         
         >
         <i class="rateyo" data-value="1"></i>
         <i class="rateyo" data-value="2"></i>
         <i class="rateyo" data-value="3"></i>
         <i class="rateyo" data-value="4"></i>
         <i class="rateyo" data-value="5"></i>
         </div>
        
        
    <span class='result'></span>
    <input type="hidden" name="note">
 
    
<br>
                
                 <input class="btn btn-success" type="submit" value="Modifier"> 
                   
                        <input type="reset" value="Annuler" >
					          
        
						<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
 
<script>
     $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var note = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :'+ note);
            $(this).parent().find('input[name=note]').val(note); //add rating value to input field
        });
    });
 
</script>
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