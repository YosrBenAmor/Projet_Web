<?php
include '../Controller/donsC.php';
$donC = new donC();
$donC->deletedon($_GET["id_don"]);
header('Location:Afficherdonf.php?id='.$_SESSION['id']);