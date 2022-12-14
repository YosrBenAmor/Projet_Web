<?php
    
    require_once('../Controller/ParticipationC.php');
	

    $error = "";
    $id=$_GET["id_eve"];
	$id1=$_GET["id"];
    // create adherent
    $participation = null;

    // create an instance of the controller
    $participationC = new participationC();
    if (
        
		
		isset($_POST["nom_part"]) &&		
        isset($_POST["prenom_part"]) &&
		isset($_POST["age_part"]) && 
        isset($_POST["mail_part"]) &&
        isset($_POST["num_part"]) 
	
		
       

    ) 
     {
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
				$id,
				$id1
                
               

            );
            $participationC->ajouterParticipation($participation);
            header('Location:afficherDetailsEvenements .php');
        }
        else
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
					<a   class="logo"><img src="images/logo.png"  /></a>
					<?php echo $_SESSION['nom'];?> 
					<?php echo $_SESSION['prenom'];?> 
					 					<nav>
					
						<a href="afficherListeParticipation.php?id=<?php  echo $_SESSION['id']; ?>">Participation</a>
						<a href="profile.php" >Profile<a>
						<a href="#menu">Menu</a>
					</nav>
				</header>

				<!-- Menu -->
				<nav id="menu">
				<ul class="links">
					<li > <a href="acceuil2.php">Acceuil </a> </li>

					<li> <a href="front.php">Catégorie</a> </li>

					<li > <a href="addreservation.php">Reservation</a> </li>

					<li > <a href="adddemande.php">Demande</a> </li>

				
					<li class="active"> <a href="afficherListeEvenements.php">Evenement</a> </li>

					<li><a href="afficherassociationf.php">Association</a></li>
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
												<input type="text" class="form-control" placeholder="Nom du participant" id="nom_part" name="nom_part" value="<?php echo $_SESSION['nom'];?>" />
											</div>
											<p id="nomER" class="error"></P>
										</div>
										
									</div>
                                    <br>
                                    <div class="fields">
										<div class="field half">

											<div class="field">
												<label for="PRENOM">VOTRE PRÉNOM</label>
												<input type="text" class="form-control" placeholder="Prénom du participant" id="prenom_part" name="prenom_part" value="<?php echo $_SESSION['prenom'];?>" />
											</div>
											<p id="prenomER" class="error"></P>
										</div>
									</div>
                                    <br>
									<div class="fields">
										<div class="field half">

											<div class="field">
												<label for="AGE">VOTRE AGE</label>
												<input type="number" class="form-control" id="age_part" name="age_part"    placeholder="Age" />
											</div>
											<p id="ageER" class="error"></P>
										</div>
									</div>
                                    <br>
									<div class="fields">
										<div class="field half">

											<div class="field">
												<label for="MAIL">VOTRE MAIL</label>
												<input type="text" class="form-control" id="mail_part" name="mail_part"    placeholder="Mail" value="<?php echo $_SESSION['email'];?>" />
											</div>
											<p id="mailER" class="error"></P>
										</div>
									</div>
									<br>
									<div class="fields">
										<div class="field half">

											<div class="field">
												<label for="NUMÉRO">VOTRE NUMÉRO</label>
												<input type="text" id="num_part" name="num_part"    placeholder="Numero" value="<?php echo $_SESSION['tel'];?>"/>
											</div>
											<p id="numER" class="error"></P>
										</div>
									</div>
                                     <br>

                        <input class="btn btn-success" type="submit" value="Envoyer"> <a href="afficherDetailsEvenements .php?id_eve=<?php echo $participation['id_eve']; ?>"></a> 
                   
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
							<li>Copyright © 2020 Company Name - Template by:</li>
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


