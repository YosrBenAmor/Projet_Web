<?php

require_once '../Controller/ParticipationC.php';

$error = "";

// create participation

$id=$_GET["id_part"];
	


// create an instance of the controller
$participationC = new participationC();
$participation = $participationC->recupererParticipation($id);
if (
	
	
	isset($_POST["nom_part"]) &&		
	isset($_POST["prenom_part"]) &&
	isset($_POST["age_part"]) && 
	isset($_POST["mail_part"]) &&
	isset($_POST["num_part"]) 
) { 
    if (
	
        !empty($_POST["nom_part"]) &&
            !empty($_POST["prenom_part"]) && 
			!empty($_POST["age_part"]) && 
            !empty($_POST["mail_part"]) && 
            !empty($_POST["num_part"]) 
			
    ) {
        $participation = new participation(
			$_POST['nom_part'],
                $_POST['prenom_part'],
                $_POST['age_part'],
                $_POST['mail_part'],
                $_POST['num_part'],
				$id
				
				
				
        );
	
        $participationC->modifierParticipation($participation, $id);
        header('Location:afficherListeParticipation.php');
    } else
        $error = "Missing information";
}
?>
<!DOCTYPE HTML>
<html>
<head>
		<title>PHPJabbers.com | Free Blog Website Template</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

		<style>
  .error{
    color: red;
}
</style>
	<script type="text/javascript" src="validation11.js"></script>

	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<header id="header" class="alt">
					<a href="index.html" class="logo"><img src="images/logo.png"  /></a>
					<nav>
						<a href="afficherListeParticipation.php">Participation</a>
						<a href="#menu">Menu</a>
					</nav>
				</header>

				<!-- Menu -->
				<nav id="menu">
					<ul class="links">
						
		                <li> <a href="index.html">Acceuil </a> </li>

		                <li> <a href="blog.html">blog</a> </li>

		                <li> <a href="about-us.html">Cat??gorie</a> </li>
		                
		                <li class="active"> <a href="afficherListeparticipations.php">participation</a> </li>

		                
		                <li ><a href="Dons.html">Dons</a></li>
            		</ul>
				</nav>

				     
				<form action="" method="POST"  name="mayssa" onsubmit="return validateForm(event)" >
        
                             <br>
							 <br>
							 
							 <div class="inner">
							<section>
		                           <div class="fields">
										<div class="field half">

											<div class="field">
												<label for="NOM">VOTRE NOM</label>
												<input type="text" class="form-control" placeholder="Nom du participant" id="nom_part" name="nom_part" value="<?php echo $participation['nom_part']; ?>" />
											</div>
											<p id="nomER" class="error"></P>
										</div>
										
									</div>
                                    <br>
                                    <div class="fields">
										<div class="field half">

											<div class="field">
												<label for="PRENOM">VOTRE PR??NOM</label>
												<input type="text" class="form-control" placeholder="Pr??nom du participant" id="prenom_part" name="prenom_part" value="<?php echo $participation['prenom_part']; ?>" />
											</div>
											<p id="prenomER" class="error"></P>
										</div>
									</div>
                                    <br>
									<div class="fields">
										<div class="field half">

											<div class="field">
												<label for="AGE">VOTRE AGE</label>
												<input type="number" class="form-control" id="age_part" name="age_part"    placeholder="Age" value="<?php echo $participation['age_part']; ?>" />
											</div>
											<p id="ageER" class="error"></P>
										</div>
									</div>
                                    <br>
									<div class="fields">
										<div class="field half">

											<div class="field">
												<label for="MAIL">VOTRE MAIL</label>
												<input type="text" class="form-control" id="mail_part" name="mail_part"    placeholder="Mail" value="<?php echo $participation['mail_part']; ?>" />
											</div>
											<p id="mailER" class="error"></P>
										</div>
									</div>
									<br>
									<div class="fields">
										<div class="field half">

											<div class="field">
												<label for="NUM??RO">VOTRE NUM??RO</label>
												<input type="text" id="num_part" name="num_part"    placeholder="Numero" value="<?php echo $participation['num_part']; ?>"/>
											</div>
											<p id="numER" class="error"></P>
										</div>
									</div>
                                     <br>

                        <input class="btn btn-success" type="submit" value="Envoyer"> <a href="afficherListeParticipation.php"></a> 
                   
                        <input type="reset" value="Annuler" >
                    
        </form></div>
		<hr>
				<!-- Footer -->
				<footer id="footer">
					<div class="inner">
						<ul class="icons">
							<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
						</ul>
						<ul class="copyright">
							<li>Copyright ?? 2020 Company Name - Template by:</li>
							<li> <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
						</ul>
					</div>
				</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>