<?php
include '../../controller/demandeC.php';
$demandeC = new demandeC();
$listedemande = $demandeC->afficherListedemande();
?>
<html>

<head></head>

<body>

    <center>
        <h1>List of demandes</h1>
        <h2>
            <a href="adddemande.php"> demande</a>
        </h2>
    </center>
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
                
                
            
                
            <button><i class="align-middle me-2"><span role="img" aria-label="no"> <a href="deletedemande.php?iddemande=<?PHP echo $demande['iddemande']; ?>" >❌</span></a> </i></button>
            
            
            </td>
            </tr>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>