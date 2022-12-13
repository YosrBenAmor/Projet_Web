<?php
session_start();
$_SESSION['id'] = 22;
include '../../controller/reservationC.php';
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

<body class="is-preload">

    <center>
        <h1>List of reservations</h1>
        <h2>
            <a href="addreservation.php"> reservation</a>
        </h2>

        <table border="1" align="center" width="70%">
            <tr>
                <th>Id reservation</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>phonenumber</th>
                <th>reff</th>

            </tr>
            <?php
            foreach ($listereservation as $reservation) {
            ?>
                <tr>
                    <td><?= $reservation['idReservation']; ?></td>
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