<?php
include '../Controller/associationC.php';
$associationC = new associationC();
$associationC->deleteassociation($_GET["id_ass"]);
header('Location:Listassociation.php');
