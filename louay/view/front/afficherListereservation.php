<?php
include '../../controller/reservationC.php';
$reservationC = new reservationC();
$listereservation = $reservationC->afficherListereservations();
?>
<html>

<head></head>

<body>

    <center>
        <h1>List of reservations</h1>
        <h2>
            <a href="addreservation.php"> reservation</a>
        </h2>
    </center>
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
                
                
            
                
            <button><i class="align-middle me-2"><span role="img" aria-label="no"> <a href="deletereservation.php?idReservation=<?PHP echo $reservation['idReservation']; ?>" >❌</span></a> </i></button>
            
            
            </td>
            </tr>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>