<?php
include '../Controller/evenementC.php';
$evenementC = new evenementC();
$evenementC->deleteevenement($_GET["id_eve"]);
header('Location:Listevenements.php');
