<?php
include '../Controller/donsC.php';
$donC = new donC();
$donC->deletedon($_GET["id_don"]);
header('Location:Listdon.php');