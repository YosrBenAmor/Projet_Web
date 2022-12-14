<?php
include '../controller/demandeC.php';

$demandeC = new demandeC();
$listedemande = $demandeC->afficherListedemande();
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

<body class="is-preload">
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

					<li > <a href="addreservation.php">Reservation</a> </li>

					<li class="active"> <a href="adddemande.php">Demande</a> </li>

				
					<li> <a href="afficherListeEvenements.php">Evenement</a> </li>

					<li><a href="afficherassociationf.php">Association</a></li>
				</ul>
			</nav>



    <center>
        <br><br><br><br>
        
        <h1>Liste des demandes</h1>
        <h2>
            <a href="adddemande.php"> Demande</a>
        </h2>

        <table border="1" align="center" width="70%">
            <tr>
                 
                <th> Nom</th>
                <th>Mot de passe </th>
                <th>Émail</th>
                <th>Référence</th>
                <th>Téléphone</th>
                <th>Status</th>

            </tr>
    </center>
    <?php
    foreach ($listedemande as $demande) {
    ?>
        <tr>
            <td><?= $demande['iddemande']; ?></td>
            <td><?= $demande['name']; ?></td>
            <td><?= $demande['mdp']; ?></td>
            <td><?= $demande['email']; ?></td>
            <td><?= $demande['reffd']; ?></td>
            <td><?= $demande['telp']; ?></td>
            <td><?= $demande['status']; ?></td>
            <td>




                <button>
                    <i class="align-middle me-2">
                        <span role="img" aria-label="no">
                            <a href="deletedemande.php?idDemande=<?= $demande['iddemande'] ?>id=<?= $_SESSION['id'] ?>">❌</a>
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