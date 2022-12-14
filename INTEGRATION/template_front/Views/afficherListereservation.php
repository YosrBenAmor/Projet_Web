<?php

$_SESSION['id'] = 22;
include '../controller/reservationC.php';
$reservationC = new reservationC();
$listereservation = $reservationC->afficherListereservations();
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>PHPJabbers.com | Free Blog Website Template</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>
</head>
<header id="header" class="alt">
					<a  class="logo"><img src="images/logo.png"  /></a>
					<?php echo $_SESSION['nom'];?> 
					<?php echo $_SESSION['prenom'];?> 
					 
					
					<nav>
					
					<a href="profile.php" >Profile<a>
						<a href="#menu">Menu</a>
						 
					</nav>
				</header>

				<!-- Menu -->
				<nav id="menu">
				<ul class="links">
					<li > <a href="acceuil2.php">Acceuil </a> </li>

					<li> <a href="front.php">Catégorie</a> </li>

					<li class="active" > <a href="addreservation.php">Reservation</a> </li>

					<li > <a href="adddemande.php">Demande</a> </li>

				
					<li> <a href="afficherListeEvenements.php">Evenement</a> </li>

					<li><a href="afficherassociationf.php">Association</a></li>
				</ul>
			</nav>


<body class="is-preload">

    <center>
        <br><br>
        <br><br>
        <h2>Liste des reservations</h2>
        <h2>
            <a href="addreservation.php">Réservation</a>
        </h2>

        <table border="1" align="center" width="70%">
            <tr>
                
                <th>Nom</th>
                <th>Prénom</th>
                <th>Adresse</th>
                <th>téléphone</th>
                <th>Référence</th>

            </tr>
            <?php
            foreach ($listereservation as $reservation) {
            ?>
                <tr>
                     
                    <td><?= $reservation['lastName']; ?></td>
                    <td><?= $reservation['firstName']; ?></td>
                    <td><?= $reservation['address']; ?></td>
                    <td><?= $reservation['phonenumber']; ?></td>
                    <td><?= $reservation['reff']; ?></td>

                    <td>
    </center>


    <button>
        <i class="align-middle me-2">
            <span role="img" aria-label="no">
                <a href="deletereservation.php?idReservation=<?= $reservation['idReservation'] ?>&id=<?=$_SESSION['id'] ?> ">❌ </a>
            </span>
        </i>
    </button>


    </td>
    </tr>
    </tr>
<?php
            }
?>
</table>
</td>
</tr>
</tr>

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