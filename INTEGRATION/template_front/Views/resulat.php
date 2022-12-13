<?php
include '../../controller/demandeC.php';
 
$id= 150;
$demandeC = new demandeC();
$list = $demandeC->afficherListedemande();


 
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
	</head>
	<body class="is-preload">

    <center>

<?php
echo strtoupper("la resulat de votre reservation est :");
?>
 
 <?php
		foreach ($list as $demande) {
		?>
		<div class="card-body text-center"><?php echo $demande['status']; ?></div>
		  
			
		<?php
         }
        ?>
			
			
			 
 </center>
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
 