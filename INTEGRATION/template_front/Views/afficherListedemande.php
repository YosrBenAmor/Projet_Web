<?php
include '../../controller/demandeC.php';
session_start();
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



    <center>
        <h1>List of demandes</h1>
        <h2>
            <a href="adddemande.php"> demande</a>
        </h2>

        <table border="1" align="center" width="70%">
            <tr>
                <th>Id demande</th>
                <th> Name</th>
                <th>mot de passe </th>
                <th>email</th>
                <th>reffdd</th>
                <th>telp</th>
                <th>status</th>

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