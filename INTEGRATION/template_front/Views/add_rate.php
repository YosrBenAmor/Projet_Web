<?php

include '../Controller/evenementC.php';

$error = "";
$id=$_GET["id_eve"];

$evenementC = new evenementC();

$evenement = $evenementC->showevenement($id);
if (
    
   
	isset($_POST["note"])

    
) {
    if (
        
        
		!empty($_POST["note"])

    ) {
        $evenement = new evenement(
            
            $evenement['nom_eve'],
            $evenement['date_eve'],
            $evenement['lieu_eve'],
            $evenement['duree_eve'],
            $evenement['association_ga'],
            $evenement['somme'],
            $evenement['nb_pt_eve'],
            $evenement['maladie'],
			$evenement['img_eve'],
			$_POST['note']
           
        );
        $evenementC->updateevenement($evenement,$id);
        header('Location:afficherDetailsEvenements .php');
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
		

	<link  href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
	<style>
	.form-control{
    color: black}
    </style>


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
					<li > <a href="acceuil.php">Acceuil </a> </li>

					<li > <a href="addreservation.php">Reservation</a> </li>

					<li> <a href="front.php">Catégorie</a> </li>

					<li class="active"> <a href="afficherListeEvenements.php">Evenement</a> </li>

					<li><a href="afficherassociationf.php">Association</a></li>
				</ul>
			</nav>
            
            <main class="content">
        
        <!-- Main -->
					<div id="main" class="alt">
                    
                    <section id="one">
                        <div class="inner">
                            <header class="major">
                                <h1>Noter cet évenement</h1>
                                
                             </header>

   
        <form action="" method="POST" name="mayssa" >
           
        <button class="btn btn-warning"><a href="../Views/afficherDetailsEvenements .php">Retour à la liste des évenements</a></button>
        
                 <br>         
                 <br>
        <div class="inner">
							
		                                 
									
                                <label for="NOTE"> NOTE</label>
							
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
 
    </div>

            <br>    
                 <input class="btn btn-success" type="submit" value="Modifier"> 
                   
                     <br><br> <hr><br>
                       
        </form></div>
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
<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
            <script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
      

			
	</body>
</html>	